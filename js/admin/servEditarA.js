var btnBuscar   = $('#btnBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    txtBuscar   = $('#txtBuscar');

var tblServicios   = $('#tblServicios'),
    tbodyServicios = $('#tbodyServicios');

var txtNombreServ = $('#txtNombreServ'),
    txtIdServicio = $('#txtIdServicio'),
    formEditarServ= $('#formEditarServ'),
    txtActivo     = $('#txtActivo'),
    btnGuardar    = $('#btnGuardar'),
    btnCancelar   = $('#btnCancelar'),
    token         = $('#_token');

function buscarServicio(){
  if(!validarBuscar())
    return false;
      var datos = $.ajax({
        url: 'buscarServicio',
        data: {
          token:  token.val(),
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

        tbodyServicios.html('');
        if ( res.status === 'OK' ){

           var i = 1;
          $.each(res.data, function(k,o){
            if ( o.serActivo == 1 ){
              status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
            }
            else{
              status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
            }
            formEditarServ.addClass('hidden');
            tbodyServicios.append(
              '<tr>'+
                '<td >'+o.serId+'</td>'+
                '<td >'+o.serNombre+'</td>'+
                '<td class="text-center">'+status+'</td>'+
                '<td class="text-center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.serId+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar"></span>'+
                '</td>'+
                '<td class="text-center">'+
                  '<span class="glyphicon glyphicon-trash text-danger" id="'+o.serId+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Dar de baja"></span>'+
                '</td>'+
              '</tr>'
          );
          i++;
          });
        }else{
          tbodyServicios.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblServicios.removeClass('hidden');
    }

function darBajaServicio(){
  var id = $(this).attr('id');  /*Ide desde el icono editar de la tabla*/
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'darBajaServicio',
    data: {
      idServicio: id,
      token: token.val()
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
      }catch(e){
      alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
      getServicios();
    }
    else{
      alert(res.message);
    }
}

function editarServicio(){
  var datos = $.ajax({
    url: 'editarServicio',
    data: {
      token: token.val(),
      idServicio: txtIdServicio.val(),
      nombreServicio: txtNombreServ.val(),
      activo: txtActivo.val()
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

    tbodyServicios.html('');
    if ( res.status === 'OK' ){
      limpiar();
    }
    alert(res.message);
}

function getServicios(){
  var datos = $.ajax({
    url: 'getTodosServicios',
    data: {
      buscar: 'null'  /*retorna todo contenido de tabla*/
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

    tbodyServicios.html('');
    if ( res.status === 'OK' ){
       var i = 1;
      $.each(res.data, function(k,o){
        if ( o.serActivo == 1 ){
          status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
    		else{
          status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }
        formEditarServ.addClass('hidden');
        tbodyServicios.append(
          '<tr>'+
            '<td >'+o.serId+'</td>'+
            '<td >'+o.serNombre+'</td>'+
            '<td class="text-center">'+status+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.serId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar"></span>'+
            '</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.serId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tbodyServicios.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblServicios.removeClass('hidden');
}

function seleccionarServicio(){
  var id = $(this).attr('id');  /*Ide desde el icono editar de la tabla*/
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'getServicio',
    data: {
      idSer: id
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
      }catch(e){
      alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
       var i = 1;
      $.each(res.data, function(k,o){
        txtActivo.find('option').each(function(){
        if ( o.serActivo == $(this).val() )
          txtActivo.val(o.serActivo);
        });
        txtNombreServ.val(o.serNombre);
        txtIdServicio.val(o.serId);
        formEditarServ.removeClass('hidden');
        tblServicios.addClass('hidden');
      i++;
      });
    }else{
      tbodyServicios.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function cancelar(){
  limpiar();
  location.href ="/admin";
}

function limpiar(){
  txtBuscar.val('');
  tblServicios.addClass('hidden');
  formEditarServ.addClass('hidden');
  txtNombreServ.val('');
}

function validarBuscar(){
  if (( txtBuscar.val() === '')||( txtBuscar.val() === null)){
    alert("Ingrese una cadena de caracteres a buscar.");
    txtBuscar.focus();
    return false;
  }
  return true;
}

$(document).on('ready', function(){
  limpiar();
  getServicios();
});
btnVerTodos.on('click',getServicios);
btnBuscar.on('click',buscarServicio);
tblServicios.delegate('.glyphicon-edit', 'click', seleccionarServicio);
tblServicios.delegate('.glyphicon-trash', 'click', darBajaServicio);
btnCancelar.on('click',cancelar);
btnGuardar.on('click',editarServicio);
