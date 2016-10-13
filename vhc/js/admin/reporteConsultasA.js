var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP   = $('#tblClienteP');
var pnlClienteConsulta = $('#pnlClienteConsulta');
var pnlNConsultas      = $('#pnlNConsultas'),
    btnImprimirContra  = $('#btnImprimirContra'),
    txtFolioC = $('#txtFolioC'),
    txtServicioC   = $('#txtServicioC'),
    txtTipoC       = $('#txtTipoC'),
    txtNContratado = $('#txtNContratado'),
    txtNRealizadas = $('#txtNRealizadas'),
    txtNRestantes  = $('#txtNRestantes'),
    tblContenidoC  = $('#tblContenidoC'),
    tbodyContenidoC = $('#tbodyContenidoC');

var tblContrato = $('#tblContrato'),
    tbodyContrato = $('#tbodyContrato'),
    txtCliente    = $('#txtCliente'),
    txtNRegistro  = $('#txtNRegistro'),
    btnImprimirServ = $('#btnImprimirServ');

var txtBuscar   = $('#txtBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    btnBuscar   = $('#btnBuscar'),
    buscar = $('#buscar');

var tblConsultas   = $('#tblConsultas'),
    tbodyConsultas = $('#tbodyConsultas');

var btnCancelar = $('#btnCancelar');

function getClientes(){
  var datos = $.ajax({
    url: 'getClientes',
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
    tbodyClienteP.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){
        tbodyClienteP.append(
          '<tr>'+
            '<td class="col-md-4">'+o.perNombre+'</td>'+
            '<td class="col-md-2 center">'+o.perNumeroPreregistro+'</td>'+
            '<td class="col-md-2 center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Ver consultas"></span>'+
            '</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tblClienteP.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblClienteP.removeClass('hidden');
}

function getCliente(){
      var datos = $.ajax({
        url: 'getCliente',
        data: {
          perNombreB: txtBuscar.val()
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

        if ( res.status === 'OK' ){
          tbodyClienteP.html('');
           var i = 1;
          $.each(res.data, function(k,o){
            tbodyClienteP.append(
              '<tr>'+
                '<td class="col-md-4">'+o.perNombre+'</td>'+
                '<td class="col-md-2 center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="col-md-2 center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Ver consultas"></span>'+
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

function limpiar(){
  tblClienteP.addClass('hidden');
  pnlClienteConsulta.addClass('hidden');
  pnlNConsultas.addClass('hidden');
  tbodyClienteP.html('');
  tbodyContenidoC.html('');

  buscar.removeClass('hidden');
  txtBuscar.val('');

}

function consultasRealizadas(){
  pnlNConsultas.removeClass('hidden');

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
  imprimir = document.getElementById('btnImprimirContra');
  imprimir.href='pdfReporteContenidoC?cto='+idC1;
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

          var hora = o.ccHora;
          var min = o.ccMinuto;
          var duracion;

          if(min != null){
              duracion= hora+':'+min;
          }
          else
            duracion="no aplica";

          tbodyContenidoC.append(
            '<tr>'+
            '<td>'+o.ccTitulo+'</td>'+
              '<td><textarea rows="4" cols="30" readonly>'+o.ccContenido+'</textarea></td>'+
              '<td class="text-center">'+duracion+'</td>'+
              '<td>'+o.ccFechaEnvio+'</td>'+
              '<td class="text-center">'+o.ccFechaAtendido+'</td>'+
              '<td><textarea rows="4" cols="30" readonly>'+o.ccRespuesta+'</textarea></td>'+
              '<td>'+o.asesNombre+' '+o.asesPrimerApe+' '+o.asesSegundoApe+'</td>'+
            '</tr>'
        );
        i++;
        });
      }else{
        alert(res.message);
      }
  }

function getContratoPersona(){
  var regU = $(this).attr('id');

  imprimir = document.getElementById('btnImprimirServ');
  imprimir.href='pdfReporteServicioC?regU='+regU;

  var datos = $.ajax({
    url: 'getContratoPersona',
    data: {
      regU: regU
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

    if ( res.status === 'OK' ){
      tbodyContrato.html('');
       var i = 1;
      $.each(res.data, function(k,o){
        var fecha = o.ctoFecha.split(" ",1);
        var tipo;
        var ctoFolio = o.ctoId;

        if(o.solTipoConsulta==1) tipo = "En Línea";
        else tipo = "Telefónica";
        /*******************/
        var datos = $.ajax({
          url:'nConsultas',
          data: {
            idCto: ctoFolio
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
           cRealizadas = res.data;
           consultasContratadas = res.contratado;
           consultasPorRealizar = consultasContratadas - cRealizadas;
        }else{
          tituloAlert = "Error al cargar datos.";
          textoAlert = res.message;
          estdoAlert = "error";
          swal(tituloAlert, textoAlert, estdoAlert);
        }
        /*****************/

        tbodyContrato.append(
          '<tr>'+
            '<td class="text-center">'+ctoFolio+'</td>'+
            '<td class="text-center">'+fecha+'</td>'+
            '<td class="text-center">'+o.serNombre+'</td>'+
            '<td class="text-center">'+tipo+'</td>'+
            '<td class="text-center">'+consultasContratadas+'</td>'+
            '<td class="text-center">'+cRealizadas+'</td>'+
            '<td class="text-center">'+consultasPorRealizar+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.ctoId+'" '+
              'style="cursor:pointer" title="Ver consultas"></span>'+
            '</td>'+
          '</tr>'
      );
      txtCliente.val(o.perNombre);
      txtNRegistro.val(o.perNumeroPreregistro);
      });

      pnlClienteConsulta.removeClass('hidden');
      buscar.addClass('hidden');
      tblClienteP.addClass('hidden');
    }else{
      $.each(res.data, function(k,o){
        txtCliente.val(o.perNombre);
        txtNRegistro.val(o.perNumeroPreregistro);
      });
      pnlClienteConsulta.removeClass('hidden');
      buscar.addClass('hidden');
      tblClienteP.addClass('hidden');
      tbodyContrato.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblContrato.removeClass('hidden');
}

$(document).on('ready', function(){
  limpiar();
  getClientes();
});

tblClienteP.delegate('.glyphicon-edit', 'click', getContratoPersona);
tbodyContrato.delegate('.glyphicon-edit', 'click', consultasRealizadas);
btnCancelar.on('click', limpiar);
btnVerTodos.on('click', getClientes);
btnBuscar.on('click', getCliente);
$('#liConsultas').addClass('active');
$('#collapseReporte').addClass('in');
