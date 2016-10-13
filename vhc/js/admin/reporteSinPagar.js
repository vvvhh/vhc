var tblPersonas = $('#tblPersonas'),
tbodyPersonas = $('#tbodyPersonas');

var txtTotal = $('#txtTotal'),
txtNoPagados = $('#txtNoPagados'),
txtPagados = $('#txtPagados');

function getSolicitudes(){
      var datos = $.ajax({
        url: 'getSolicitudesSinPagar',
        data: {
          data: null
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
          tbodyPersonas.html('');
           var i = 1;
           var nPagado = 0, nNoPagado = 0;

          $.each(res.data, function(k,o){

            if(o.solPagado == 1){
              pagado = "sí";
              nPagado = nPagado+1;
            }

            else{
              pagado = "no";
              nNoPagado = nNoPagado+1;
            }

            if(o.perCliente == 1)     cliente = "cliente";
            if(o.perCliente == 0)     cliente = "pre-registro";
            if(o.solTipoConsulta == 1)     tipo = "En Línea";
            if(o.solTipoConsulta == 0)     tipo = "Telefónica";

            tbodyPersonas.append(
              '<tr>'+
                '<td >'+i+'</td>'+
                '<td >'+o.perNombre+'</td>'+
                '<td class="text-center">'+cliente+'</td>'+
                '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="text-center">'+o.solFecha+'</td>'+
                '<td class="text-center">'+o.serNombre+'</td>'+
                '<td class="text-center">'+tipo+'</td>'+
                '<td class="text-center">'+o.solNConsultas+'</td>'+
                '<td class="text-center">'+pagado+'</td>'+
              '</tr>'
          );
          i++;
          });
          txtTotal.val(i-1);
          txtPagados.val(nPagado);
          txtNoPagados.val(nNoPagado);
        }else{
          tbodyPersonas.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblPersonas.removeClass('hidden');
}

$(document).on('ready', function(){
  getSolicitudes();
});
$('#liRSinPagar').addClass('active');
$('#collapseReporte').addClass('in');
