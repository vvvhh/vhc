var tblsolicitudes = $('#tblsolicitudes'),
    tbodySolicitudes = $('#tbodySolicitudes'),
    btnCancelar = $('#btnCancelar');


function activarConsulta(){
  var idSolicitud = $(this).attr('id');

  var editar = $.ajax({
    url: 'editarPago',
    data: {
      id: idSolicitud
    },
    type: 'post',
    dataType:'json',
      async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var resultadoConsulta;
    try{
        resultadoConsulta = JSON.parse(editar);
    }catch (e){
        alert('Error JSON ' + e);
  }

  if ( resultadoConsulta.status === 'OK' ){
    getSolicitudesPersonaDes();
  }else{

  }
  alert(resultadoConsulta.message);
}

function getSolicitudesPersonaDes(){
  var regU = $(this).attr('id');
   var datos = $.ajax({
      url:'getSolicitudesPersonaDes',
      type:'get',
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

    tbodySolicitudes.html('');
    if ( res.status === 'OK' ){
       var i = 1;
       $.each(res.data, function(k,o){

        if ( o.solPagado == 1 ){
           statusPago = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
         }
        else{
          statusPago = '<span style="cursor:pointer" class="glyphicon glyphicon-check text-success text-center" title="Activar ahora" id='+o.solId+' ></span>';
        }
           var tipoConsulta;
           var tipoConsultaBD = o.solTipoConsulta;
           if(tipoConsultaBD == 1){
             tipoConsulta ="En Línea";
           }
           else tipoConsulta ="Telefónica";

          var fecha;
          if (o.solFecha !== null)
            fecha = o.solFecha.split(" ",1);
          /****Para precio */
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

          /************/
          tbodySolicitudes.append(
           '<tr>'+
            '<td>'+o.perNombre+'</td>'+
            '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
             '<td class="text-center">'+fecha+'</td>'+
             '<td class="text-center">'+tipoConsulta+'</td>'+
             '<td class="text-center">'+o.solNConsultas+'</td>'+
             '<td class="text-center">'+o.serNombre+'</td>'+
             '<td class="text-center"> $ '+precioNumero+'</td>'+
             '<td class="text-center">'+statusPago+'</td>'+
           '</tr>'
       );
       i++;
       });

    }else{
      tbodySolicitudes.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
      nombreCliente.val(res.message);
      numeroCliente.val(res.message);
    }
}

function validar(){
  if (( slctPaquete.val() === '')||( slctPaquete.val() === null)){
    alert("Tiene que asignar precios a paquetes primero");
    return false;
  }
  return true;
}

function limpiar(){
  location.href ="/admin";
}

$(document).on('ready', function(){
  getSolicitudesPersonaDes();
});

tblsolicitudes.delegate('.glyphicon-check', 'click', activarConsulta);
btnCancelar.on('click', limpiar);
