var tbodyClienteP = $('#tbodyClienteP'),
    tblClienteP   = $('#tblClienteP');

var btnBuscar   = $('#btnBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    txtBuscar   = $('#txtBuscar'),
    buscar      = $('#buscar');

var formEditarPC = $('#formEditarPC'),
    txtNombreC   = $('#txtNombreC'),
    txtNRegistro = $('#txtNRegistro'),
    txtTipoPrecio= $('#txtTipoPrecio'),
    btnGuardarE  = $('#btnGuardarE'),
    btnCancelarE = $('#btnCancelarE'),
    txtId        = $('#txtId'),
    tblPrecio    = $('#tblPrecio'),
    tbodyPrecio  = $('#tbodyPrecio');

var moral        = $('#moral'),
txtRepresentante = $('#txtRepresentante'),
txtTipoPersona   = $('#txtTipoPersona');

var formDetallesPersona = $('#formDetallesPersona'),
    token               = $('#token'),
    txtActivo           = $('#txtActivo'),
    txtNombre           = $('#txtNombre'),
    txtRegistro         = $('#txtRegistro'),
    txtPersona          = $('#txtPersona'),
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
    txtAceptacion       = $('#txtAceptacion');
    btnRegresar         = $('#btnRegresar');
var txtNombreRL         = $('#txtNombreRL'),
    txtNumeroEP         = $('#txtNumeroEP'),
    txtDiaEP            = $('#txtDiaEP'),
    txtMesEP            = $('#txtMesEP'),
    txtAnioEP           = $('#txtAnioEP'),
    txtNombreNP         = $('#txtNombreNP'),
    txtNumeroNP         = $('#txtNumeroNP'),
    txtLugarEP          = $('#txtLugarEP'),
    btnGuardarEdit      = $('#btnGuardarEdit'),
    dvPersonaMoral      = $('#dvPersonaMoral');

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
        getPreregistros();
        limpiarEditar();
      }else{
        alert(res.message);
      }
    }

function getPersona(){
  formDetallesPersona.removeClass('hidden');
  tblClienteP.addClass('hidden');
  buscar.addClass('hidden');
  var regUsuario = $(this).attr('id');
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
function activarCliente(){
  var regUsuario = $(this).attr('id');
  if (regUsuario==="")
    return false;

  var datos = $.ajax({
    url: 'activarCliente',
    data: {
      regU: regUsuario
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
    tblClienteP.addClass('hidden');
   alert(resConsulta.message);
}

function getPreregistro(){
      var datos = $.ajax({
        url: 'getPreregistro',
        data: {
          numeroP: txtBuscar.val()
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
                '<td class="col-md-4">'+o.perNombre+'</td>'+
                '<td class="col-md-2 text-center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="col-md-1 text-center">'+o.pretNombre+'</td>'+
                '<td class="col-md-1 text-center">'+status+'</td>'+
                '<td class="col-md-2 text-center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*N registro para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar datos"></span>'+
                '</td>'+
                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-list text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Editar tipo de precio"></span>'+
                '</td>'+
                '<td class="col-md-1 text-center">'+
                  '<span class="glyphicon glyphicon-check text-success" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Activar Cuenta"></span>'+
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

function getPreregistros(){
  var datos = $.ajax({
    url: 'getPreregistros',
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
            '<td class="col-md-4">'+o.perNombre+'</td>'+
            '<td class="col-md-2 text-center">'+o.perNumeroPreregistro+'</td>'+
            '<td class="col-md-2 text-center">'+o.pretNombre+'</td>'+
            '<td class="col-md-1 text-center">'+status+'</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-edit text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar datos"></span>'+
            '</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-list text-primary" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Editar tipo de precio"></span>'+
            '</td>'+
            '<td class="col-md-1 text-center">'+
              '<span class="glyphicon glyphicon-check text-success" id="'+o.perNumeroPreregistro+'" '+ /*Id para usar despues al dar clic*/
              'style="cursor:pointer" title="Activar Cuenta"></span>'+
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

function cambiarPrecioP(){
var editar = $.ajax({
  url: 'cambiarPrecioP',
  data: {
    token:token.val(),
    regU: txtNRegistro.val(),
    tipoPrecio: txtTipoPrecio.val()
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
    getPreregistros();
  }
  alert(resultadoConsulta.message);
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

    txtTipoPrecio.html('');
    if ( res.status === 'OK' ){
       var i = 1;
       tbodyPrecio.html('');
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
        txtTipoPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
			  );
        tbodyPrecio.append(
          '<tr>'+
            '<td rowspan="2">'+o.pretId+'</td>'+
            '<td class="text-center">telefonica</td>'+
            '<td class="text-center">'+o.preTSeis+'</td>'+
            '<td class="text-center">'+o.preTDoce+'</td>'+
            '<td class="text-center">'+o.preTDieciocho+'</td>'+
            '<td rowspan="2"><strong> '+o.pretNombre+'</strong></td>'+
            '<td rowspan="2" class="text-center">'+pred+'</td>'+
            '<td rowspan="2" class="text-center">'+status+'</td>'+

          '</tr>'+
          '<tr>'+
          '<td class="text-center">línea</td>'+
          '<td class="text-center">'+o.preLSeis+'</td>'+
          '<td class="text-center">'+o.preLDoce+'</td>'+
          '<td class="text-center">'+o.preLDieciocho+'</td>'+
          '</tr>'
      );
        i++;
      });
    }else{
      txtTipoPrecio.append(
        '<option value="'+null+'">'+res.message+'</option>'
      );
    }
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

function seleccionarPreregistro(){
  tblPrecio.removeClass('hidden');
  formEditarPC.removeClass('hidden');
  getPrecioTipoActivo();
  buscar.addClass('hidden');
  tblClienteP.addClass('hidden');
  var regUsuario = $(this).attr('id');
  getPersonaEdit(regUsuario);
}

function limpiarDetalles(){
  tblClienteP.removeClass('hidden');
  formEditarPC.addClass('hidden');
  tblPrecio.addClass('hidden');
  buscar.addClass('hidden');
  formDetallesPersona.addClass('hidden');
  txtBuscar.val('');
}

function limpiarEditar(){
  buscar.removeClass('hidden');
  tblClienteP.addClass('hidden');
  formEditarPC.addClass('hidden');
  tblPrecio.addClass('hidden');
  formDetallesPersona.addClass('hidden');
  txtBuscar.val('');
}

$(document).on('ready', function(){
  limpiarEditar();
  getPreregistros();
});

tblClienteP.delegate('.glyphicon-edit', 'click', getPersona);
tblClienteP.delegate('.glyphicon-check ', 'click', activarCliente);
tblClienteP.delegate('.glyphicon-list', 'click', seleccionarPreregistro);
btnGuardarEdit.on('click', editarPersona);
btnRegresar.on('click',limpiarDetalles);
btnCancelarE.on('click', limpiarEditar);
btnGuardarE.on('click', cambiarPrecioP);
btnVerTodos.on('click', getPreregistros);
btnBuscar.on('click', getPreregistro);
$('#liPreregistro').addClass('active');
$('#collapseClie').addClass('in');
