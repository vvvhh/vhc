var tblPersonas = $('#tblPersonas'),
tbodyPersonas = $('#tbodyPersonas');

var txtTotal = $('#txtTotal'),
txtPreregistros = $('#txtPreregistros'),
txtClientes = $('#txtClientes');

function getPersonas(){
      var datos = $.ajax({
        url: 'getPersonas',
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
           var pre = 0, iclientes = 0;

          $.each(res.data, function(k,o){

            if(o.perTipoPersona == 1)
              tipoPersonas = "moral";
            else tipoPersonas = "física";

            if(o.perCliente == 1){
              cliente = "cliente";
              iclientes = iclientes+1;
            }
            if(o.perCliente == 0){
              pre = pre+ 1;
              cliente = "pre-registro";
            }

            if(o.perFechaRegistro == null)
              fechaActivacion = "-";
            else   fechaActivacion = o.perFechaRegistro

            tbodyPersonas.append(
              '<tr>'+
                '<td class="col-md-1">'+i+'</td>'+
                '<td class="col-md-3">'+o.perNombre+'</td>'+
                '<td class="col-md-1 center">'+tipoPersonas+'</td>'+
                '<td class="col-md-1 center">'+cliente+'</td>'+
                '<td class="col-md-2 center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="col-md-2 center">'+o.perFechaPreregistro+'</td>'+
                '<td class="col-md-2 center">'+fechaActivacion+'</td>'+
              '</tr>'
          );
          i++;
          });
          txtTotal.val(i-1);
          txtClientes.val(iclientes);
          txtPreregistros.val(pre);
        }else{
          tbodyPersonas.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblPersonas.removeClass('hidden');
}


$(document).on('ready', function(){
  getPersonas();
});
$('#liPRegistradas').addClass('active');
$('#collapseReporte').addClass('in');
