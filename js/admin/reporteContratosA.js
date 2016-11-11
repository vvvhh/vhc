var tblPersonas = $('#tblPersonas'),
tbodyPersonas = $('#tbodyPersonas');

var txtTotal = $('#txtTotal'),
txtTotalTel = $('#txtTotalTel'),
txtTotalLin = $('#txtTotalLin');

function getContratos(){
      var datos = $.ajax({
        url: 'getContratos',
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

        if ( res.status === 'OK' ){
          tbodyPersonas.html('');
           var i = 1;
           var nTel = 0, nLin = 0;

          $.each(res.data, function(k,o){

            var tipo =0;
            var tipoConsultaBD = o.solTipoConsulta;
            if(tipoConsultaBD == 1){
              tipo = "En Línea";
              nLin++;
            }
            if(tipoConsultaBD == 0){
              tipo = "Telefónica";
              nTel++;
            }

            /**************Para precio */
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

            /********************/
            statusContrato = '<a class="glyphicon glyphicon-import text-primary" id="'+o.solId+'" '+
            'href="getContratoMoral?c='+o.solId+'"'+
            'style="cursor:pointer" title="Descargar contrato"></a>';

            tbodyPersonas.append(
              '<tr>'+
                '<td class="text-center">'+o.ctoId+'</td>'+
                '<td >'+o.perNombre+'</td>'+
                '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="text-center">'+o.ctoFecha+'</td>'+
                '<td class="text-center">'+o.serNombre+'</td>'+
                '<td class="text-center">'+tipo+'</td>'+
                '<td class="text-center">'+nPaquete+'</td>'+
                '<td class="text-center">'+precioNumero+'</td>'+
                '<td class="text-center">'+statusContrato+'</td>'+
              '</tr>'
          );
          i++;
          });
          txtTotal.val(i-1);

          txtTotalLin.val(nLin);
          txtTotalTel.val(nTel);
        }else{
          tbodyPersonas.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblPersonas.removeClass('hidden');
}

$(document).on('ready', function(){
  getContratos();
});
$('#liRPagados').addClass('active');
$('#collapseReporte').addClass('in');
