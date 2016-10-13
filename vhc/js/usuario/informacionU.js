var idU     = $('#idU'),
regU        = $('#regU'),
editarh     = $('#editarh'),
txtNombreRL = $('#txtNombreRL'),
txtNumeroEP = $('#txtNumeroEP'),
txtDiaEP    = $('#txtDiaEP'),
txtMesEP    = $('#txtMesEP'),
txtAnioEP   = $('#txtAnioEP'),
txtNombreNP = $('#txtNombreNP'),
txtNumeroNP = $('#txtNumeroNP'),
txtLugarEP  = $('#txtLugarEP'),
dvPersonaMoral = $('#dvPersonaMoral');

var txtNombre       = $('#txtNombre'),
    txtNacionalidad = $('#txtNacionalidad'),
    txtRegistro     = $('#txtRegistro'),
    txtCP           = $('#txtCP'),
    txtCalle        = $('#txtCalle'),
    txtNumero       = $('#txtNumero'),
    txtColonia      = $('#txtColonia'),
    txtMunicipio    = $('#txtMunicipio'),
    txtEntidad      = $('#txtEntidad'),
    txtNacionalidad = $('#txtNacionalidad'),
    txtRFC          = $('#txtRFC'),
    txtActividad    = $('#txtActividad'),
    txtTelefono     = $('#txtTelefono'),
    txtCorreo       = $('#txtCorreo');

var btnEditar      = $('#btnEditar'),
    btnGuardarEdit = $('#btnGuardarEdit'),
    btnCancelarEdit= $('#btnCancelarEdit');

function editarActivar(){
  txtNombre.prop( "disabled", false );
  txtRegistro.prop( "disabled", true );
  txtNacionalidad.prop( "disabled", false );
  txtCP.prop( "disabled", false );
  txtCalle.prop( "disabled", false );
  txtNumero.prop( "disabled", false );
  txtColonia.prop( "disabled", false );
  txtMunicipio.prop( "disabled", false );
  txtEntidad.prop( "disabled", false );
  txtNacionalidad.prop( "disabled", false );
  txtRFC.prop( "disabled", false );
  txtActividad.prop( "disabled", false );
  txtTelefono.prop( "disabled", false );
  txtCorreo.prop( "disabled", false );
  btnGuardarEdit.prop( "disabled", false );
  btnCancelarEdit.prop( "disabled", false);

  txtNombreRL.prop( "disabled", false );
  txtNumeroEP.prop( "disabled", false );
  txtDiaEP.prop( "disabled", false );
  txtMesEP.prop( "disabled", false );
  txtAnioEP.prop( "disabled", false );
  txtNombreNP.prop( "disabled", false );
  txtNumeroNP.prop( "disabled", false );
  txtLugarEP.prop("disabled",false);
}

function editarPersona(){
  var datos = $.ajax({
    url:'editarPersona',
    data: {
      idPersona:idU.val(),
      editarh:editarh.val(),
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
      correo: txtCorreo.val()

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
    tituloA = "Actualización correcta";
    textoA = res.message;
    estadoA = "success";
    limpiar();

    swal({
      title: tituloA,
      text: textoA,
      type: estadoA,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Aceptar",
      closeOnConfirm: true
    },
    function(){
      //location.href ="loginCliente";
      limpiar();
    });
  //  alert(res.message);
  //  limpiarDetalles();
  }else{
    tituloA = "No se pudo actualizar la  información.";
    textoA = res.message;
    estadoA = "error";

    swal(tituloA,textoA, estadoA);
    //alert(res.message);
  }
}


function getPersona(){
  /*alert(idU.val());*/
  var datos = $.ajax({
    url:'getPersona',
    data: {
      regU: regU.val()
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
        txtNombre.val(o.perNombre);
        txtNacionalidad.val(o.perNacionalidad),
        txtRegistro.val(o.perNumeroPreregistro);
        txtCP.val(o.perCodigoP),
        txtCalle.val(o.perDCalle);
        txtNumero.val(o.perDNumero);
        txtColonia.val(o.perDColonia);
        txtMunicipio.val(o.perDMunicipio);
        txtEntidad.val(o.perDEstado);
        txtRFC.val(o.perRFC);
        txtActividad.val(o.perActividad);
        txtTelefono.val(o.perTelefono);
        txtCorreo.val(o.perCorreo);
        var tipoPersona = o.perTipoPersona;

        if ( o.perTipoPersona == 1) { /*Persona moral=1*/
          dvPersonaMoral.removeClass('hidden')
          txtNombreRL.val(o.perRepresentanteLegal);
          txtNumeroEP.val(o.perNumeroEP);
          txtDiaEP.val(o.perDiaEP);
          txtMesEP.val(o.perMesEP);
          txtAnioEP.val(o.perAnioEP);
          txtNombreNP.val(o.perNombreNP);
          txtNumeroNP.val(o.perNumeroNP);
          txtLugarEP.val(o.perLugarEP);
        }
        else dvPersonaMoral.addClass('hidden');

      });
      limpiar();

  }else{
    textoA = res.message;
    alert(textoA);
  }

}

function limpiar(){
  txtNombre.prop( "disabled", true );
  txtRegistro.prop( "disabled", true );
  txtNacionalidad.prop( "disabled", true );
  txtCP.prop( "disabled", true );
  txtCalle.prop( "disabled", true );
  txtNumero.prop( "disabled", true );
  txtColonia.prop( "disabled", true );
  txtMunicipio.prop( "disabled", true );
  txtEntidad.prop( "disabled", true );
  txtNacionalidad.prop( "disabled", true );
  txtRFC.prop( "disabled", true );
  txtActividad.prop( "disabled", true );
  txtTelefono.prop( "disabled", true );
  txtCorreo.prop( "disabled", true );
  btnGuardarEdit.prop( "disabled", true );
  btnCancelarEdit.prop( "disabled", true );

  txtNombreRL.prop( "disabled", true );
  txtNumeroEP.prop( "disabled", true );
  txtDiaEP.prop( "disabled", true );
  txtMesEP.prop( "disabled", true );
  txtAnioEP.prop( "disabled", true );
  txtNombreNP.prop( "disabled", true );
  txtNumeroNP.prop( "disabled", true );
  txtLugarEP.prop( "disabled", true );
}

$(document).on('ready', function(){
  getPersona();
});
$('#collapseInfo').addClass('in');

btnEditar.on('click',editarActivar);
btnCancelarEdit.on('click',limpiar);
btnGuardarEdit.on('click', editarPersona);
