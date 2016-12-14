var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP   = $('#tblClienteP');

var tblsolicitudes   = $('#tblsolicitudes'),
    tbodySolicitudes = $('#tbodySolicitudes');

var txtBuscar   = $('#txtBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    btnBuscar   = $('#btnBuscar'),
    buscar      = $('#buscar');
var txtNombreA = $('#txtNombreA'),
txtEnlaceA = $('#txtEnlaceA'),
txtTipoA = $('#txtTipoA'),
btnGuardarA = $('#btnGuardarA');

var formEditarPC = $('#formEditarPC'),
    btnGuardarE  = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    token        = $('#token'),
    tbodyPrecio  = $('#tbodyPrecio'),
    tbodyPrecioLin = $('#tbodyPrecioLin'),
    tblPrecio    = $('#tblPrecio');

var formDetallesPersona = $('#formDetallesPersona'),
    txtIdE              = $('#txtIdE'),
    txtTipo          = $('#txtTipo'),
    txtNombre           = $('#txtNombre'),
    txtEnlace              = $('#txtEnlace'),
    btnRegresar         = $('#btnRegresar');

var btnGuardarEdit = $('#btnGuardarEdit');
var id;
var btnEnviarReseteo = $('#btnEnviarReseteo'),
    txtContraAdm = $('#txtContraAdm');

var txtNombreA = $('#txtNombreA'),
    txtEnlaceA = $('#txtEnlaceA'),
    txtTipoA = $('#txtTipoA'),
    btnGuardarA = $('#btnGuardarA'),
    btnRegresarA = $('#btnRegresarA'),
    formAgregar = $('#formAgregar');

function eliminarEnlaceLeg(){
  var id = $(this).attr('id');

  var datos = $.ajax({
    url: '../php/legislacionLink/eliminarLegislacion.php',
    data: {
      id: id,

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
      alert(res.message);
      limpiarAgregar();
    }
    else{
      alert(res.message);
    }
}

function editarELegislacion(){

  var datos = $.ajax({
    url:'../php/legislacionLink/editarLegislacion.php',
    data: {
      id:   txtIdE.val(),
      nom:  txtNombre.val(),
      enl:  txtEnlace.val(),
      tipo: txtTipo.val()

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

  if ( res.status === 'OK' ){
    alert(res.message);
    limpiarAgregar();
  }else{
    alert(res.message);
  }
}

  function getLegEspecifico(){
    formDetallesPersona.removeClass('hidden');
    formAgregar.addClass('hidden');
    tblClienteP.addClass('hidden');
    buscar.addClass('hidden');
    tblPrecio.addClass('hidden');
    id = $(this).attr('id');

    var datos = $.ajax({
      url:'../php/legislacionLink/getLegislacionId.php',
      data: {
        id: id
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

    var tituloA="",textoA="",estadoA="";
    if ( res.status === 'OK' ){
        textoA = res.message;
        var dataUsuario = res.data;

        $.each(res.data, function(k,o){
        txtTipo.find('option').each(function(){
         if ( o.legTipo == $(this).val() )
         txtTipo.val(o.legTipo);
       });

         txtIdE.val(o.legId);
         txtNombre.val(o.legNombre);
         txtEnlace.val(o.legLink);
         txtTipo.val(o.legTipo);
       });

    }else{
      textoA = res.message;
      txtBuscar.focus();
      alert(textoA);

    }
  }

function getLegTodos(){
  var datos = $.ajax({
    url: '../php/legislacionLink/getTodoLegislacion.php',
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
        var tipoE;
        if (o.legTipo == 1) {
          tipoE="Constitución";
        }
        if (o.legTipo == 2) {
          tipoE="Códigos";
        }
        if (o.legTipo == 3) {
          tipoE="Leyes";
        }
        if (o.legTipo == 4) {
          tipoE="Reglamentos";
        }
        if (o.legTipo == 5) {
          tipoE="Estatutos";
        }
        if (o.legTipo == 6) {
          tipoE="Otros";
        }

        tbodyClienteP.append(
          '<tr>'+
            '<td class="text-left">'+o.legNombre+'</td>'+
            '<td class="text-left">'+o.legLink+'</td>'+
            '<td class="text-center">'+tipoE+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.legId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.legId+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar"></span>'+
            '</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
      tblClienteP.html('<tr><td colspan="8" class="text-center"><h3>'+ res.message +'</h3></td></tr>');
    }
    tblClienteP.removeClass('hidden');
}

function getLegislacion(){
      var datos = $.ajax({
        url: '../php/legislacionLink/getLegislacion.php',
        data: {
          bsc: txtBuscar.val(),
          adm:1
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

            var tipoE;
            if (o.legTipo == 1) {
              tipoE="Constitución";
            }
            if (o.legTipo == 2) {
              tipoE="Códigos";
            }
            if (o.legTipo == 3) {
              tipoE="Leyes";
            }
            if (o.legTipo == 4) {
              tipoE="Reglamentos";
            }
            if (o.legTipo == 5) {
              tipoE="Estatutos";
            }
            if (o.legTipo == 6) {
              tipoE="Otros";
            }
            if (o.legTipo == 7) {
              tipoE="Legislación estatal";
            }

            tbodyClienteP.append(
              '<tr>'+
                '<td class="text-left">'+o.legNombre+'</td>'+
                '<td class="text-center">'+o.legLink+'</td>'+
                '<td class="text-center">'+tipoE+'</td>'+
                '<td class="text-center">'+
                  '<span class="glyphicon glyphicon-trash text-danger" id="'+o.legId+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Dar de baja"></span>'+
                '</td>'+

                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.legId+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar Datos"></span>'+
                '</td>'+
              '</tr>'
          );
          i++;
          });
        }else{
          tbodyClienteP.html('<tr><td colspan="8" class="text-center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblClienteP.removeClass('hidden');
}

function agregarEnlace(){
  var datos = $.ajax({
    url:'../php/legislacionLink/agregarLegislacion.php',
    data: {
      nom:  txtNombreA.val(),
      enl:  txtEnlaceA.val(),
      tipo: txtTipoA.val()

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

  if ( res.status === 'OK' ){
    alert(res.message);
    limpiarAgregar();
  }else{
    alert(res.message);
  }
}

function limpiarDetalles(){
  tblClienteP.removeClass('hidden');
  buscar.removeClass('hidden');
  formDetallesPersona.addClass('hidden');
  formAgregar.removeClass('hidden');
}

function limpiarAgregar(){
  buscar.removeClass('hidden');
  tblClienteP.addClass('hidden');

  formDetallesPersona.addClass('hidden');
  txtBuscar.val('');
  txtNombreA.val('');
      txtEnlaceA.val('');
      txtTipoA.val('');
}

$(document).on('ready', function(){
  limpiarAgregar();
});


txtBuscar.keyup(function (e) {
    if (e.keyCode == 13) {
        getLegislacion();
    }
});

txtEnlace.keyup(function (e) {
    if (e.keyCode == 13) {
        editarELegislacion();
    }
});

tblClienteP.delegate('.glyphicon-trash', 'click', eliminarEnlaceLeg);
tblClienteP.delegate('.glyphicon-edit', 'click', getLegEspecifico);
btnRegresar.on('click',limpiarDetalles);

btnGuardarEdit.on('click', editarELegislacion);
btnRegresarA.on('click', limpiarAgregar);
btnGuardarA.on('click', agregarEnlace);
btnVerTodos.on('click', getLegTodos);
btnBuscar.on('click', getLegislacion);
