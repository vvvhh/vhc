var idU       = $('#idU'),
    regU      = $('#regU');
var tblPago   = $('#tblPago'),
    tbodyPago = $('#tbodyPago');
var idPrecio, nConsultas, precioNumero;

var botonPrieva = $('#botonPrieva');

var pnlPago1 = $('#pnlPago1');

function getSolicitudesPersona(){
    var datos = $.ajax({
      url:'getSolicitudesPersona',
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

    tbodyPago.html('');
    if ( res.status === 'OK' ){
       var i = 1;
       $.each(res.data, function(k,o){
         var tipoConsulta;
         var tipoConsultaBD = o.solTipoConsulta;
         if ( o.solPagado == 1 ){
           statusContrato = '<a class="glyphicon glyphicon-import text-primary" id="'+o.solId+'" '+
           'href="getContratoMoral?c='+o.solId+'"'+
           'style="cursor:pointer" title="Descargar contrato"></a>';
           statusPago = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';

           if(o.ctoSolFactura ==1){
             statusFactura = '<span class="glyphicon glyphicon-ok text-success" title="Solicitud realizada"></span>';
           }
           else{
             statusFactura = '<a class="glyphicon glyphicon-send text-primary" id="'+o.solId+'" '+
             'style="cursor:pointer" title="Solicitar factura"></a>';
           }

         }
        else{
          statusPago = '<button class="btn btn-primary btn-block" id="'+tipoConsultaBD+'" '+
          '><i class="fa fa-cc-paypal"></i> Pagar ahora</button>';
          statusContrato = '<span class="glyphicon glyphicon-remove text-danger" title="Una vez que validemos su pago se activara esta opción"></span>';
          statusFactura = '<span class="glyphicon glyphicon-remove text-danger" title="Una vez que validemos su pago se activara esta opción"></span>';
        }

        if(tipoConsultaBD == 1){
          tipoConsulta = '<span class="text-info" title="Consultas en Línea"><i class="fa fa-laptop "></i></span>';
        }
        else tipoConsulta = '<span class="text-info" title="Consultas Teléfonicas"><i class="fa fa-phone"></i></span>';

        var fecha;
        if (o.ctoFecha != null)
        fecha = o.ctoFecha.split(" ",1);
        else fecha="No se ha registrado pago"
          /***************Para precio */
        idPrecioT = o.solPreciosT;
        nPaquete = o.solNConsultas;


        var datosPrecio = $.ajax({
            url:'getPrecioPaquete',
            data: {
              idPrecioT: idPrecioT,
              paquete: nPaquete,
              tipoCon: tipoConsultaBD
            },
            type:'post',
            dataType:'json',
            async:false
          }).error(function(e){
              alert('Ocurrio un error, intente de nuevo');
          }).responseText;
          var res;
          try{
              resP = JSON.parse(datosPrecio);
          }catch (e){
              alert('Error JSON ' + e);
          }
          precioNumero = resP.data;

          /*******************************************************/
         tbodyPago.append(
           '<tr>'+
             '<td>'+fecha+'</td>'+
             '<td class="text-center">'+nPaquete+'</td>'+
             '<td class="text-center">'+tipoConsulta+'</td>'+
             '<td class="text-center">'+o.serNombre+'</td>'+
             '<td class="text-center"> $ '+precioNumero+'</td>'+
             '<td class="text-center">'+statusPago+'</td>'+
             '<td class="text-center">'+statusContrato+'</td>'+
             '<td class="text-center">'+statusFactura+'</td>'+
           '</tr>'
       );
       i++;
       });
    }else{
      tbodyPago.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblPago.removeClass('hidden');
}

function solicitudFactura (){

  var idSolicitud = $(this).attr('id');
  var datos = $.ajax({
    url:'solicitudFactura',
    data: {
      idSol: idSolicitud
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
    tituloAlert = "Solicitud realizada";
    textoAlert = res.message;
    estdoAlert = "success";
  }else{
    tituloAlert = "No se pudo realizar la solicitud";
    textoAlert = res.message;
    estdoAlert = "error";
  }

  swal(tituloAlert, textoAlert, estdoAlert);
  swal({
    title: tituloAlert,
    text: textoAlert,
    type: estdoAlert,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Aceptar",
    closeOnConfirm: true
  },
  function(){
    location.reload();
  });
}

function pagar(){
  var tipoConsulta = $(this).attr('id');

  if(tipoConsulta == 1){  //linea
    location.href ="payPalU";
  }
  else location.href ="payPalTelU";

}

$(document).on('ready', function(){
  getSolicitudesPersona();
});

tblPago.delegate('.glyphicon-send', 'click', solicitudFactura);
tblPago.delegate('.btn-primary', 'click', pagar);
$('#collapseContra').addClass('in');
