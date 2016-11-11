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
var respuesta0 = new Array(20),
    respuesta1 = new Array(20),
    respuesta2 = new Array(20);
var titulos =[
               '<strong><i class="fa fa-suitcase text-primary"></i> Condiciones generales de trabajo.</strong>',
               '<strong><i class="fa fa-male text-primary"></i> Capacitación y adiestramiento.</strong>',
               '<strong><i class="fa fa-medkit text-primary"></i> Seguridad e higiene.</strong>'
              ];
var liCapAdi = $('#liCapAdi'),
liCondGT = $('#liCondGT'),
liSegHig = $('#liSegHig');
var porcentaje0 = 0, porcentaje1 = 0,porcentaje2 = 0;
var realizo0 = 0, realizo1 = 0, realizo2 = 0;

var preguntas1 = ["1. ¿En el contrato individual de trabajo,  existen cláusulas relativas a la capacitación y adiestramiento del  trabajador?",
                 "2. ¿Sabe con precisión de donde surge la obligación del patrón por capacitar a los trabajadores?",
                 "3. ¿Conoce la diferencia que existe entre  la capacitación y el adiestramiento?",
                 "4. ¿Sabe en qué momento debe llevarse a cabo la capacitación y el adiestramiento?",
                 "5. ¿Conoce cuánto tiempo debe durar la capacitación y el adiestramiento en su centro de trabajo?",
                 "6. ¿Sabe a partir de qué número de trabajadores  el patrón tiene la obligación de conformar la Comisión Mixta de Capacitación y Adiestramiento?",
                 "7. ¿Conoce cómo debe estar integrada la Comisión Mixta de Capacitación y Adiestramiento?",
                 "8. ¿Sabe bajo qué circunstancias es posible constituir más de una Comisión Mixta de Capacitación y Adiestramiento?",
                 "9. ¿Conoce las  funciones prioritarias de la Comisión Mixta de Capacitación y Adiestramiento?",
                 "10. ¿Sabe cuáles son las finalidades y los objetivos que busca la capacitación y el adiestramiento  en los centros de trabajo?",
                 "11. ¿Conoce los formatos  en los que deben presentarse los planes y programas ante la autoridad laboral?",
                 "12. ¿Sabe cuántos formatos tiene la Secretaría del Trabajo y Previsión Social para que le reporten actividades de capacitación y adiestramiento?",
                 "13. ¿Conoce cuál es el plazo máximo que tiene el patrón,  para presentar los planes y programas de capacitación y adiestramiento?",
                 "14. ¿Sabe  cuál es el procedimiento para dar a conocer a la Secretaria del Trabajo y Previsión Social los avances y resultados de los planes y programas de capacitación y adiestramiento?",
                 "15. ¿Conoce  cuál  es la diferencia entre agentes capacitadores internos y agentes capacitadores  externos?",
                 "16. ¿Sabe  que datos deben integrarse a   las constancias de competencia o habilidades laborales?",
                 "17. ¿Conoce  quiénes son las personas responsables de certificar las constancias de competencia o de habilidades laborales?",
                 "18. ¿Sabe  en qué plazos los centros de trabajo deben hacer del conocimiento  a la autoridad laboral de las acciones realizadas conforme a los  planes y programas de capacitación?",
                 "19. ¿Conoce en qué consiste el programa de agentes multiplicadores que maneja la Secretaría del Trabajo y Previsión Social?",
                 "20. ¿Sabe en qué consiste  el Programa de Capacitación a Distancia para Trabajadores (PROCADIST) con que cuenta la Secretaria del Trabajo y Previsión Social?"
                 ];
var preguntas0 = ["1. ¿Los trabajadores  cuentan con un contrato individual de trabajo donde se determine bajo qué condiciones se lleva a cabo la contratación? ",
                 "2. ¿Sabe cuáles son los diferentes contratos individuales de trabajo que existen?",
                 "3. ¿Conoce cuál es  la diferencia entre rescisión y terminación de las relaciones de trabajo?",
                 "4. ¿Sabe cuáles son las causas de suspensión temporal  de las  relaciones de trabajo?",
                 "5. ¿Conoce todas  las causas bajo las cuales se puede rescindir a un trabajador sin responsabilidad para el patrón?",
                 "6. ¿Al momento en que el  patrón  despide a un trabajador sabe cuál es el procedimiento a seguir de acuerdo a la Ley Federal del Trabajo?",
                 "7. ¿Conoce cuáles son las características del reglamento interior de trabajo?",
                 "8. ¿Sabe cuáles son  los días de descanso obligatorio?",
                 "9. ¿Entrega constancias de días trabajados y del salario percibido periódicamente a los trabajadores?",
                 "10. ¿Conoce los  descuentos que la Ley Federal del Trabajo permite aplicar al salario del trabajador?",
                 "11. ¿Sabe  cómo se debe remunerar el tiempo extraordinario del trabajador, de acuerdo a la Ley Federal del Trabajo?",
                 "12. ¿Conoce cómo se deben remunerar los días de descanso obligatorio de acuerdo a la Ley Federal del Trabajo?",
                 "13. ¿Sabe cuántos son los días de vacaciones a que tiene derecho el trabajador de acuerdo a sus años de antigüedad según la Ley Federal del Trabajo?",
                 "14. ¿Conoce las diferentes jornadas de trabajo y sus particularidades de acuerdo a la Ley Federal del Trabajo?",
                 "15. ¿Sabe que conceptos comprenden una indemnización por  despido injustificado?",
                 "16. ¿Conoce los conceptos que se integran en una indemnización por despido justificado?",
                 "17. ¿Sabe cuál es el plazo máximo para el pago de aguinaldo a los trabajadores?",
                 "18. ¿Conoce cómo  debe generarse el monto a pagar por participación de utilidades a los trabajadores de acuerdo a la Ley Federal del Trabajo?",
                 "19. ¿Está enterado de cuántas y cuáles Comisiones Mixtas,  se deben integrar en los centros de trabajo?",
                 "20. ¿Conoce los documentos probatorios que debe contener el centro de trabajo respecto de la afiliación  al INFONACOT?"
                 ];

var preguntas2 = ["1. ¿Cuenta con un programa de identificación de condiciones inseguras, desglosado por áreas en todo el centro de trabajo? ",
                  "2. ¿Existe  un programa de orden y limpieza permanente en todas  las áreas de trabajo?",
                  "3. ¿Tiene clasificado el  riesgo de incendio del centro de trabajo  de acuerdo a las  áreas que lo integran?",
                  "4. ¿Cumple con  las condiciones de prevención y protección contra incendios en el centro de trabajo?",
                  "5. ¿Lleva a cabo simulacros de emergencias contra incendio en el centro de trabajo?",
                  "6. ¿Conoce las  características que deben de cumplir las tarjetas de aviso utilizadas en la reparación y mantenimiento de maquinaria y equipo?",
                  "7. ¿Sabe cuáles son los procedimientos para la instalación de la maquinaria empleada en el manejo y almacenamiento de materiales en los centros de trabajo?",
                  "8. ¿Cuenta con un procedimiento general para la atención a emergencias en el manejo y almacenamiento de materiales?",
                  "9. ¿Conoce cómo se lleva a cabo el procedimiento para  la asignación del  Equipo de protección personal (EPP) que deben utilizar los trabajadores en función de los riesgos de trabajo a los que están expuestos?",
                  "10. ¿Proporciona a los trabajadores la capacitación y el adiestramiento para el uso, revisión, reposición, limpieza, limitaciones, mantenimiento, resguardo y disposición final del Equipo de Protección Personal, con base en las indicaciones, instrucciones o procedimientos que elabore el fabricante?",
                  "11. ¿Tiene constituida e integrada al menos una Comisión Mixta de Seguridad e Higiene en el centro de trabajo",
                  "12. ¿Conoce que datos debe de contener el acta constitutiva de la Comisión Mixta de Seguridad e Higiene?",
                  "13. ¿Sabe cuáles son  las  funciones específicas que  llevan a cabo los integrantes de la Comisión Mixta de Seguridad e Higiene?",
                  "14. ¿Da aviso de los riesgos de trabajo ocurridos  a la STPS directamente o a las delegaciones federales del trabajo, o al  inspector del trabajo o a la junta de conciliación permanente dentro de las setenta y dos horas siguientes a su realización en caso de accidente o de su detección en caso de enfermedad de trabajo?",
                  "15. ¿Conoce que datos debe de llevar el informe de accidentes y/o enfermedades de trabajo, que se entrega a la STPS?",
                  "16. ¿Cuenta con un informe de resultados de la evaluación de los niveles de iluminación de las áreas o actividades o puestos de trabajo?",
                  "17. ¿Conoce que aspectos se deben de considerar para el mantenimiento de luminarias en el centro de trabajo?",
                  "18. ¿Sabe  que  formas geométricas se utilizan para las señales de seguridad e higiene y su significado en el centro de trabajo?",
                  "19. ¿Conoce  acerca de  que situaciones advierten las señales de seguridad en el centro de trabajo?",
                  "20. ¿Está enterado de  cuál es el procedimiento de seguridad cuando se lleva a cabo el  mantenimiento a las instalaciones eléctricas en el centro de trabajo?"
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
  var datos = $.ajax({
    url:'enviarAutodiagnostico',
    data: {
      nombre: inpNombre.val(),
      telefono: inpTelefono.val(),
      correo: inpEmail.val(),
      condiciones: chkAcepto.prop( "checked" ),
      respuesta0: respuesta0,
      respuesta1: respuesta1,
      respuesta2: respuesta2,
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
    console.log("continuar------------------------");

    if (cuestionario==0) {
      console.log("continuar0");
      for (var i = nRespuesta; i < (nRespuesta+5); i++) {
        respuesta0[i] = resUsuario[j];
        j++;
      }
      if (nPregunta < 20) {
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
      else{
        console.log("continuar+20");
        evaluarRes(cuestionario);
      }
    }

    if (cuestionario==1) {
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
    }
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
  if (tCuestionario == 1) {
    arregloRes = respuesta1;
    realizo1 = 1;
  }
  if (tCuestionario == 2) {
    arregloRes = respuesta2;
    realizo2= 1;
  }

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
  alert("Si="+nSi+" No="+nNo);
  nSi=0;
  nNo=0;
  nPregunta=0;
  cuestionario++;
  if (tCuestionario == 0) {
    titulo.innerHTML = titulos[cuestionario];
  }
  if (tCuestionario == 1) {
    titulo.innerHTML = titulos[cuestionario];
  }
  if (tCuestionario == 2) {
    titulo.innerHTML = titulos[cuestionario];
  }
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
