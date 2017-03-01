var btnEnviar = $('#btnEnviar'),
    inpNombre = $('#inpNombre'),
    inpEmpresa = $('#inpEmpresa'),
    inpTelefono = $('#inpTelefono'),
    inpEmail = $('#inpEmail'),
    txtMensaje = $('#txtMensaje'),
    chkAcepto = $('#chkAcepto'),
    contactoh = $('#contactoh');
var procesoEnviar=$('#procesoEnviar'),
    aceptoCheck =$('#aceptoCheck');
var RegExPattern=/^([\w\s\n\-\¿\?.,:áéíóúÁÉÍÓÚñÑ])+$/;
//var regExTelefono=/^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
var regExTelefono=/^(\d{2})*\d{8}$/;
/*var RegExTelInternacional= \^\(\+\d{2,3}\)\d{9,10}$\;
var RegExTelInternacional= \^\d{9}$\;
*/
var regExCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

function enviar(){

  if ( !verificarContenido() ){

    return false;
  }
  procesoEnviar.removeClass('hidden');
//  alert("envio");

  var datos = $.ajax({
    url:'../php/contacto/enviarContacto.php',
    data: {
      nombreContacto: inpNombre.val(),
      empresa:  inpEmpresa.val(),
      telefonoContacto: inpTelefono.val(),
      correoContacto: inpEmail.val(),
      condicionesContacto: chkAcepto.prop( "checked" ),
      mensajeContacto: txtMensaje.val(),
      contactoh: contactoh.val()
    },
    type:'post',
    dataType:'json',
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
    tituloAlert = "Mensaje enviado";
    textoAlert = res.message;
    estdoAlert = "success";
    limpiar();

  }else{
    tituloAlert = "No se pudo enviar el mensaje";
    textoAlert = res.message;
    estdoAlert = "error";
  }
  swal(tituloAlert, textoAlert, estdoAlert);
  procesoEnviar.addClass('hidden');

}

function limpiar(){
  inpNombre.val('');
  inpEmpresa.val('');
  inpTelefono.val('');
  inpEmail.val('');
  txtMensaje.val('');
  chkAcepto.prop( "checked", false );
}

function verificarCheck(){
  if (chkAcepto.is(':checked')){
    aceptoCheck.removeClass('fondoRojo');
  }
  else{
    aceptoCheck.addClass('fondoRojo');

  }
}

function verificarContenido(){

  if((inpNombre.val() == '' )||(inpNombre == null)){
    inpNombre.focus();
    swal("Favor de indicar nombre.","", "warning");
    return false;
  }
  if((inpTelefono.val() == '' )||(inpTelefono == null)){
    inpTelefono.focus();
    swal("Favor de indicar número telefonico.","", "warning");
    return false;
  }
  if(! regExTelefono.test(inpTelefono.val())){
    inpTelefono .focus();
    swal("Favor de ingresar un número teléfonico válido.","", "warning");
    return false;
  }

  if((inpEmail.val() == '' )||(inpEmail == null)){
    inpEmail.focus();
    swal("Favor de indicar correo electrónico.","", "warning");
    return false;
  }
  if(! regExCorreo.test(inpEmail.val())){
    inpEmail.focus();
    swal("Favor de ingresar un correo válido.","", "warning");
    return false;
  }
  if((txtMensaje.val() == '' )||(txtMensaje == null)){
    txtMensaje.focus();
    swal("Favor de ingresar su mensaje.","", "warning");
    return false;
  }
  if(! RegExPattern.test(txtMensaje.val())){
    inpEmail.focus();
    swal("Algún caracter del mensaje no es válido, no se admiten comillas, punto y coma, etc.","", "warning");
    return false;
  }

  if (chkAcepto.is(':checked')){
    return true;
  }
  else{
  //  chkAcepto.focus();
    swal("Debe aceptar las políticas de uso y privacidad.","Para hacer uso de este sitio web usted deberá aceptar las políticas de uso y privacidad.", "warning");
    aceptoCheck.addClass('fondoRojo');
    return false;
  }
}

function comprobarNombre(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnNombre').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnNombre').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfabeticos.';
  }
}

function comprobarEmpresa(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnEmpresa').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnEmpresa').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfanuméricos.';
  }
}


function comprobarTel(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnTel').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnTel').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfanuméricos.';
  }
}
function comprobarMensaje(e){
  var elem = e.target;
  if (elem.value.match(RegExPattern)) {
    document.getElementById('spnMensaje').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnMensaje').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo se aceptan caracteres alfanuméricos.';
  }
}

btnEnviar.on('click', enviar);
$(document).on('ready', function(){
  //limpiar();
  intNombre = document.querySelector("input[name='nombreContacto']");
  intNombre.addEventListener("input", comprobarNombre);
  intEmpresa = document.querySelector("input[name='nombreEmpresa']");
  intEmpresa.addEventListener("input", comprobarEmpresa);
  intTel = document.querySelector("input[name='telefonoContacto']");
  intTel.addEventListener("input", comprobarTel);
  intMensaje = document.getElementById("txtMensaje");
  intMensaje.addEventListener("input", comprobarMensaje);
});
$('#navContacto').addClass('activoLi');
chkAcepto.on('click',verificarCheck);
