var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP = $('#tblClienteP');

var tblsolicitudes = $('#tblsolicitudes'),
    solicitudes    = $('#solicitudes'),
    tbodySolicitudes = $('#tbodySolicitudes'),
    btnCancelar = $('#btnCancelar');

var txtBuscar = $('#txtBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    btnBuscar = $('#btnBuscar'),
    buscar = $('#buscar');
var seleccionarServ = $('#seleccionarServ'),
    tblConsultas    = $('#tblConsultas'),
    tbodyConsultas  = $('#tbodyConsultas');
var txtHora  = $('#txtHora'),
    txtMin   = $('#txtMin'),
    txtSeg   = $('#txtSeg'),
    btnPlay  = $('#btnPlay'),
    btnPause = $('#btnPause'),
    spnTiempo= $('#spnTiempo'),
    spnManual= $('#spnManual'),
    btnManual= $('#btnManual');
var pnlRegistrarC = $('#pnlRegistrarC'),
    txtNRealizadas  = $('#txtNRealizadas'),
    txtNContratadas = $('#txtNContratadas'),
    txtNRestantes   = $('#txtNRestantes'),
    txtFolioC       = $('#txtFolioC'),
    txtClienteC     = $('#txtClienteC'),
    txtCorreoC   = $('#txtCorreoC'),
    txtTelefonoC = $('#txtTelefonoC'),
    txtFechaC = $('#txtFechaC'),
    txtServicioC    = $('#txtServicioC'),
    txtTitulo    = $('#txtTitulo'),
    txtContenido = $('#txtContenido'),
    slctAsesor   = $('#slctAsesor'),
    slctHora     = $('#slctHora'),
    slctMin      = $('#slctMin'),
    btnCancelarReg = $('#btnCancelarReg'),
    btnGuardarReg  = $('#btnGuardarReg');
var seg=0;
var min=0;
var hor=0;
var tiempo;
var esManual;
var RegExPattern=/^([\w\s\n\-\¿\?\)\(.,:áéíóúÁÉÍÓÚñÑ])+$/;

function getClientesTel(){
  var datos = $.ajax({
    url: 'getClientesTel',
    type: 'get',
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
    tbodyClienteP.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){

        var persona;
        if(o.perTipoPersona==1) persona = "Moral";
        else persona = "Física";

        tbodyClienteP.append(
          '<tr>'+
            '<td>'+o.perNombre+'</td>'+
            '<td class="text-center">'+persona+'</td>'+
            '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
            '<td class="text-center">'+o.pretNombre+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Registrar consulta"></span>'+
            '</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tbodyClienteP.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblClienteP.removeClass('hidden');
}

function getClienteTel(){
  var datos = $.ajax({
    url: 'getClienteTel',
    data: {
      buscar: txtBuscar.val()
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
    tbodyClienteP.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){

        var persona;
        if(o.perTipoPersona===1) persona = "Moral";
        else persona = "Física";

        tbodyClienteP.append(
          '<tr>'+
            '<td>'+o.perNombre+'</td>'+
            '<td class="text-center">'+persona+'</td>'+
            '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
            '<td class="text-center">'+o.pretNombre+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar"></span>'+
            '</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tbodyClienteP.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblClienteP.removeClass('hidden');
}

function getSolPerPagoTel(){
  var regUsuario = $(this).attr('id');
  seleccionarServ.removeClass('hidden');
  buscar.addClass('hidden');
  tblClienteP.addClass('hidden');
  var datos = $.ajax({
    url:'getSolPerPagoTel',
    data: {
      regU: regUsuario
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
      var dataUsuario = res.data;
      tbodyConsultas.html('');

      $.each(res.data, function(k,o){
        var idCto = o.ctoId;
        var consultasRealizadas;
        var consultasContratadas;
        /**************/
        var datos = $.ajax({
          url:'nConsultas',
          data: {
            idCto: idCto
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
        /***************/
        fecha = o.solFecha.split(" ",1);
        var tipoC='';

        if (consultasPorRealizar==0) {
          registrar ='<span class="glyphicon glyphicon-thumbs-up text-success" title="Consultas Agotadas"></span>';
        }
        else{
           registrar= '<button class="btn btn-primary btn-block" id="'+o.ctoId+'">Registrar</button>';
        }

        if(o.solTipoConsulta ==0) tipoC ='<span class="glyphicon glyphicon-earphone text-success"></span>';
        tbodyConsultas.append(
          '<tr>'+
            '<td>'+idCto+'</td>'+
            '<td>'+tipoC+' '+o.serNombre+'</td>'+
            '<td class="text-center">'+fecha+'</td>'+
            '<td class="text-center">'+o.pretNombre+'</td>'+

            '<td class="text-center">'+consultasContratadas+'</td>'+
            '<td class="text-center">'+consultasRealizadas+'</td>'+
            '<td class="text-center">'+consultasPorRealizar+'</td>'+
            '<td class="text-center">'+registrar+'</td>'+
          '</tr>'
          );

      });
  }else{
    seleccionarServ.addClass('hidden');
    textoA = res.message;
    swal("Aun no solicita consultas teléfonicas,",textoA,"info");
  }
}

function consultaResponder(){
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
    txtNRealizadas.val(consultasRealizadas);

    var datosContrato = res.contratado[0];
    var consultasContratadas = datosContrato.solNConsultas;

    txtFolioC.val(datosContrato.ctoId);
    txtServicioC.val(datosContrato.serNombre);
    txtFechaC.val(datosContrato.ctoFecha);
    txtClienteC.val(datosContrato.perNombre);
    txtCorreoC.val(datosContrato.perCorreo);
    txtTelefonoC.val(datosContrato.perTelefono);

    txtNContratadas.val(consultasContratadas);
    txtNRestantes.val(consultasContratadas-consultasRealizadas);

    slctMin.html('');
    for(i=1;i<16;i++){
      slctMin.append(
        '<option value="'+i+'">'+i+'</option>'
      );
    }

    //*******************
    var datos = $.ajax({
      url: 'getAsesoresActivo',
      type: 'get',
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
      slctAsesor.html('');
      slctAsesor.append(
          '<option value="0">-</option>'
        );
      if ( res.status === 'OK' ){

         var i = 1;
        $.each(res.data, function(k,o){
          slctAsesor.append(
              '<option value="'+o.asesId+'">'+o.asesNombre+' '+o.asesPrimerApe+' '+o.asesSegundoApe+'</option>'
        );
        i++;
        });
      }else{
        slctAsesor.append(
            '<option>'+res.message+'</option>'
          );
      }
    //**************

    if (!verificaFecha()) return false;
    else
      pnlRegistrarC.removeClass('hidden');

      if ((txtNRestantes.val() > 0)&&(txtNRestantes.val() < 3)) {
        swal({
          title: "Al cliente le restan menos de 3 consultas.",
          text: "",

          type: "info",
          confirmButtonText: "Cerrar",

          closeOnConfirm: true,
          });
      }
      if(txtNRestantes.val() <= 0){
        swal({
          title: "El cliente ya utilizó todas las consultas para el presente contrato.",
          text: "",

          type: "info",
          confirmButtonText: "Cerrar",

          closeOnConfirm: true
          });
        /*  btnPlay.prop("disabled",true);
          btnManual.prop("disabled",true);*/
      }

  }else{
    alert(res.message);
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
        swal("Ya transcurrio un año desde que se realizo el contrato.","No se puede registrar la consulta.","info");
        return false;
      }
    }
  }
  return true;
}

function inciar(){
  esManual=false;
  spnManual.addClass('hidden');
  spnTiempo.removeClass('hidden');
  slctHora.prop("disabled",true);
  slctMin.prop("disabled",true);
  btnPause.prop("disabled",false);
  btnPlay.prop("disabled",true);
  btnManual.prop("disabled",true);
  btnGuardarReg.prop("disabled",true);
  btnCancelarReg.prop("disabled",true);
  slctHora.val(0);
  slctMin.val(0);
  txtHora.val(hor);
  txtMin.val(min);
  txtSeg.val(seg);
  tiempo=setInterval(conteo, 1000);
}
function detener(){
  clearInterval(tiempo);
  btnPause.prop("disabled",true);
  btnPlay.prop("disabled",false);
  btnManual.prop("disabled",false);
  btnGuardarReg.prop("disabled",false);
  btnCancelarReg.prop("disabled",false);
}
function conteo(){
  seg++;
  if(seg>59){
    min++;
    seg=0;
    //txtHora.val(hor);
    txtMin.val(min);
    txtSeg.val(seg);
  }
  /*if(min>59){
    hor++;
    min=0;
    seg=0;
    txtHora.val(hor);
    txtMin.val(min);
    txtSeg.val(seg);
  }*/
  txtSeg.val(seg);
}

function manual(){
  esManual=true;
  txtHora.val('');
  txtMin.val('');
  txtSeg.val('');
  seg=0;
  min=0;
  hor=0;
  clearInterval(tiempo);
  slctHora.prop("disabled",false);
  slctMin.prop("disabled",false);
  spnTiempo.addClass('hidden');
  spnManual.removeClass('hidden');
  btnPause.prop("disabled",true);
  btnPlay.prop("disabled",false);
  btnManual.prop("disabled",false);
}


function ingresarConsultaTel(){
  if ( !validar() )
    return false;

  var horas=0, minutos=0;
  if(esManual===true){
    horas=slctHora.val();
    minutos=slctMin.val();
  }
  else{
    horas=txtHora.val();
    minutos=txtMin.val();
  }

  var datos = $.ajax({
    url:'ingresarConsultaTel',
    data: {
      idCto:txtFolioC.val(),
      titulo: txtTitulo.val(),
      consulta: txtContenido.val(),
      hora: horas,
      min:  minutos,
      ase: slctAsesor.val()
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
    swal("Consulta registrada","","success");
    limpiar();
  }
  else{
    swal(res.message,"","warning");
  }
}

function limpiar(){
  tblClienteP.addClass('hidden');
  seleccionarServ.addClass('hidden');
  solicitudes.addClass('hidden');
  buscar.removeClass('hidden');
  txtBuscar.val('');
  pnlRegistrarC.addClass('hidden');
  txtFolioC.val('');
  txtTitulo.val('');
  txtFolioC.val('');
  txtTitulo.val('');
  txtContenido.val('');
  txtContenido.val('');
  txtHora.val('');
  txtMin.val('');
  txtSeg.val('');
  seg=0;
  min=0;
  hor=0;
  clearInterval(tiempo);
  slctHora.prop("disabled",true);
  slctMin.prop("disabled",true);
  slctHora.val(0);
  slctMin.val(0);
  spnManual.addClass('hidden');
  spnTiempo.removeClass('hidden');
  btnPause.prop("disabled",true);
  btnPlay.prop("disabled",false);
  btnManual.prop("disabled",false);
  getClientesTel();
}

function validar(){
  if (slctAsesor.val() == 0) {
    swal("Debe seleccionar el asesor que atendio la consulta.","","warning" );
    slctAsesor.focus();
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
function comprobarRespuesta(e){
  var elem = e.target;
  if (elem.value.match(RegExPattern)) {
    document.getElementById('spnRespuesta').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnRespuesta').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y . - , : ¿ ? ( )';
  }
}

$(document).on('ready', function(){
  limpiar();
  getClientesTel();
  intTitulo = document.querySelector("input[name='txtTitulo']");
  intTitulo.addEventListener("input", comprobarTitulo);
  intContenido = document.getElementById("txtContenido");
  intContenido.addEventListener("input", comprobarRespuesta);
});


tblClienteP.delegate('.glyphicon-edit', 'click', getSolPerPagoTel);
tblConsultas.delegate('.btn-primary', 'click', consultaResponder);
btnCancelar.on('click', limpiar);
btnVerTodos.on('click', getClientesTel);
btnBuscar.on('click', getClienteTel);

btnGuardarReg.on('click',ingresarConsultaTel);
btnCancelarReg.on('click',limpiar);
$('#liactivarConsulta').addClass('active');
$('#collapseConsulta').addClass('in');

btnPlay.on('click',inciar);
btnPause.on('click',detener);
btnManual.on('click', manual);
