var tbodyPrecio = $('#tbodyPrecio'),
    tblPrecio = $('#tblPrecio');

var frmAgregar = $('#frmAgregar'),
    txtNombreTP = $('#txtNombreTP'),
    slcPreTel   = $('#slcPreTel'),
    slcPreLin   = $('#slcPreLin'),
    txtTipoPred = $('#txtTipoPred'),
    btnCancelarG = $('#btnCancelarG'),
    btnAgregarG = $('#btnAgregarG');

var formEditarP = $('#formEditarP'),
    txtEditId   = $('#txtEditId'),
    txtEditNombreTP = $('#txtEditNombreTP'),
    txtEditTipoPred = $('#txtEditTipoPred'),
    btnGuardarE  = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    slcEditPreTel= $('#slcEditPreTel'),
    slcEditPreLin= $('#slcEditPreLin'),
    txtActivo    = $('#txtActivo'),
    txtId = $('#txtId');

var token = $('#token');

function agregarPrecioTipo(){
        if ( !validar() )
          return false;

        var datos = $.ajax({
          url:'agregarPrecioTipo',
          data: {
            nombreTipoP: txtNombreTP.val(),
            predefinido: txtTipoPred.val()
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
          icon = '<span class="glyphicon glyphicon-ok"></span> ';
          getTodosPrecioTipo();
          limpiarGuardado();
        }
       alert(res.message);

  }

  function darBajaPrecioTipo(){
    var id = $(this).attr('id');
    if (id==="")
      return false;

    var datos = $.ajax({
      url: 'darBajaPrecioTipo',
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
        getTodosPrecioTipo();
      }
      else{
        alert(res.message);
      }
  }

function editarPrecioTipo(){
    if(      txtId.val() === "")
    return false;
  var editar = $.ajax({
    url: 'editarPrecioTipo',
    data: {
        id: txtEditId.val(),
        nombreTipoP: txtEditNombreTP.val(),
        predefinido: txtEditTipoPred.val(),
        activo: txtActivo.val(),
        token: token.val()
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
      limpiarEditar();
      getTodosPrecioTipo();
    }
    alert(resultado.message);
  }

function getTodosPrecioTipo(){
  var datos = $.ajax({
		url: 'getTodosPrecioTipo',
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
        if ( o.pretPredefinido == 1 ){
          pred = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
        else{
          pred = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }

        if ( o.pretActivo == 1 ){
          status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
        else{
          status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }
        tbodyPrecio.append(
          '<tr>'+
            '<td class="text-center">'+o.pretId+'</td>'+
            '<td class="text-center"><strong> '+o.pretNombre+'</strong></td>'+
            '<td class="text-center">'+pred+'</td>'+
            '<td class="text-center">'+status+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.pretId+'" '+
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.pretId+'" '+
              'style="cursor:pointer" title="Editar"></span>'+
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

function getPrecioTipo(){
  var id = $(this).attr('id');
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'getPrecioTipo',
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
    $.each(resConsulta.data, function(k,info){

      txtEditTipoPred.find('option').each(function(){
      if ( info.pretPredefinido == $(this).val() )
        txtEditTipoPred.val(info.pretPredefinido);
      });

      txtActivo.find('option').each(function(){
      if ( info.pretActivo == $(this).val() )
        txtActivo.val(info.pretActivo);
      });

      txtEditId.val(info.pretId);
      txtEditNombreTP.val(info.pretNombre);
    });
    formEditarP.removeClass('hidden');
    frmAgregar.addClass('hidden');
    tblPrecio.addClass('hidden');
    btnCancelarE.focus();
  }
}

function getPrecioLinActivo(){
    var datos = $.ajax({
      url: 'getPrecioLinActivo',
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

      slcPreLin.html('');
      if ( res.status === 'OK' ){

         var i = 1;
        $.each(res.data, function(k,o){
          slcPreLin.append(
            '<option value="'+o.preLId+'">'+o.preLSeis+' - '+o.preLDoce+' - '+o.preLDieciocho+'</option>'
        );
        slcEditPreLin.append(
          '<option value="'+o.preLId+'">'+o.preLSeis+' - '+o.preLDoce+' - '+o.preLDieciocho+'</option>'
        );
        i++;
        });
      }else{
        slcPreLin.html('<option >'+ res.message +'</option>');
      }
  }

function getPrecioTelActivo(){
    var datos = $.ajax({
      url: 'getPrecioTelActivo',
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

      slcPreTel.html('');
      if ( res.status === 'OK' ){
         var i = 1;
        $.each(res.data, function(k,o){
          slcPreTel.append(
            '<option value="'+o.preTId+'">'+o.preTSeis+' - '+o.preTDoce+' - '+o.preTDieciocho+'</option>'
        );
        slcEditPreTel.append(
          '<option value="'+o.preTId+'">'+o.preTSeis+' - '+o.preTDoce+' - '+o.preTDieciocho+'</option>'
      );
        i++;
        });
      }else{
        slcPreTel.html('<option >'+ res.message +'</option>');
      }
  }


function validar(){
  if (( txtNombreTP.val() === '')||( txtNombreTP.val() === null)){
    alert("Ingrese nombre del tipo de precios");
    txtNombreTP.focus();
    return false;
  }
  return true;
}

function limpiarEditar(){
  txtEditId.val("");
  txtEditNombreTP.val("");
  formEditarP.addClass('hidden');
  frmAgregar.removeClass('hidden');
  tblPrecio.removeClass('hidden');
}
function limpiarGuardado(){
  txtNombreTP.val("");
}

function cargar(){
  getTodosPrecioTipo();
  limpiarGuardado();
}

function cancelar(){
  limpiarGuardado();
  location.href ="/admin";
}

$(document).on('ready', function(){
  cargar();
});

tblPrecio.delegate('.glyphicon-edit', 'click', getPrecioTipo);
tblPrecio.delegate('.glyphicon-trash', 'click', darBajaPrecioTipo);
btnCancelarG.on('click', cancelar);
btnAgregarG.on('click', agregarPrecioTipo);
btnCancelarE.on('click', limpiarEditar);
btnGuardarE.on('click', editarPrecioTipo);
