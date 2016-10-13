var tbodyPrecio = $('#tbodyPrecio'),
    tblPrecio = $('#tblPrecio');

var frmAgregar = $('#frmAgregar'),
    txtPrecio = $('#txtPrecio'),
    txtNumero = $('#txtNumero'),
    slcTipoPrecio = $('#slcTipoPrecio'),
    btnCancelarG = $('#btnCancelarG'),
    btnAgregarG = $('#btnAgregarG');

var formEditarP = $('#formEditarP'),
    txtEditPrecio = $('#txtEditPrecio'),
    txtEditNum = $('#txtEditNum'),
    slcEditTPrecio = $('#slcEditTPrecio'),
    btnGuardarE = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    txtActivo    = $('#txtActivo'),
    txtId = $('#txtId');
var token = $('#token');

function agregarPrecioTelefono(){
        if ( !validar() )
          return false;

       var datos = $.ajax({
          url:'agregarPrecioTelefono',
          data: {
            precio: txtPrecio.val(),
            num: txtNumero.val(),
            tipo: slcTipoPrecio.val(),
            token: token.val()
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
            alert.html('Error JSON ');
        }

        if ( res.status === 'OK' ){
          getTodosPrecioTelefono();
          limpiarGuardado();
        }

       alert(res.message);
     }
function getPrecioTipoActivo(){
  var datos = $.ajax({
    url: 'getPrecioTipoActivo',
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

    slcTipoPrecio.html('');
    slcEditTPrecio.html('');
    if ( res.status === 'OK' ){
       var i = 1;
      $.each(res.data, function(k,o){
        slcTipoPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
        );
        slcEditTPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
        );
      i++;
      });
    }else{
      slcTipoPrecio.html('<option >'+ res.message +'</option>');
    }
}

function getTodosPrecioTelefono(){
  var datos = $.ajax({
    url: 'getTodosPrecioTelefono',
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

    tbodyPrecio.html('');
    if ( res.status === 'OK' ){
       var i = 1;
      $.each(res.data, function(k,o){
        if ( o.preTActivo == 1 ){
          status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
        else{
          status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }
        tbodyPrecio.append(
          '<tr>'+
            '<td class="text-center">'+o.preTId+'</td>'+
            '<td class="text-center">'+o.pretNombre+'</td>'+
            '<td class="text-center">'+o.preTPrecio+'</td>'+
            '<td class="text-center">'+o.preTCantidad+'</td>'+
            '<td class="text-center">'+status+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.preTId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.preTId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar Precio"></span>'+
            '</td>'+

          '</tr>'
      );
      i++;
      });
    }else{
      tbodyPrecio.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
  tblPrecio.removeClass('hidden');
}

function editarPTelefonico(){
  if(!validarEdit())
  return false;

  if(  txtId.val() === "")
  return false;

var editar = $.ajax({
  url: 'editarPTelefonico',
  data: {
      id: txtId.val(),
      precio: txtEditPrecio.val(),
      num: txtEditNum.val(),
      activo: txtActivo.val(),
      tipo: slcEditTPrecio.val(),
      token: token.val()
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
    limpiarEditar();
    cargar();
  }
  alert(resultadoConsulta.message);
}

function bajaPrecioTelefono(){
  var id = $(this).attr('id');
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'bajaPrecioTelefono',
    data: {
      id: id,
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
      cargar();
    }
    else{
      alert(res.message);
    }
}

function seleccionarPrecioTelefono(){
  var id = $(this).attr('id');
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'seleccionarPrecioTelefono',
    data: {
      id: id
    },
    type: 'post',
    dataType:'json',
    async:false
  }).error(function(e){
    alert('Ocurrio un error, intente de nuevo');
  }).responseText;

  var resConsulta;
  try{
      resConsulta = JSON.parse(datos);

      }catch(e){
      alert('Error JSON ' + e);
    }

  if(resConsulta.status === 'OK'){
    var i;
    $.each(resConsulta.data, function(k,info){
      txtActivo.find('option').each(function(){
      if ( info.preTActivo == $(this).val() )
        txtActivo.val(info.preTActivo);
      });
      slcEditTPrecio.find('option').each(function(){
      if ( info.pretId == $(this).val() )
      slcEditTPrecio.val(info.pretId);
      });

      txtId.val(info.preTId);
      txtEditPrecio.val(info.preTPrecio);
      txtEditNum.val(info.preTCantidad);
    });
    formEditarP.removeClass('hidden');
    frmAgregar.addClass('hidden');
    tblPrecio.addClass('hidden');
    btnCancelarE.focus();
  }
  else alert(resConsulta.message);
}

function validar(){
  if ( txtPrecio.val() == ''){
    alert("ingrese cantidad para el precio de 6 consultas");
    txtPrecio.focus();
    return false;
  }
  if ( txtNumero.val() == ''){
    alert("ingrese cantidad para el precio de 12 consultas");
    txtNumero.focus();
    return false;
  }
  return true;
}

function validarEdit(){
  if ( txtEditPrecio.val() == ''){
    alert("ingrese cantidad para el precio de 6 consultas");
    txtEditPrecio.focus();
    return false;
  }
  if ( txtEditNum.val() == ''){
    alert("ingrese cantidad para el precio de 12 consultas");
    txtEditNum.focus();
    return false;
  }
  if ( txtActivo.val() == ''){
    alert("Seleccione el estado del precio");
    txtActivo.focus();
    return false;
  }
  return true;
}

function limpiarEditar(){
  txtEditPrecio.val("");
  txtEditNum.val("");
  txtId.val("");
  formEditarP.addClass('hidden');
  frmAgregar.removeClass('hidden');
  tblPrecio.removeClass('hidden');
}
function limpiarGuardado(){
  txtPrecio.val("");
  txtNumero.val("");
}

function cargar(){
  getTodosPrecioTelefono();
  limpiarGuardado();
  getPrecioTipoActivo();
}

function cancelar(){
  limpiarGuardado();
  location.href ="/admin";
}

$(document).on('ready', function(){
  cargar();
});

tblPrecio.delegate('.glyphicon-edit', 'click', seleccionarPrecioTelefono);
tblPrecio.delegate('.glyphicon-trash', 'click', bajaPrecioTelefono);
btnCancelarG.on('click', cancelar);
btnAgregarG.on('click', agregarPrecioTelefono);
btnCancelarE.on('click', limpiarEditar);
btnGuardarE.on('click', editarPTelefonico);
