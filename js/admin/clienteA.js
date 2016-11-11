var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP   = $('#tblClienteP');

var tblsolicitudes   = $('#tblsolicitudes'),
    tbodySolicitudes = $('#tbodySolicitudes');

var txtBuscar   = $('#txtBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    btnBuscar   = $('#btnBuscar'),
    buscar      = $('#buscar');
var moral            = $('#moral'),
    txtRepresentante = $('#txtRepresentante'),
    txtTipoPersona   = $('#txtTipoPersona');

var formEditarPC = $('#formEditarPC'),
    btnImprimir  = $('#btnImprimir'),
    txtNombreC   = $('#txtNombreC'),
    txtNRegistro = $('#txtNRegistro'),
    btnGuardarE  = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    token        = $('#token'),
    tbodyPrecio  = $('#tbodyPrecio'),
    tbodyPrecioLin = $('#tbodyPrecioLin'),
    tblPrecio    = $('#tblPrecio');

var formDetallesPersona = $('#formDetallesPersona'),
    txtActivo           = $('#txtActivo'),
    txtId               = $('#txtId'),
    txtPersona          = $('#txtPersona'),
    txtTipoPrecio       = $('#txtTipoPrecio'),
    txtNombre           = $('#txtNombre'),
    txtRegistro         = $('#txtRegistro'),
    txtNacionalidad     = $('#txtNacionalidad'),
    txtCP               = $('#txtCP'),
    txtCalle            = $('#txtCalle'),
    txtNumero           = $('#txtNumero'),
    txtColonia          = $('#txtColonia'),
    txtMunicipio        = $('#txtMunicipio'),
    txtEntidad          = $('#txtEntidad'),
    txtNacionalidad     = $('#txtNacionalidad'),
    txtRFC              = $('#txtRFC'),
    txtActividad        = $('#txtActividad'),
    txtTelefono         = $('#txtTelefono'),
    txtCorreo           = $('#txtCorreo'),
    txtAceptacion       = $('#txtAceptacion'),
    btnRegresar         = $('#btnRegresar');
var txtNombreRL    = $('#txtNombreRL'),
    txtNumeroEP    = $('#txtNumeroEP'),
    txtDiaEP       = $('#txtDiaEP'),
    txtMesEP       = $('#txtMesEP'),
    txtAnioEP      = $('#txtAnioEP'),
    txtNombreNP    = $('#txtNombreNP'),
    txtNumeroNP    = $('#txtNumeroNP'),
    txtLugarEP     = $('#txtLugarEP'),
    dvPersonaMoral = $('#dvPersonaMoral');

var btnGuardarEdit = $('#btnGuardarEdit');
var id;
var btnEnviarReseteo = $('#btnEnviarReseteo'),
    txtContraAdm = $('#txtContraAdm');
function bajaPersona(){
  var regUsuario = $(this).attr('id');
  if (regUsuario==="")
    return false;

  var datos = $.ajax({
    url: 'bajaPersona',
    data: {
      regU: regUsuario,
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
      getClientes();
    }
    else{
      alert(res.message);
    }
}

function editarPersona(){
  var datos = $.ajax({
    url:'editarPersona',
    data: {
      idPersona:txtId.val(),
      token:token.val(),
      nombre: txtNombre.val(),
      nombreRepresentanteLegar: txtNombreRL.val(),
      cp: txtCP.val(),
      calle: txtCalle.val(),
      numero: txtNumero.val(),
      colonia: txtColonia.val(),
      municipio: txtMunicipio.val(),
      entidad: txtEntidad.val(),
      nacionalidad: txtNacionalidad.val(),
      rfc: txtRFC.val(),
      actividad: txtActividad.val(),
      diaEP: txtDiaEP.val(),
      numeroEP: txtNumeroEP.val(),
      mesEP: txtMesEP.val(),
      anioEP: txtAnioEP.val(),
      nombreNP: txtNombreNP.val(),
      numeroNP: txtNumeroNP.val(),
      lugarEP: txtLugarEP.val(),
      telefono: txtTelefono.val(),
      correo: txtCorreo.val(),
      activo: txtActivo.val(),
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
    getClientes();
    limpiarEditar();
  }else{
    alert(res.message);
  }
}

function cambiarPrecioP(){
  var datos = $.ajax({
    url:'cambiarPrecioP',
    data: {
      token:token.val(),
      regU: txtNRegistro.val(),
      tipoPrecio: txtTipoPrecio.val()
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
    getClientes();
    limpiarEditar();
  }else{
    alert(res.message);
  }
}

  function getPersona(){
    formDetallesPersona.removeClass('hidden');
    tblClienteP.addClass('hidden');
    buscar.addClass('hidden');
    tblPrecio.addClass('hidden');
    regUsuario = $(this).attr('id');
    imprimir = document.getElementById('btnImprimir');
    imprimir.href='pdfInfoPre?regU='+regUsuario;

    var datos = $.ajax({
      url:'getPersona',
      data: {
        regU: regUsuario
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
        txtActivo.find('option').each(function(){
         if ( o.perBaja == $(this).val() )
         txtActivo.val(o.perBaja);
       });

          txtId.val(o.perId);
          txtNombre.val(o.perNombre);
          txtRegistro.val(o.perNumeroPreregistro);
          txtNacionalidad.val(o.perNacionalidad);
          txtCP.val(o.perCodigoP);
          txtCalle.val(o.perDCalle);
          txtNumero.val(o.perDNumero);
          txtColonia.val(o.perDColonia);
          txtMunicipio.val(o.perDMunicipio);
          txtEntidad.val(o.perDEstado);
          txtRFC.val(o.perRFC);
          txtActividad.val(o.perActividad);
          txtTelefono.val(o.perTelefono);
          txtCorreo.val(o.perCorreo);
          txtAceptacion.val(o.perCondiciones);
          var tipoPersona = o.perTipoPersona;

          if ( o.perTipoPersona == 1) { /*Persona moral=1*/
            dvPersonaMoral.removeClass('hidden');
            txtNombreRL.val(o.perRepresentanteLegal);
            txtNumeroEP.val(o.perNumeroEP);
            txtDiaEP.val(o.perDiaEP);
            txtMesEP.val(o.perMesEP);
            txtAnioEP.val(o.perAnioEP);
            txtNombreNP.val(o.perNombreNP);
            txtNumeroNP.val(o.perNumeroNP);
            txtLugarEP.val(o.perLugarEP);
            txtPersona.val("Moral");
          }
          else{
            txtPersona.val("Física");
            dvPersonaMoral.addClass('hidden');
          }
        });

    }else{
      textoA = res.message;
      alert(textoA);
    }
  }

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
        if ( o.perBaja == 1 ){
          status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
        }
        else{
          status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
        }
        tbodyClienteP.append(
          '<tr>'+
            '<td class="col-md-4">'+o.perNombre+'</td>'+
            '<td class="col-md-2 text-center">'+o.perNumeroPreregistro+'</td>'+
            '<td class="col-md-2 text-center">'+o.pretNombre+'</td>'+
            '<td class="col-md-1 text-center">'+status+'</td>'+
            '<td class="text-center">'+
              '<span class="glyphicon glyphicon-trash text-danger" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Dar de baja"></span>'+
            '</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar"></span>'+
            '</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-list text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar Precios"></span>'+
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
            if ( o.perBaja == 1 ){
              status = '<span class="glyphicon glyphicon-ok text-success" title="Activo"></span>';
            }
            else{
              status = '<span class="glyphicon glyphicon-remove" title="Inactivo"></span>';
            }
            tbodyClienteP.append(
              '<tr>'+
                '<td class="col-md-3">'+o.perNombre+'</td>'+
                '<td class="col-md-2 text-center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="col-md-1 text-center">'+o.pretNombre+'</td>'+
                '<td class="col-md-1 text-center">'+status+'</td>'+
                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-trash text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Dar de baja"></span>'+
                '</td>'+

                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar Datos"></span>'+
                '</td>'+
                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-list text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar Precios"></span>'+
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

function getPersonaEdit($regUsuario){
  var datos = $.ajax({
    url:'getPersona',
    data: {
      regU: $regUsuario
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
    $.each(res.data, function(k,o){
      if(o.perTipoPersona === 1) $persona = "Moral";
      else $persona = "Física";

      txtTipoPrecio.find('option').each(function(){
       if ( o.perPreciosT == $(this).val() )
       txtTipoPrecio.val(o.perPreciosT);
     });

      txtNRegistro.val(o.perNumeroPreregistro);
      txtNombreC.val(o.perNombre);
      txtTipoPersona.val($persona);
    });
  }else{
    textoA = res.message;
    alert(textoA);
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

    tbodyPrecio.html('');
    txtTipoPrecio.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){

        txtTipoPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
        );

        tbodyPrecio.append(
          '<tr>'+
            '<td class="text-center">'+o.preLPrecio+'</td>'+
            '<td class="text-center">'+o.preLCantidad+'</td>'+
            '<td class="text-center"><strong>'+o.pretNombre+'</strong></td>'+
          '</tr>'

      );
      i++;
      });
    }else{
      tbodyPrecio.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
  tblPrecio.removeClass('hidden');
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

    tbodyPrecioLin.html('');
    txtTipoPrecio.html('');
    if ( res.status === 'OK' ){

       var i = 1;
      $.each(res.data, function(k,o){

        txtTipoPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
        );

        tbodyPrecioLin.append(
          '<tr>'+
            '<td class="text-center">'+o.preTPrecio+'</td>'+
            '<td class="text-center">'+o.preTCantidad+'</td>'+
            '<td class="text-center"><strong>'+o.pretNombre+'</strong></td>'+
          '</tr>'

      );
      i++;
      });
    }else{
      tbodyPrecio.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
  tblPrecio.removeClass('hidden');
}
function restaurarContra(){
  var datos = $.ajax({
    url:'restaurarContra',
    data: {
      regU:txtRegistro.val(),
      adm: txtContraAdm.val(),
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
      alert('Error JSON ' + e);
  }

  if ( res.status === 'OK' ){
    alert("La nueva contraseña es el Número de registro del cliente, también se le notificara al cliente via correo electrónico.");
    limpiarEditar();
  }else{
    textoA = res.message;
    alert(textoA);
  }
}

function seleccionarCliente(){  /**************/
  tblPrecio.removeClass('hidden');
  formEditarPC.removeClass('hidden');
  getPrecioLinActivo();
  getPrecioTelActivo();
  buscar.addClass('hidden');
  tblClienteP.addClass('hidden');
  var regUsuario = $(this).attr('id');
  getPersonaEdit(regUsuario);
  txtContraAdm.val('');
}

function limpiarDetalles(){
  tblClienteP.removeClass('hidden');
  formEditarPC.addClass('hidden');
  tblPrecio.addClass('hidden');
  buscar.removeClass('hidden');
  formDetallesPersona.addClass('hidden');
  txtContraAdm.val('');
}

function limpiarEditar(){
  buscar.removeClass('hidden');
  tblClienteP.addClass('hidden');
  formEditarPC.addClass('hidden');
  tblPrecio.addClass('hidden');

  formDetallesPersona.addClass('hidden');
  txtBuscar.val('');
  txtContraAdm.val('');
}

$(document).on('ready', function(){
  limpiarEditar();
  getClientes();
});

tblClienteP.delegate('.glyphicon-list', 'click', seleccionarCliente);
tblClienteP.delegate('.glyphicon-trash', 'click', bajaPersona);
tblClienteP.delegate('.glyphicon-edit', 'click', getPersona);
btnRegresar.on('click',limpiarDetalles);

btnGuardarEdit.on('click', editarPersona);
btnCancelarE.on('click', limpiarEditar);
btnGuardarE.on('click', cambiarPrecioP);
btnVerTodos.on('click', getClientes);
btnBuscar.on('click', getCliente);
btnEnviarReseteo.on('click',restaurarContra);
$('#liCliente').addClass('active');
$('#collapseClie').addClass('in');
