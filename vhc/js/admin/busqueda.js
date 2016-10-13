var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP = $('#tblClienteP');

var txtBuscar = $('#txtBuscar'),
    btnBuscar = $('#btnBuscar'),
    buscar = $('#buscar');

function getBusquedaConsulta(){
  var datos = $.ajax({
    url: 'getBusquedaConsulta',
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

        tbodyClienteP.append(
          '<tr>'+
            '<td>'+o.ccTitulo+'</td>'+
            '<td class="text-left"><textarea rows="4" cols="40" readonly>'+o.ccContenido+'</textarea></td>'+
            '<td class="text-left"><textarea rows="4" cols="40" readonly>'+o.ccRespuesta+'</textarea></td>'+
            '<td class="text-center">'+o.perNombre+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tbodyClienteP.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblClienteP.removeClass('hidden');
}

$(document).on('ready', function(){
txtBuscar.val('');
});

btnBuscar.on('click', getBusquedaConsulta);
