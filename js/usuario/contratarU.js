var tblPrecioTel = $('#tblPrecioTel'),
    tbodyPrecioTel   = $('#tbodyPrecioTel'),
    tblPrecioLin = $('#tblPrecioLin'),
    tbodyPrecioLin   = $('#tbodyPrecioLin'),
    slctLinea = $('#slctLinea'),
    slctTel   = $('#slctTel');

var idU      = $('#idU'),
    regU     = $('#regU'),
    token    = $('#token'),
    idPrecio = $('#idPrecio');/*href="{{ URL::to('usuario/realizarPagoU')}}"*/

var btnRealizarContrato = $('#btnRealizarContrato'),
    slctTConsulta       = $('#slctTConsulta'),
    slctConsultas       = $('#slctConsultas'),
    slctServicios       = $('#slctServicios'),
    chkAcepto           = $('#chkAcepto');

function realizarContrato(){  /*******************************************/
  if(!verificarContenido())
    return false;

  if (slctTConsulta.val() == 1) {
    numConsultas = slctLinea.val();
  }
  else numConsultas = slctTel.val();

  var datos = $.ajax({
    url: 'agregarSolicitud',
    data: {
      nConsultas: numConsultas,
      tipoConsulta: slctTConsulta.val(),
      idPrecio: idPrecio.val(),
      idServicio: slctServicios.val(),
      regU: regU.val()
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
        tituloAlert = "Solicitud realizada";
        textoAlert = res.message;
        estdoAlert = "success";
        limpiar();

        swal({
          title: tituloAlert,
          text: textoAlert,
          type: estdoAlert,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Aceptar",
          closeOnConfirm: false
        },
        function(){
          location.href ="payPalU";
        });

    }else{
        tituloAlert = "No se pudo realizar la solicitud";
        textoAlert = res.message;
        estdoAlert = "error";

        swal(tituloAlert, textoAlert, estdoAlert);
    }
}
function getServicios(){
  var datos = $.ajax({
    url: 'getServicios',
    data: {
      buscar: 'null'
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

    slctServicios.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){
        slctServicios.append(
            '<option value="'+o.serId+'">'+o.serNombre+'</option>'
      );
      i++;
      });
    }else{
      slctPaquete.append(
          '<option value="0">No existen servicios dentro de los registros</option>');
    }
}
function precioLinCliente(){   /*******************************************/
  var datos = $.ajax({
    url: 'precioLinCliente',
    data: {
      token:     token.val(),
      idCliente: idU.val()
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
    tbodyPrecioLin.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){
        tbodyPrecioLin.append(
          '<tr>'+
            '<td class="col-md-2 text-center"> '+o.preLCantidad+'</td>'+
            '<td class="col-md-2 text-center"> $'+o.preLPrecio+'</td>'
          );
        slctLinea.append(
          '<option value='+o.preLCantidad+'>'+o.preLCantidad+' consultas $'+o.preLPrecio+'</option>'
        );
      i++;
      });
    }else{
      tbodyPrecioLin.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function precioTelCliente(){   /*******************************************/
  //alert(idU.val());
  var datos = $.ajax({
    url: 'precioTelCliente',
    data: {
      token:     token.val(),
      idCliente: idU.val()
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
    tbodyPrecioTel.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){
        idPrecio.val(o.pretId);
        tbodyPrecioTel.append(
          '<tr>'+
            '<td class="col-md-2 text-center"> '+o.preTCantidad+'</td>'+
            '<td class="col-md-2 text-center"> $'+o.preTPrecio+'</td>'
      );
      slctTel.append(
        '<option value='+o.preTCantidad+'>'+o.preTCantidad+' consultas $'+o.preTPrecio+'</option>'
      );
      i++;
      });
    }else{
      tbodyPrecioTel.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }

}



function verificarContenido(){  /**********************************************/

  if((slctTConsulta.val() == '' )||(slctTConsulta == null)){
    slctTConsulta.focus();
    swal("Favor de seleccionar un servicio.","", "warning");
    return false;
  }
  if((slctConsultas.val() == '' )||(slctConsultas == null)){
    slctConsultas.focus();
    swal("Favor de seleccionar un servicio.","", "warning");
    return false;
  }

  if((slctServicios.val() == '' )||(slctServicios == null)){
    slctServicios.focus();
    swal("Favor de seleccionar la cantidad de consultas.","", "warning");
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

function tipoServicio(){
  if (slctTConsulta.val() == 1) {
    slctLinea.removeClass('hidden');
    slctTel.addClass('hidden');
  }
  else{
    slctLinea.addClass('hidden');
    slctTel.removeClass('hidden');
  }
}

function limpiar(){                 /*******************************************/
  chkAcepto.prop( "checked", false );
}

$(document).on('ready', function(){
  precioTelCliente();
  precioLinCliente();
  getServicios();
  limpiar();
});

slctTConsulta.change(tipoServicio);
btnRealizarContrato.on('click',realizarContrato);
$('#collapseContra').addClass('in');
