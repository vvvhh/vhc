var tbodyPrecio = $('#tbodyPrecio'),
    tblPrecio = $('#tblPrecio');

var frmAgregar = $('#frmAgregar'),
    txtNombre = $('#txtNombre'),
    txtApe1 = $('#txtApe1'),
    txtApe2 = $('#txtApe2'),
    btnCancelarG = $('#btnCancelarG'),
    btnAgregarG = $('#btnAgregarG');

var formEditarP = $('#formEditarP'),
    txtEditNombre = $('#txtEditNombre'),
    txtEditApe1 = $('#txtEditApe1'),
    txtEditApe2 = $('#txtEditApe2'),
    btnGuardarE = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    txtActivo    = $('#txtActivo'),
    txtId = $('#txtId');
var token = $('#token');

function agregarAsesor(){

        if ( !validar() )
          return false;

       var datos = $.ajax({
          url:'agregarAsesor',
          data: {
            nom: txtNombre.val(),
            ape1: txtApe1.val(),
            ape2: txtApe2.val(),
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
          getAsesores();
          limpiarGuardado();
        }
       alert(res.message);
     }

function getAsesores(){
  var datos = $.ajax({
    url: 'getAsesores',
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
        if ( o.asesActivo == 1 ){
          status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
        else{
          status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }
        tbodyPrecio.append(
          '<tr>'+
          '<td class="text-center">'+o.asesId+'</td>'+
            '<td class="text-center">'+o.asesNombre+'</td>'+
            '<td class="text-center">'+o.asesPrimerApe+'</td>'+
            '<td class="text-center">'+o.asesSegundoApe+'</td>'+
            '<td class="text-center">'+status+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.asesId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.asesId+'" '+ /*Id para usar despues al dar clic*/
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

function editarAsesor(){
  if(!validarEdit())
  return false;

  if(  txtId.val() === "")
  return false;

var editar = $.ajax({
  url: 'editarAsesor',
  data: {
      id: txtId.val(),
      nom: txtEditNombre.val(),
      ape1: txtEditApe1.val(),
      ape2: txtEditApe2.val(),
      activo: txtActivo.val(),
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

function bajaAsesor(){
  var id = $(this).attr('id');
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'bajaAsesor',
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

function seleccionarAsesor(){
  var id = $(this).attr('id');
  if (id==="")
    return false;

  var datos = $.ajax({
    url: 'seleccionarAsesor',
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
      if ( info.asesActivo == $(this).val() )
        txtActivo.val(info.asesActivo);
      });

      txtId.val(info.asesId);
      txtEditNombre.val(info.asesNombre);
      txtEditApe1.val(info.asesPrimerApe);
      txtEditApe2.val(info.asesSegundoApe);
    });
    formEditarP.removeClass('hidden');
    frmAgregar.addClass('hidden');
    tblPrecio.addClass('hidden');
    btnCancelarE.focus();
  }
  else alert(resConsulta.message);
}

function validar(){
  if ( txtNombre.val() == ''){
    alert("Ingrese el nombre del asesor");
    txtNombre.focus();
    return false;
  }
  if ( txtApe1.val() == ''){
    alert("Ingrese el primer apellido del asesor");
    txtApe1.focus();
    return false;
  }
  if ( txtApe2.val() == ''){
    alert("Ingrese segndo apellido del asesor");
    txtApe2.focus();
    return false;
  }
  return true;
}

function validarEdit(){
  if ( txtEditNombre.val() == ''){
    alert("ingrese cantidad para el precio de 6 consultas");
    txtEditNombre.focus();
    return false;
  }
  if ( txtEditApe1.val() == ''){
    alert("ingrese cantidad para el precio de 12 consultas");
    txtEditApe1.focus();
    return false;
  }
  if ( txtEditApe2.val() == ''){
    alert("ingrese cantidad para el precio de 18 consultas");
    txtEditApe2.focus();
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
  txtEditNombre.val("");
  txtEditApe1.val("");
  txtEditApe2.val("");
  txtId.val("");
  formEditarP.addClass('hidden');
  frmAgregar.removeClass('hidden');
  tblPrecio.removeClass('hidden');
}
function limpiarGuardado(){
  txtNombre.val("");
  txtApe1.val("");
  txtApe2.val("");
}
function cancelar(){
  limpiarGuardado();
  location.href ="/admin";
}

function cargar(){
  getAsesores();
  limpiarGuardado();
}

$(document).on('ready', function(){
  cargar();
});

tblPrecio.delegate('.glyphicon-edit', 'click', seleccionarAsesor);
tblPrecio.delegate('.glyphicon-trash', 'click', bajaAsesor);
btnCancelarG.on('click', cancelar);
btnAgregarG.on('click', agregarAsesor);
btnCancelarE.on('click', limpiarEditar);
btnGuardarE.on('click', editarAsesor);
