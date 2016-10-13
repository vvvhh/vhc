var tblServicios = $('#tblServicios'),
    tbodyServicios = $('#tbodyServicios');

var txtNombreServ = $('#txtNombreServ'),
    btnAgregar = $('#btnAgregar'),
    btnCancelar = $('#btnCancelar'),
    token = $('#_token');

function ingresoServicio(){
  if(!validar())
    return false;

  var editar = $.ajax({
    url: 'ingresoServicio',
    data: {
      token:          token.val(),
      nombreServicio: txtNombreServ.val()
    },
    type: 'post',
    dataType:'json',
      async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var resultado;
    try{
      resultado = JSON.parse(editar);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( resultado.status === 'OK' ){
      limpiar();
      getServicios();
    }

    alert(resultado.message);
}

function getServicios(){
  var datos = $.ajax({
    url: 'getServicios',
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
        tbodyServicios.append(
          '<tr>'+
            '<td class="col-md-2">'+o.serId+'</td>'+
            '<td class="col-md-2">'+o.serNombre+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tbodyServicios.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function limpiar(){
  txtNombreServ.val('');
}
function cancelar(){
  limpiar();
  location.href ="/admin";
}

function validar(){
  if (( txtNombreServ.val() === '')||( txtNombreServ.val() === null)){
    alert("Ingrese el nombre del servicio a agregar.");
    txtNombreServ.focus();
    return false;
  }
  return true;
}

$(document).on('ready', function(){
  getServicios();
  limpiar();
});
btnCancelar.on('click',cancelar);
btnAgregar.on('click',ingresoServicio);
