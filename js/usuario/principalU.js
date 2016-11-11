var idU = $('#idU'),
    nombreU = $('#nombreU'),
    numeroU = $('#numeroU'),
    token   = $('#_token');
var btnEnviarConsulta = $('#btnEnviarConsulta'),
    btnCancelar = $('#btnCancelar'),
    pnlGratis   = $('#pnlGratis'),
    txtconsultaTitulo = $('#txtconsultaTitulo'),
    txtConsulta = $('#txtConsulta');
var pnlRespuesta   =$('#pnlRespuesta'),
    idConsultaG = $('#idConsultaG'),
    txtResTitulo   =$('#txtResTitulo'),
    txtResConsulta =$('#txtResConsulta'),
    txtRespuesta   =$('#txtRespuesta'),
    btnLeido       =$('#btnLeido');
var RegExPattern=/^([\w\s\n\-\¿\?.,:áéíóúÁÉÍÓÚñÑ])+$/;

function verificarGratis(){
  var datos = $.ajax({
      url:'verificarGratis',
      data: {
        regU : numeroU.val()
      },
      type:'post',
      dataType:'json',
      async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo G');
    }).responseText;

    var tituloAlert="",textoAlert="",estadoAlert="";
    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
      var gratis = res.data;
      $.each(res.data, function(k,o){
        if (o.perGratis == 1){
          pnlGratis.addClass('hidden');
          if (o.cgrAtentido == 1) {
            if (o.cgrLeido==1) {
              pnlRespuesta.addClass('hidden');
            }
            else{
              getRespuestaGratis();
              pnlRespuesta.removeClass('hidden');
            }
          }
        }
        else{
          limpiar();
          pnlRespuesta.addClass('hidden');
          pnlGratis.removeClass('hidden');
          tituloAlert = "Usted dispone de una consulta gratis.";
          estdoAlert = "info";
          swal(tituloAlert, "", estdoAlert);
        }
      });
    }else{
      tituloAlert = "error cargar datos";
      textoAlert = res.message;
      estdoAlert = "error";
      alert(textoAlert);
    }
}

function getRespuestaGratis(){
  var datos = $.ajax({
      url:'getRespuestaGratis',
      data: {
        regU : numeroU.val()
      },
      type:'post',
      dataType:'json',
      async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo R');
    }).responseText;

    var tituloAlert="",textoAlert="",estadoAlert="";
    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
      pnlRespuesta.removeClass('hidden');
      var gratis = res.data;
      $.each(res.data, function(k,o){
        idConsultaG.val(o.cgrId);
        txtResTitulo.val(o.cgrTitulo);
        txtResConsulta.val(o.cgrContenido);
        txtRespuesta.val(o.cgrRespuesta);
      });
    }else{
      tituloAlert = "error cargar datos";
      textoAlert = res.message;
      estdoAlert = "error";
      alert(textoAlert);
    }
}

function leidoResGratis(){
  var datos = $.ajax({
      url:'leidoResGratis',
      data: {
        idCG : idConsultaG.val()
      },
      type:'post',
      dataType:'json',
      async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo R');
    }).responseText;

    var tituloAlert="",textoAlert="",estadoAlert="";
    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }
    if (res.status === 'OK') {
      pnlRespuesta.addClass('hidden');
    }
    if ( res.status !== 'OK' ){
      tituloAlert = "error cargar datos";
      textoAlert = res.message;
      estdoAlert = "error";
      alert(textoAlert);
    }
}

function enviarConsulta(){
  if ( !verificarContenido() )
    return false;

  var datos = $.ajax({
    url:'ingresarConsultaGratis',
    data: {
      id: idU.val(),
      token: token.val(),
      titulo: txtconsultaTitulo.val(),
      consulta: txtConsulta.val(),
      nombre: nombreU.val(),
      numeroR: numeroU.val()
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
    tituloAlert = "Consulta enviada.";
    textoAlert = res.message;
    estdoAlert = "success";
    verificarGratis();

  }else{
    tituloAlert = "No se pudo enviar la consulta";
    textoAlert = res.message;
    estdoAlert = "error";
  }
  swal(tituloAlert, textoAlert, estdoAlert);
}



function verificarContenido(){
  if((txtconsultaTitulo.val() === '' )||(txtconsultaTitulo === null)){
    txtconsultaTitulo.focus();
    swal("Favor de indicar el asunto de la consulta.","", "warning");
    return false;
  }
  if((txtConsulta.val() == '' )||(txtConsulta == null)){
    txtConsulta.focus();
    swal("Favor de ingresar su duda o problema.","", "warning");
    return false;
  }
    return true;
}

function comprobarTitulo(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnTitulo').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnTitulo').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y . - , : ¿ ?';
  }
}
function comprobarConsulta(e){
  var elem = e.target;
  if (elem.value.match(RegExPattern)) {
    document.getElementById('spnContenido').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnContenido').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y . - , : ¿ ?';
  }
}

function limpiar(){
  txtconsultaTitulo.val("");
  txtConsulta.val("");
}
function ocultar(){
  pnlGratis.addClass('hidden');
}

$(document).on('ready', function(){
  intTitulo = document.querySelector("input[name='txtconsultaTitulo']");
  intTitulo.addEventListener("input", comprobarTitulo);
  intContenido = document.getElementById("txtConsulta");
  intContenido.addEventListener("input", comprobarConsulta);
});

btnEnviarConsulta.on('click',enviarConsulta);
btnCancelar.on('click',ocultar);
btnLeido.on('click',leidoResGratis);
