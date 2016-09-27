var btnEnviar = $('#btnEnviar'),
    chkAcepto = $('#chkAcepto'),
    inpNombre = $('#inpNombre'),
    inpPostula= $('#inpPostula'),
    inpEmail=$('#inpEmail'),
    inpArchivo= $('#inpArchivo'),
    btnEnviar= $('#btnEnviar'),
    formPostulate=$('#formPostulate'),
    inpEmpresa=$('#inpEmpresa'),
    aceptoCheck=$('#aceptoCheck'),
    archivo = document.getElementsByName("_archivo");
var procesoEnviar=$('#procesoEnviar');
var inpArea=$('#inpArea');

function estadoBoton(){
  if (chkAcepto.is(':checked')){
    aceptoCheck.removeClass('fondoRojo');
  }
  else{
    aceptoCheck.addClass('fondoRojo');
  }
}

function limpiar(){
  chkAcepto.prop( "checked", false );
  inpNombre.val('');
  inpEmpresa.val('');
  inpEmail.val('');
  inpPostula.val('');
}

function enviarCV(){

  if (!verificarContenido()) {
    return false;
  }
  procesoEnviar.removeClass('hidden');
  var formData = new FormData($("#formPostulate")[0]);


  var datos = $.ajax({
    url:'enviarCurriculum',
    data: formData,
    type:'post',
    dataType:'json',
    processData: false,
    contentType: false,
    async:false
  }).error(function(e){
      alert('Ocurrio un error, intente de nuevo');
  }).responseText;

  var tituloAlert="",textoAlert="",estadoAlert="";
  var res;
  try{
      res = JSON.parse(datos);
  }catch (e){
      alert('Error JSON ' + e);
  }

  if ( res.status === 'OK' ){
    tituloAlert = "Información enviada correctamente.";
    textoAlert = res.message;
    estdoAlert = "success";
    limpiar();
  }else{
    tituloAlert = "Error.";
    textoAlert = res.message;
    estdoAlert = "error";
  }
  swal(tituloAlert, textoAlert, estdoAlert);
  procesoEnviar.addClass('hidden');
}

function verificarContenido(){
  if((inpNombre.val() == '' )||(inpNombre.val() == null)){
    inpNombre.focus();
    swal("Favor de ingresar nombre.","", "warning");
    return false;
  }
/*  if((inpPostula.val() == '' )||(inpPostula.val() == null)){
    inpPostula.focus();
    swal("Favor de ingresar la vacante a postularse.","", "warning");
    return false;
  }*/
/*  if((inpPostula.val() == '' )||(inpPostula.val() == null)){
    inpPostula.focus();
    swal("Favor de ingresar la vacante a postularse.","", "warning");
    return false;
  }*/
  if (!chkAcepto.is(':checked')){
    swal("Favor de leer y aceptar  la Política de uso y privacidad del sitio web y el Aviso de privacidad para aspirantes.","", "warning");
    aceptoCheck.addClass('fondoRojo');
    return false;
  }

  var input = document.querySelector("[type=file]");
  var cadenaDividida = input.value.split(".");
  extension=cadenaDividida[1];
  var extArchivo=false;

  console.log(extension);
  /*if (extension.toLowerCase() != "pdf"){
      swal("Favor de ingresar el archivo con su C.V. o verificar la extención del archivo.","", "warning");
      return false;
  }*/
  if ((extension.toLowerCase() == "pdf") || (extension.toLowerCase() == "doc") || (extension.toLowerCase() == "docx")){
    extArchivo=true;
  }
  else{
    swal("Favor de ingresar el archivo con su C.V. o verificar la extención del archivo.","", "warning");
    return false;
  }
  //return false;
  return true;
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

/*function validarEnable(){
  empresa=inpEmpresa.val();
  puesto=inpPostula.val();

  if ((empresa != null ) || (empresa != '' )) {
    document.getElementById("inpEmpresa").disabled = false;
  }
  else{
      document.getElementById("inpEmpresa").disabled = true;
  }

  if ((puesto != null ) || (puesto != '' )) {
    document.getElementById("inpPostula").disabled = false;
  }
  else{
    document.getElementById("inpPostula").disabled = true;
  }



}*/
function cambioSelectArea(){
  var x=document.getElementById("optionSemiS");
  areaSeleccionada = inpArea.val();
  if (areaSeleccionada == "Contable") {
      x.disabled=false;
  }
  else {
    x.disabled=true;
  }
}


$(document).on('ready', function(){
  limpiar();
  //estadoBoton();


  var vacSelecionado = getParameterByName('vac');
  var vacEmpresa = getParameterByName('emp');
  var areaSeleccionada = getParameterByName('area');
  console.log(vacEmpresa);
  console.log(vacSelecionado);

  if ((vacEmpresa  == 'VHC') || (vacEmpresa  == 'Empresa_Privada')) {
      inpEmpresa.val(vacEmpresa);
      document.getElementById("inpEmpresa").disabled = true;
  }
  else {
    document.getElementById("inpEmpresa").disabled = false;
  }


    if((areaSeleccionada != '') && (areaSeleccionada != null)) {
       inpArea.val(areaSeleccionada);
       document.getElementById("inpArea").disabled = true;
     }
     else {
      document.getElementById("inpArea").disabled = false;
    }

  if((vacSelecionado != '') && (vacSelecionado != null)) {
     inpPostula.val(vacSelecionado);
     document.getElementById("inpPostula").disabled = true;
   }
   else {
    document.getElementById("inpPostula").disabled = false;
  }



});
btnEnviar.on('click',enviarCV);
chkAcepto.on('click',estadoBoton);
inpArea.change(cambioSelectArea);
