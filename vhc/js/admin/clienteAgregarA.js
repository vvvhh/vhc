var rdioFisica = $('#rdioFisica'),
    rdioMoral  = $('#rdioMoral'),
    formCampos = $('#formCampos'),
    chkAcepto  = $('#chkAcepto'),
    btnContratar = $('#btnContratar'),
    btnCancelar  = $('#btnCancelar');

var txtNombre  = $('#txtNombre'),
    txtCP      = $('#txtCP'),
    txtCalle   = $('#txtCalle'),
    txtNumero  = $('#txtNumero'),
    txtColonia = $('#txtColonia'),
    txtMunicipio = $('#txtMunicipio'),
    txtEntidad = $('#txtEntidad'),
    txtNacionalidad = $('#txtNacionalidad'),
    txtGiro    = $('#txtGiro'),
    txtRFC     = $('#txtRFC'),
    txtTelefono = $('#txtTelefono'),
    txtCorreo  = $('#txtCorreo'),
    txtTipoPrecio = $('#txtTipoPrecio'),
    lblNombreRepresentate = $('#lblNombreRepresentate');

var nombreMoral = $('#nombreMoral'),
    numeroEP    = $('#numeroEP'),
    diaEP       = $('#diaEP'),
    mesEP       = $('#mesEP'),
    anioEP      = $('#anioEP'),
    nombreNP    = $('#nombreNP'),
    numeroNP    = $('#numeroNP'),
    lugarEP     = $('#lugarEP'),
    labelFecha  = $('#labelFecha'),
    nacionalidad=$('#nacionalidad');
var txtNumeroEP =$('#txtNumeroEP'),
    txtNombreMoral = $('#txtNombreMoral'),
    slctDia     = $('#slctDia'),
    slctMes     = $('#slctMes'),
    txtAnioEP   = $('#txtAnioEP'),
    txtNombreNP = $('#txtNombreNP'),
    txtLugar    = $('#txtLugar'),
    txtNumeroNP = $('#txtNumeroNP');

var slctSolicitar = $('#slctSolicitar'),
    slctPaquete   = $('#slctPaquete');

var token =$('#token');

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
      $.each(res.data, function(k,o){
        txtTipoPrecio.append(
          '<option value="'+o.pretId+'">'+o.pretNombre+'</option>'
			  );
        i++;
      });
    }else{
      txtTipoPrecio.append(
        '<option value="'+null+'">'+res.message+'</option>'
      );
    }
}

function limpiar(){
  txtNombreMoral.val('');
  txtNombre.val('');
  txtCP.val('');
  txtCalle.val('');
  txtNumero.val('');
  txtColonia.val('');
  txtMunicipio.val('');
  txtEntidad.val('');
  txtNacionalidad.val('');
  txtGiro.val('');
  txtRFC.val('');
  txtTelefono.val('');
  txtCorreo.val('');
  txtNumeroEP.val('');
  slctDia.val('');
  slctMes.val('');
  txtAnioEP.val('');
  txtLugar.val('');
  txtNombreNP.val('');
  txtNumeroNP.val('');
  chkAcepto.prop( "checked", false );
}

function pFisica(){ /*Elije radio para persona fisica*/
  if(rdioFisica.is(':checked')) {
            formCampos.removeClass('hidden');
            limpiar();

            nombreMoral.addClass('hidden');
            numeroEP.addClass('hidden');
            diaEP.addClass('hidden');
            mesEP.addClass('hidden');
            anioEP.addClass('hidden');
            nombreNP.addClass('hidden');
            numeroNP.addClass('hidden');
            labelFecha.addClass('hidden');
            lugarEP.addClass('hidden');
            lblNombreRepresentate.text("*Nombre(s) y apellidos:");
            btnContratar.removeClass('hidden');
            btnCancelar.removeClass('hidden');
            nacionalidad.removeClass('hidden');
        } else {
            alert("No está activado");
        }
}

function pMoral(){  /*elije radio para persona moral*/
  if(rdioMoral.is(':checked')) {
            formCampos.removeClass('hidden');
            limpiar();

            /*txtNombreMoral.attr('required',true); //obligatorio ingresar nombre persona moral*/
            nombreMoral.removeClass('hidden');
            numeroEP.removeClass('hidden');
            diaEP.removeClass('hidden');
            mesEP.removeClass('hidden');
            anioEP.removeClass('hidden');
            nombreNP.removeClass('hidden');
            numeroNP.removeClass('hidden');
            labelFecha.removeClass('hidden');
            lugarEP.removeClass('hidden');
            lblNombreRepresentate.text("*Nombre del representante legal:");
            btnContratar.removeClass('hidden');
            btnCancelar.removeClass('hidden');
            nacionalidad.addClass('hidden');
        } else {
            alert("No está activado");
        }
}

function pasarMayusculas(){
  var valorRFC, RFCMayuscula;
  valorRFC = txtRFC.val();
  RFCMayuscula = valorRFC.toUpperCase();
  txtRFC.val(RFCMayuscula);
}

function registrarPersona(){
  if(rdioFisica.is(':checked')) {                    /*PERSONAS FISICAS*/
    if (!validarFisico())
      return false;
    if (!validarContenidoAmbos())
      return false;

      var datos = $.ajax({
        url:'ingresoPerFisicaAdm',
        data: {
          nombre: txtNombre.val(),
          cp: txtCP.val(),
          calle: txtCalle.val(),
          numero: txtNumero.val(),
          colonia: txtColonia.val(),
          municipio: txtMunicipio.val(),
          entidad: txtEntidad.val(),
          nacionalidad: txtNacionalidad.val(),
          rfc: txtRFC.val(),
          actividad: txtGiro.val(),
          telefono: txtTelefono.val(),
          correo: txtCorreo.val(),
          condicionesServicio: chkAcepto.prop( "checked" ),
          tipoPrecio: txtTipoPrecio.val(),
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
        alert(res.message);

        location.href ="pdfRegistro?c="+txtCorreo.val();
        limpiar();

      }else{
        alert(res.message);
      }
  }

  if(rdioMoral.is(':checked')) {  /*PERSONAS MORALES*/
      if (!validarMoral())
        return false;
      if(!validarContenidoAmbos())
        return false;

      var datos = $.ajax({
        url:'ingresoPerMoralAdm',
        data: {
          nombreMoral: txtNombreMoral.val(),
          nombreRepresentanteLegar: txtNombre.val(),
          cp: txtCP.val(),
          calle: txtCalle.val(),
          numero: txtNumero.val(),
          colonia: txtColonia.val(),
          municipio: txtMunicipio.val(),
          entidad: txtEntidad.val(),
          nacionalidad: txtNacionalidad.val(),
          rfc: txtRFC.val(),
          actividad: txtGiro.val(),
          diaEP: slctDia.val(),
          numeroEP: txtNumeroEP.val(),
          mesEP: slctMes.val(),
          anioEP: txtAnioEP.val(),
          nombreNP: txtNombreNP.val(),
          numeroNP: txtNumeroNP.val(),
          lugarEP: txtLugar.val(),
          telefono: txtTelefono.val(),
          correo: txtCorreo.val(),
          tipoPrecio: txtTipoPrecio.val(),
          condicionesServicio: chkAcepto.prop( "checked" ),
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

      var tituloA="",textoA="",estadoA="";
      if ( res.status === 'OK' ){
        alert(res.message);
        location.href ="pdfRegistro?c="+txtCorreo.val();
        limpiar();

      }else{
        alert(res.message);
      }
  }
}

function validarContenidoAmbos(){ /*Datos que son para ambos*/
  if((txtCP.val() == '')||(txtCP.val() == ' ')||(txtCP.val() == null)){
    txtCalle.focus();
    alert("Favor de ingresar el código postal del domicilio fiscal.");
    return false;
  }
  if((txtCalle.val() == '')||(txtCalle.val() == ' ')||(txtCalle.val() == null)){
    txtCalle.focus();
    alert("Favor de ingresar la calle del domicilio fiscal.");
    return false;
  }
  if((txtNumero.val() == '')||(txtNumero.val() == ' ')||(txtNumero.val() == null)){
    txtNumero.focus();
    alert("Favor de ingresar el número del domicilio fiscal.");
    return false;
  }
  if((txtColonia.val() == '')||(txtColonia.val() == ' ')||(txtColonia.val() == null)){
    txtColonia.focus();
    alert("Favor de ingresar la colonia del domicilio fiscal.");
    return false;
  }
  if((txtMunicipio.val() == '')||(txtMunicipio.val() == ' ')||(txtMunicipio.val() == null)){
    txtMunicipio.focus();
    alert("Favor de ingresar el minicipio del domicilio fiscal.");
    return false;
  }
  if((txtEntidad.val() == '')||(txtEntidad.val() == ' ')||(txtEntidad.val() == null)){
    txtEntidad.focus();
    alert("Favor de ingresar la entidad federativa del domicilio fiscal.");
    return false;
  }
  /*if((txtNacionalidad.val() == '')||(txtNacionalidad.val() == ' ')||(txtNacionalidad.val() == null)){
    txtNacionalidad.focus();
    alert("Favor de ingresar nacionalidad.");
    return false;
  }*/
  if((txtRFC.val() == '')||(txtRFC.val() == ' ')||(txtRFC.val() == null)){
    txtRFC.focus();
    alert("Favor de ingresar RFC.");
    return false;
  }
  if((txtGiro.val() == '')||(txtGiro.val() == ' ')||(txtGiro.val() == null)){
    txtGiro.focus();
    alert("Favor de ingresar la actividad o giro.");
    return false;
  }
  if((txtTelefono.val() == '')||(txtTelefono.val() == ' ')||(txtTelefono.val() == null)){
    txtTelefono.focus();
    alert("Favor de ingresar telefono.");
    return false;
  }
  if((txtCorreo.val() == '')||(txtCorreo.val() == ' ')||(txtCorreo.val() == null)){
    txtCorreo.focus();
    alert("Favor de ingresar correo electrónico.");
    return false;
  }
  if((txtTipoPrecio.val() == '')||(txtTipoPrecio.val() == ' ')||(txtTipoPrecio.val() == null)){
    txtCorreo.focus();
    alert("Favor de seleccionar el tipo de precio a asignar.");
    return false;
  }
  if (chkAcepto.is(':checked')){
    return true;
  }
  else{
    chkAcepto.focus();
    alert("Debe aceptar las políticas de uso y privacidad.","Para hacer uso de este sitio web usted debera aceptar las políticas de uso y privacidad.", "warning");
    return false;
  }
}
function validarFisico(){
  if((txtNombre.val() == '')||(txtNombre.val() == ' ')||(txtNombre.val() == null)){
    txtNombre.focus();
    alert("Favor de ingresar nombre.");
    return false;
  }
  if((txtNacionalidad.val() == '')||(txtNacionalidad.val() == ' ')||(txtNacionalidad.val() == null)){
    txtNacionalidad.focus();
    alert("Favor de ingresar nacionalidad.");
    return false;
  }
  return true;
}
function validarMoral(){
  if((txtNombreMoral.val() == '')||(txtNombreMoral.val() == ' ')||(txtNombreMoral.val() == null)){
    txtNombreMoral.focus();
    alert("Favor de ingresar nombre de la persona moral.");
    return false;
  }
  if((txtNombre.val() == '')||(txtNombre.val() == ' ')||(txtNombre.val() == null)){
    txtNombre.focus();
    alert("Favor de ingresar nombre del representante legal.");
    return false;
  }
  if((txtNumeroEP.val() == '')||(txtNumeroEP.val() == ' ')||(txtNumeroEP.val() == null)){
    txtNumeroEP.focus();
    alert("Favor de ingresar el número de Escritura Pública.");
    return false;
  }
  if((slctDia.val() == '')||(slctDia.val() == ' ')||(slctDia.val() == null)){
    slctDia.focus();
    alert("Favor seleccionar un día");
    return false;
  }
  if((slctMes.val() == '')||(slctMes.val() == ' ')||(slctMes.val() == null)){
    slctMes.focus();
    alert("Favor seleccionar un mes");
    return false;
  }
  if((txtAnioEP.val() == '')||(txtAnioEP.val() == ' ')||(txtAnioEP.val() == null)){
    txtAnioEP.focus();
    alert("Favor seleccionar un año");
    return false;
  }
  if((txtNombreNP.val() == '')||(txtNombreNP.val() == ' ')||(txtNombreNP.val() == null)){
    txtNombreNP.focus();
    alert("Favor de ingresar el nombre del notario público");
    return false;
  }
  if((txtNumeroNP.val() == '')||(txtNumeroNP.val() == ' ')||(txtNumeroNP.val() == null)){
    txtNumeroNP.focus();
    alert("Favor de ingresar el número del notario público");
    return false;
  }
  if((txtLugar.val() == '')||(txtLugar.val() == ' ')||(txtLugar.val() == null)){
    txtLugar.focus();
    alert("Favor de ingresar el lugar");
    return false;
  }
  return true;
}

$(document).on('ready', function(){
  getPrecioTipoActivo();
  limpiar();
});

rdioFisica.on('click', pFisica);
rdioMoral.on('click', pMoral);
btnContratar.on('click',registrarPersona);
btnCancelar.on('click',limpiar);
