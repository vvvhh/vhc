/*edSantiago*/
var btnSiguiente =$('#btnSiguiente'),
    btnSalir =$('#btnSalir'),
    btnContinuar = $('#btnContinuar');
var barraProceso = $('#barraProceso');
var pnlResultado=$('#pnlResultado'),
    pnlPregunta =$('#pnlPregunta'),
    pnlCheck =$('#pnlCheck'),
    pnlDatos =$('#pnlDatos'),
    ulIntegrate =$('#ulIntegrate');
var pregunta = document.getElementById("pregunta");
var titulo   = document.getElementById("titulo");
var txtResultado = document.getElementById("txtResultado");
var nSi=0, nNo=0, nPregunta=0, cuestionario=0;
var badgeNP   = document.getElementById("badgeNP");
var pre0 = document.getElementsByName("pre0"),
    pre1 = document.getElementsByName("pre1"),
    pre2 = document.getElementsByName("pre2"),
    pre3 = document.getElementsByName("pre3"),
    pre4 = document.getElementsByName("pre4");
var barDanger = $('#barDanger'),
    barWarning = $('#barWarning'),
    barSuccess = $('#barSuccess');
var respuesta0 = new Array(9)

var titulos =[
               '<strong><i class="fa fa-suitcase text-primary"></i> Prevención de Lavado de Dinero</strong>',
               /*'<strong><i class="fa fa-male text-primary"></i> Capacitación y adiestramiento.</strong>',
               '<strong><i class="fa fa-medkit text-primary"></i> Seguridad e higiene.</strong>'*/
              ];
var liCapAdi = $('#liCapAdi'),
liCondGT = $('#liCondGT'),
liSegHig = $('#liSegHig');
var porcentaje0 = 0, porcentaje1 = 0,porcentaje2 = 0;
var realizo0 = 0, realizo1 = 0, realizo2 = 0;

                 var preguntas0 = ["1. ¿Está familiarizado con la LFPIORPI*?",
                                  "2. ¿Realiza actividades vulnerables?",
                                  "3. ¿Se dio de alta en el Portal Antilavado del SAT?",
                                  "4. ¿Tiene políticas para identificar a sus clientes?",
                                  "5. ¿Elabora expedientes de identificación de sus clientes?",
                                  "6. ¿Lleva un registro de operaciones por cada cliente?",
                                  "7. ¿Cuenta con un Manual de Políticas y Procedimientos en materia de PLD?",
                                  "8. ¿Conoce las restricciones en el uso de efectivo?",
                                  "9. ¿Conoce las sanciones administrativas para quienes infrinjan la LFPIORPI?"
                                  ];


var btnEnviar = $('#btnEnviar'),
    inpNombre = $('#inpNombre'),
    inpTelefono = $('#inpTelefono'),
    inpEmail = $('#inpEmail'),
    chkAcepto = $('#chkAcepto'),
    token = $('#_token');
var RegExPattern=/^([\w\s\n\-\¿\?.,:áéíóúÁÉÍÓÚñÑ])+$/;

function locationVars (vr){
        var src = String( window.location.href ).split('?')[1];
        var variables = src.split('&');
        for (var x = 0, c = variables.length; x < c; x++){
        	if (variables[x].indexOf(vr) != -1){
        		return decodeURI( variables[x].split('=')[1] );
        		break;
        	};
        };
};




function getRespuestas(){

  res = new Array(5);
  var i =0;
  var resultado = 0;

  for(i=0;i<pre0.length;i++){
      if(pre0[i].checked)
        resultado=pre0[i].value;
  }
  res[0] = resultado;

  for(i=0;i<pre1.length;i++){
      if(pre1[i].checked)
          resultado=pre1[i].value;
  }
  res[1] = resultado;

  for(i=0;i<pre2.length;i++){
      if(pre2[i].checked)
          resultado=pre2[i].value;
  }
  res[2] = resultado;

  for(i=0;i<pre3.length;i++){
      if(pre3[i].checked)
          resultado=pre3[i].value;
  }
  res[3] = resultado;

  for(i=0;i<pre4.length;i++){
      if(pre4[i].checked)
          resultado=pre4[i].value;
  }
  res[4] = resultado;
  return res;
}

function limpiar(){
  var i =0;
  for(i=0;i<pre0.length;i++){
      pre0[i].checked = false;
  }
  for(i=0;i<pre1.length;i++){
      pre1[i].checked = false;
  }
  for(i=0;i<pre2.length;i++){
      pre2[i].checked = false;
  }
  for(i=0;i<pre3.length;i++){
      pre3[i].checked = false;
  }
  for(i=0;i<pre4.length;i++){
      pre4[i].checked = false;
  }
  inpNombre.val('');
  inpTelefono.val('');
  inpEmail.val('');
  chkAcepto.prop( "checked", false );
}


function verificarContenido(){
  if((inpNombre.val() == '' )||(inpNombre == null)){
    inpNombre.focus();
    swal("Favor de indicar nombre.","", "warning");
    return false;
  }
  if((inpTelefono.val() == '' )||(inpTelefono == null)){
    inpTelefono.focus();
    swal("Favor de indicar número telefónico.","", "warning");
    return false;
  }
  if((inpEmail.val() == '' )||(inpEmail == null)){
    inpEmail.focus();
    swal("Favor de indicar correo electrónico.","", "warning");
    return false;
  }

  if (chkAcepto.is(':checked')){
    return true;
  }
  else{
    chkAcepto.focus();
    swal("Debe aceptar las políticas de uso y privacidad.","Para hacer uso de este sitio web usted debera aceptar las políticas de uso y privacidad.", "warning");
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


function enviar(){
  if ( !verificarContenido() )
    return false;

  var cal0 = 0;
  for (x=0;x<respuesta0.length;x++){
    if(respuesta0[x]==1){
      cal0++;
    }
  }
   porcentajeA = (cal0*100)/9;
   porcentaje0 = porcentajeA.toFixed(2);

  var datos = $.ajax({
    url:'enviarAutodiagnosticoPLD',
    data: {
      nombre: inpNombre.val(),
      telefono: inpTelefono.val(),
      correo: inpEmail.val(),
      condiciones: chkAcepto.prop( "checked" ),
      respuesta0: respuesta0,
      porcentaje0: porcentaje0,
      completo: 1,
      token: token.val()
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
}

function iniciarC(){ /************************************************************************/
  cuestionario++;
  nSi=0;
  nNo=0;
  nPregunta=0;
        console.log("siguienteRealizo0=0");
        pregunta.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta1.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta2.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta3.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta4.innerHTML = preguntas0[nPregunta];

    titulo.innerHTML = titulos[cuestionario];


    pnlDatos.addClass('hidden');
    pnlPregunta.removeClass('hidden');
    pnlCheck.removeClass('hidden');
  //  txtResultado.innerHTML = '';

    badgeNP.innerHTML = nPregunta-4;
}

  /*******************************************************************************/

  function continuar(){ /******************************************************/

    var nRespuesta;
    var resUsuario = new Array(5);
    var j=0;

    resUsuario = getRespuestas();
    nRespuesta = nPregunta - 4;
    nPregunta++;
    /*console.log("continuar------------------------");*/

    if (cuestionario==0) {
      console.log("continuar0");
      for (var i = nRespuesta; i < (nRespuesta+5); i++) {
        respuesta0[i] = resUsuario[j];
        j++;
      }
      if (nPregunta < 5) {
        pregunta.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta1.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta2.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta3.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta4.innerHTML = preguntas0[nPregunta];
      }
      if ( (nPregunta < 9)&& (nPregunta >= 5)){
        pregunta.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta1.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta2.innerHTML = preguntas0[nPregunta];
        nPregunta++;
        pregunta3.innerHTML = preguntas0[nPregunta];
        pregunta4.innerHTML = "";
      }
      else{
        /*console.log("continuar+20");
        evaluarRes(cuestionario);*/
        evaluarRes(cuestionario);
        /*alert("finalixo");*/
        pnlDatos.removeClass('hidden');
        pnlCheck.addClass('hidden');
      }
    }

  /*  if (cuestionario==1) {
      console.log("continuar1");
      for (var i = nRespuesta; i < (nRespuesta+5); i++) {
        respuesta1[i] = resUsuario[j];
        j++;
      }
      if (nPregunta < 20) {
        console.log("nPregunta-ContinuarC1 "+nPregunta);
        pregunta.innerHTML = preguntas1[nPregunta];
        nPregunta++;
        pregunta1.innerHTML = preguntas1[nPregunta];
        nPregunta++;
        pregunta2.innerHTML = preguntas1[nPregunta];
        nPregunta++;
        pregunta3.innerHTML = preguntas1[nPregunta];
        nPregunta++;
        pregunta4.innerHTML = preguntas1[nPregunta];
      }
      else{
        evaluarRes(cuestionario);
      }
    }
    if (cuestionario==2) {
      console.log("continuar2");
      for (var i = nRespuesta; i < (nRespuesta+5); i++) {
        respuesta2[i] = resUsuario[j];
        j++;
      }
      if (nPregunta < 20) {

        pregunta.innerHTML = preguntas2[nPregunta];
        nPregunta++;
        pregunta1.innerHTML = preguntas2[nPregunta];
        nPregunta++;
        pregunta2.innerHTML = preguntas2[nPregunta];
        nPregunta++;
        pregunta3.innerHTML = preguntas2[nPregunta];
        nPregunta++;
        pregunta4.innerHTML = preguntas2[nPregunta];
      }
      else{
        evaluarRes(cuestionario);
        alert("finalixo");
        pnlDatos.removeClass('hidden');
        pnlCheck.addClass('hidden');
      }
    }*/
    badgeNP.innerHTML = nPregunta-4;
    limpiar();
  }


/*******************************************************************************/
function evaluarRes(tCuestionario){
  var arregloRes = new Array(20);
  if (tCuestionario == 0) {
    arregloRes = respuesta0;
    realizo0 = 1;
  }
/*  if (tCuestionario == 1) {
    arregloRes = respuesta1;
    realizo1 = 1;
  }
  if (tCuestionario == 2) {
    arregloRes = respuesta2;
    realizo2= 1;
  }*/

  for (var i = 0; i < arregloRes.length; i++) {
    if (arregloRes[i] == 1) {
      nSi++;
    }
    else if (arregloRes[i] == 0) {
      nNo++;
    }
    else{
      nNo++;
    }
  }
  //alert("Si="+nSi+" No="+nNo);
  nSi=0;
  nNo=0;
  nPregunta=0;
  cuestionario++;
  if (tCuestionario == 0) {
    titulo.innerHTML = titulos[cuestionario];
  }
/*  if (tCuestionario == 1) {
    titulo.innerHTML = titulos[cuestionario];
  }
  if (tCuestionario == 2) {
    titulo.innerHTML = titulos[cuestionario];
  }*/
}

/***********************************************************************/

$(document).on('ready', function(){
  cuestionario=-1;
  iniciarC();
  limpiar();

  intNombre = document.querySelector("input[name='nombreContacto']");
  intNombre.addEventListener("input", comprobarNombre);
  intTel = document.querySelector("input[name='telefonoContacto']");
  intTel.addEventListener("input", comprobarTel);
});

btnContinuar.on('click',continuar);

btnEnviar.on('click', enviar);
