var idU = $('#idU'), idC,
    nombreU = $('#nombreU'),
    regU    = $('#regU');
var seleccionarServ = $('#seleccionarServ'),
  sltcServicio = $('#sltcServicio'),
  tblContenidoC  = $('#tblContenidoC'),
  tbodyContenidoC = $('#tbodyContenidoC'),
  btnRealizarConsulta = $('#btnRealizarConsulta');

var txtFolioC = $('#txtFolioC'),
txtServicioRC   = $('#txtServicioRC'),
txtTipoC       = $('#txtTipoC'),
txtNContratado = $('#txtNContratado'),
txtNRealizadas = $('#txtNRealizadas'),
txtNRestantes  = $('#txtNRestantes');

var btnRegresar = $('#btnRegresar'),
btnRegresar2 = $('#btnRegresar2');

var consulta = $('#consulta'),
txtconsultaTitulo = $('#txtconsultaTitulo'),
btnEnviarConsulta = $('#btnEnviarConsulta'),
btnCancelar = $('#btnCancelar'),
txtConsulta = $('#txtConsulta'),
txtFechaC   = $('#txtFechaC'),
nConsulta   = $('#nConsulta'),
txtNRealizadasR  = $('#txtNRealizadasR'),
txtNContratadas = $('#txtNContratadas'),
txtNRestantesR   = $('#txtNRestantesR'),
txtFolioRC       = $('#txtFolioRC'),
txtServicioC    = $('#txtServicioC'),
pnlContratarMas = $('#pnlContratarMas');

var tbodyConsultas = $('#tbodyConsultas'),
    tblConsultas = $('#tblConsultas');
var RegExPattern=/^([\w\s\n\-\¿\?\(\).,:áéíóúÁÉÍÓÚñÑ])+$/;

    function consultasRealizadas(){
      var idC = $(this).attr('id');
      var datos = $.ajax({
        url:'nConsultasServ',
        data: {
          idCto: idC
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
        var coRealizadas = res.data;
        var datosContrato = res.contratado[0];
        var consultasContratadas = datosContrato.solNConsultas;

        txtNContratado.val(consultasContratadas);
        txtNRealizadas.val(coRealizadas);
        txtNRestantes.val(consultasContratadas-coRealizadas);

        txtFolioC.val(datosContrato.ctoId);
        txtServicioC.val(datosContrato.serNombre);

        var tipoCo="";
        if(datosContrato.solTipoConsulta==1) tipoCo="En Línea";
        else tipoCo="Telefónica";
        txtTipoC.val(tipoCo);

        getContenidoConsultas(idC);

      }else{
        tituloAlert = "Error al cargar datos.";
        textoAlert = res.message;
        estdoAlert = "error";
        swal(tituloAlert, textoAlert, estdoAlert);
      }

    }

function getContenidoConsultas(idC1){
      tblContenidoC.removeClass('hidden');
      seleccionarServ.addClass('hidden');
      tbodyContenidoC.html('');
        var datos = $.ajax({
          url: 'getContenidoConsultas',
          data: {
            idC: idC1
          },
          type: 'post',
              dataType:'json',
              async:false
          }).error(function(e){
              alert('Ocurrio un error, intente de nuevo');
          }).responseText;

          var res;
          try{
              res = JSON.parse(datos);
          }catch (e){
              alert('Error JSON ' + e);
          }

          if ( res.status == 'OK' ){
             var i = 1;

            $.each(res.data, function(k,o){
              var fecha, respuesta;
              if (o.ccFechaAtendido != null) {
                fecha = o.ccFechaAtendido;
              }
              else fecha = "-";

              if (o.ccRespuesta != null) {
                respuesta = o.ccRespuesta;
              }
              else respuesta = "En breve recibirá respuesta.";

              tbodyContenidoC.append(
                '<tr>'+
                '<td>'+o.ccTitulo+'</td>'+
                  '<td><textarea rows="4" cols="30" readonly>'+o.ccContenido+'</textarea></td>'+
                  '<td>'+o.ccFechaEnvio+'</td>'+
                  '<td class="text-center">'+fecha+'</td>'+
                  '<td><textarea rows="4" cols="30" readonly>'+respuesta+'</textarea></td>'+
                '</tr>'
            );
            i++;
            });
          }else{
            tituloAlert = "Aún no realiza consultas.";
            textoAlert = "";
            estdoAlert = "info";
            swal(tituloAlert, textoAlert, estdoAlert);
          }
      }

function getSolPerPagoLin(){
  idUs = idU.val();
  var datos = $.ajax({
    url:'getSolPerPagoLin',
    data: {
      regU: regU.val()
    },
    type:'post',
    dataType:'json',
    async:false
  }).error(function(e){
      alert('Ocurrio un error, intente de nuevo');
  }).responseText;


  var res;
  try{
      res = JSON.parse(datos);
  }catch (e){
      alert('Error JSON ' + e);
  }

  if ( res.status === 'OK' ){
      seleccionarServ.removeClass('hidden');

      tbodyConsultas.html('');

      $.each(res.data, function(k,o){
        fecha = o.solFecha.split(" ",1);
        var $idCto = o.ctoId;

        /*********/
        var consultasRealizadas;
        var consultasContratadas;

        /*******/
        var datos = $.ajax({
          url:'nConsultas',
          data: {
            idCto: $idCto
          },
          type:'post',
          dataType:'json',
          async:false
        }).error(function(e){
            alert('Ocurrio un error, intente de nuevo');
        }).responseText;

        var res;
        try{
            res = JSON.parse(datos);
        }catch (e){
            alert('Error JSON ' + e);
        }
        if ( res.status === 'OK' ){
           consultasRealizadas = res.data;
           consultasContratadas = res.contratado;
           consultasPorRealizar = consultasContratadas - consultasRealizadas;
        }else{
          tituloAlert = "Error al cargar datos.";
          textoAlert = res.message;
          estdoAlert = "error";
          swal(tituloAlert, textoAlert, estdoAlert);
        }
        /*********/

        tbodyConsultas.append(
          '<tr>'+
            '<td>'+$idCto+'</td>'+
            '<td>'+o.serNombre+'</td>'+
            '<td class="text-center">'+fecha+'</td>'+
            '<td class="text-center">'+consultasContratadas+'</td>'+
            '<td class="text-center">'+consultasRealizadas+'</td>'+
            '<td class="text-center">'+consultasPorRealizar+'</td>'+
            '<td class="text-center"><button class="btn btn-success btn-block" id="'+o.ctoId+'"><i class="fa fa-clock-o"></i> Respuestas</button></td>'+
            '<td class="text-center"><button class="btn btn-primary btn-block" id="'+o.ctoId+'"><i class="fa fa-keyboard-o"></i> Realizar Consulta</button></td>'+

          '</tr>'
          );

      });
  }else{
    seleccionarServ.addClass('hidden');
    textoA = res.message;
    swal("Aun no solicita consultas en Línea, ",textoA,"warning");
  }
  limpiar();
}

function enviarConsulta(){

  if ( !verificarContenido() )
    return false;

  var datos = $.ajax({
    url:'ingresarConsulta',
    data: {
      idCto:idC,
      titulo: txtconsultaTitulo.val(),
      consulta: txtConsulta.val(),
      nombre: nombreU.val(),
      servicio: txtServicioRC.val(),
      numeroR: regU.val()
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
    tituloAlert = "Consulta enviada";
    textoAlert = res.message;
    estdoAlert = "success";
    limpiar();
    getSolPerPagoLin();
  }else{
    tituloAlert = "No se pudo enviar la consulta";
    textoAlert = res.message;
    estdoAlert = "error";
  }
  swal(tituloAlert, textoAlert, estdoAlert);
}

function consultaRedactar(){  /**********/
  tblContenidoC.addClass('hidden');
  nConsulta.removeClass('hidden');
  seleccionarServ.addClass('hidden');
  idC = $(this).attr('id');

  var datos = $.ajax({
    url:'nConsultasServ',
    data: {
      idCto: idC
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
    var consultasRealizadas = res.data;
    txtNRealizadasR.val(consultasRealizadas);

    var datosContrato = res.contratado[0];
    var consultasContratadas = datosContrato.solNConsultas;

    txtFolioRC.val(datosContrato.ctoId);
    txtServicioRC.val(datosContrato.serNombre);
    fechaC = datosContrato.ctoFecha.split(" ",1);
    txtFechaC.val(fechaC);

    txtNContratadas.val(consultasContratadas);
    txtNRestantesR.val(consultasContratadas-consultasRealizadas);

    if ((txtNRestantesR.val() > 0)&&(txtNRestantesR.val() < 3)) {
      swal({
        title: "Le restan menos de 3 consultas.",
        text: "Le invitamos a contratar más paquetes de consultas.",

        showCancelButton: true,
        type: "warning",
        cancelButtonText: "Cerrar",
        confirmButtonText: "Contratar",

        closeOnConfirm: true,
        closeOnCancel: true,
        },
        function(){
        location.href ="contratarU";
      });
    }
    if(consultasRealizadas == consultasContratadas){
      consulta.addClass('hidden');
      pnlContratarMas.removeClass('hidden');

      swal({
        title: "Usted utilizó todas las consultas para el presente contrato.",
        text: "Le invitamos a contratar más paquetes de consultas.",

        showCancelButton: true,
        type: "warning",
        cancelButtonText: "Cerrar",
        confirmButtonText: "Contratar",

        closeOnConfirm: true,
        closeOnCancel: true,
        },
        function(){
        location.href ="contratarU";
      });
    }
    else{
      pnlContratarMas.addClass('hidden');
      if (!verificaFecha()){
        tituloAlert = "Contrato finalizado";
        textoAlert = "Ya trancurrio un año desde que realizo el contrato, le invitamos a contratar más paquetes para seguir realizando consultas.";
        estdoAlert = "warning";
        swal(tituloAlert, textoAlert, estdoAlert);
        pnlContratarMas.removeClass('hidden');
      }
      else{
        consulta.removeClass('hidden');
      }
    }

  }else{
    tituloAlert = "Error al cargar datos.";
    textoAlert = res.message;
    estdoAlert = "error";
    swal(tituloAlert, textoAlert, estdoAlert);
  }
}

function verificaFecha(){
  var fecha = txtFechaC.val();
  var diaC = parseInt(fecha.split("-",1));
  var mesC = parseInt(fecha.substr(3, 2));
  var anioC = parseInt(fecha.substr(6, 4));

  var f = new Date();
  var diaH = f.getDate();
  var mesH = f.getMonth()+1;
  var anioH =  f.getFullYear();

  if (anioH >= anioC+1) {
    if ( mesH >= (mesC)) {
      if (diaH >= (diaC+1)) {
        return false;
      }
    }
  }
  return true;
}

function verificarContenido(){
  if((txtconsultaTitulo.val() === '' )||(txtconsultaTitulo === null)){
    txtconsultaTitulo.focus();
    swal("Favor de indicar un asunto.","", "warning");
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
    document.getElementById('spnConsulta').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnConsulta').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y . - , : ¿ ?';
  }
}

function limpiar(){
  txtconsultaTitulo.val("");
  txtConsulta.val("");
  consulta.addClass('hidden');
  nConsulta.addClass('hidden');
  tblContenidoC.addClass('hidden');
  seleccionarServ.removeClass('hidden');
  pnlContratarMas.addClass('hidden');
}
$(document).on('ready', function(){
  intTitulo = document.querySelector("input[name='txtconsultaTitulo']");
  intTitulo.addEventListener("input", comprobarTitulo);
  intConsulta = document.getElementById("txtConsulta");
  intConsulta.addEventListener("input", comprobarConsulta);

});

$('#collapseConsulta').addClass('in');
tblConsultas.delegate('.btn-primary', 'click', consultaRedactar);
tblConsultas.delegate('.btn-success', 'click', consultasRealizadas);
btnEnviarConsulta.on('click',enviarConsulta);
btnCancelar.on('click',limpiar);
btnRegresar.on('click',limpiar);
btnRegresar2.on('click',limpiar);
