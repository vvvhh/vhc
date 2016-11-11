var tbodyConsultaR = $('#tbodyConsultaR'),
    tblConsultaR = $('#tblConsultaR');

  function getMContacto(){
      var datos = $.ajax({
        url: 'getMContacto',
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
        tbodyConsultaR.html('');
        if ( res.status === 'OK' ){

           var i = 1;
          $.each(res.data, function(k,o){
            tbodyConsultaR.append(
              '<tr>'+
                '<td class="text-center">'+o.ctomNombre+'</td>'+
                '<td class="text-center">'+o.ctomTelefono+'</td>'+
                '<td class="text-center">'+o.ctomCorreo+'</td>'+
                '<td class="text-center">'+o.ctomMensaje+'</td>'+
                '<td class="text-center">'+o.ctomFecha+'</td>'+
                '<td class="text-center">'+o.ctomCondicionServicio+'</td>'+
              '</tr>'
          );
          i++;
          });
        }else{
          tblConsultaR.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblConsultaR.removeClass('hidden');
    }

$(document).on('ready', function(){
  getMContacto();
});
