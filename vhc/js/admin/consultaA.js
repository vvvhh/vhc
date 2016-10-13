var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP = $('#tblClienteP');

var tblsolicitudes = $('#tblsolicitudes'),
    solicitudes    = $('#solicitudes'),
    tbodySolicitudes = $('#tbodySolicitudes'),
    btnCancelar = $('#btnCancelar'),
    nombreCliente = $('#nombreCliente'),
    numeroCliente = $('#numeroCliente');

var txtBuscar = $('#txtBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    btnBuscar   = $('#btnBuscar'),
    buscar = $('#buscar');

function getClientes(){
  var datos = $.ajax({
    url: 'getClientes',
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
        tbodyClienteP.append(
          '<tr>'+
            '<td>'+o.perNombre+'</td>'+
            '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+

            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar"></span>'+
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
                '<td>'+o.perNombre+'</td>'+
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

function seleccionarCliente(){
  var regU = $(this).attr('id');

  imprimir = document.getElementById('btnImprimir');
  imprimir.href='pdfServCliente?regU='+regU;

   var datos = $.ajax({
      url:'getSolicitudesPersona',
      data: {
        regU: regU
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

    nombreCliente.html('');
    numeroCliente.html('');
    tbodySolicitudes.html('');
    if ( res.status === 'OK' ){

       var i = 1;
       $.each(res.data, function(k,o){

        nombreCliente.val(o.perNombre);
        numeroCliente.val(o.perNumeroPreregistro);

         if ( o.solPagado == 1 ){
           statusPago = '<p class="text-success text-center" title="Activo">Sí</p>';
         }
        else{
          statusPago = '<p class="text-danger text-center" title="Aún no se activa">No</p>';
        }

           var tipoConsulta;
           var tipoConsultaBD = o.solTipoConsulta;
           if(tipoConsultaBD == 1){
             tipoConsulta = 'En Línea';
           }
           else tipoConsulta = 'Telefónicas';

          var fecha;
          if (o.solFecha !== null)
            fecha = o.solFecha.split(" ",1);
          var fechaCto;
          if (o.ctoFecha !== null)
            fechaCto = o.ctoFecha.split(" ",1);
          /******************************************************Para precio */
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

          /**************/
          tbodySolicitudes.append(
           '<tr>'+
             '<td class="col-md-3">'+fecha+'</td>'+
             '<td class="text-center">'+fechaCto+'</td>'+
             '<td class="text-center">'+o.solCondiciones+'</td>'+
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
    solicitudes.removeClass('hidden');
    tblClienteP.addClass('hidden');
    buscar.addClass('hidden');
}

function validar(){
  if (( slctPaquete.val() === '')||( slctPaquete.val() === null)){
    alert("Tiene que asignar precios a paquetes primero");
    return false;
  }
  return true;
}

function limpiar(){
  tblClienteP.addClass('hidden');
  solicitudes.addClass('hidden');
  buscar.removeClass('hidden');
  txtBuscar.val('');
}

$(document).on('ready', function(){
  limpiar();
  getClientes();
});

tblClienteP.delegate('.glyphicon-edit', 'click', seleccionarCliente);
btnCancelar.on('click', limpiar);
btnVerTodos.on('click', getClientes);
btnBuscar.on('click', getCliente);
