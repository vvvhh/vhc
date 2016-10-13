var rdioFisica = $('#rdioFisica'),
    rdioMoral  = $('#rdioMoral'),
    formCampos = $('#formCampos'),
    chkAcepto  = $('#chkAcepto'),
    btnContratar = $('#btnContratar');

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

var contratarh =$('#contratarh');

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
            nacionalidad.removeClass('hidden');
            lblNombreRepresentate.text("*Nombre(s) y apellidos:");
            btnContratar.removeClass('hidden');
        } else {
            alert("No está activado");
        }
}

function pMoral(){  /*elije radio para persona moral*/
  if(rdioMoral.is(':checked')) {
            formCampos.removeClass('hidden');
            limpiar();
            nombreMoral.removeClass('hidden');
            numeroEP.removeClass('hidden');
            diaEP.removeClass('hidden');
            mesEP.removeClass('hidden');
            anioEP.removeClass('hidden');
            nombreNP.removeClass('hidden');
            numeroNP.removeClass('hidden');
            labelFecha.removeClass('hidden');
            lugarEP.removeClass('hidden');
            nacionalidad.addClass('hidden');
            lblNombreRepresentate.text("*Nombre del representante legal:");
            btnContratar.removeClass('hidden');
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
        url:'ingresoPersonaFisica',
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
          contratarh: contratarh.val()
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
        tituloA = "Gracias por registrarse como Cliente.";
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
          location.href ="loginCliente";
        });

      }else{
        tituloA = "No se pudo realizar el registro.";
        textoA = res.message;
        estadoA = "error";

        swal(tituloA,textoA, estadoA);
      }
  }

  if(rdioMoral.is(':checked')) {  /*PERSONAS MORALES*/
      if (!validarMoral())
        return false;
      if(!validarContenidoAmbos())
        return false;

      var datos = $.ajax({
        url:'ingresoPersonaMoral',
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
          condicionesServicio: chkAcepto.prop( "checked" ),
          contratarh: contratarh.val()
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
        tituloA = "Gracias por registrarse como Cliente.";
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
          location.href ="loginCliente";
        });

      }else{
        tituloA = "No se pudo realizar el registro.";
        textoA = res.message;
        estadoA = "error";

        swal(tituloA,textoA, estadoA);
      }
  }
}


function validarContenidoAmbos(){
  if((txtCP.val() == '')||(txtCP.val() == ' ')||(txtCP.val() == null)){
    txtCalle.focus();
    swal("","Favor de ingresar el código postal del domicilio fiscal.", "warning");
    return false;
  }

  if((txtCalle.val() == '')||(txtCalle.val() == ' ')||(txtCalle.val() == null)){
    txtCalle.focus();
    swal("","Favor de ingresar la calle del domicilio fiscal.", "warning");
    return false;
  }
  if((txtNumero.val() == '')||(txtNumero.val() == ' ')||(txtNumero.val() == null)){
    txtNumero.focus();
    swal("","Favor de ingresar el número del domicilio fiscal.", "warning");
    return false;
  }
  if((txtColonia.val() == '')||(txtColonia.val() == ' ')||(txtColonia.val() == null)){
    txtColonia.focus();
    swal("","Favor de ingresar la colonia del domicilio fiscal.", "warning");
    return false;
  }
  if((txtMunicipio.val() == '')||(txtMunicipio.val() == ' ')||(txtMunicipio.val() == null)){
    txtMunicipio.focus();
    swal("","Favor de ingresar el minicipio del domicilio fiscal.", "warning");
    return false;
  }
  if((txtEntidad.val() == '')||(txtEntidad.val() == ' ')||(txtEntidad.val() == null)){
    txtEntidad.focus();
    swal("","Favor de ingresar la entidad federativa del domicilio fiscal.", "warning");
    return false;
  }
  /*if((txtNacionalidad.val() == '')||(txtNacionalidad.val() == ' ')||(txtNacionalidad.val() == null)){
    txtNacionalidad.focus();
    swal("","Favor de ingresar nacionalidad.", "warning");
    return false;
  }*/
  if((txtRFC.val() == '')||(txtRFC.val() == ' ')||(txtRFC.val() == null)){
    txtRFC.focus();
    swal("","Favor de ingresar RFC.", "warning");
    return false;
  }
  if((txtGiro.val() == '')||(txtGiro.val() == ' ')||(txtGiro.val() == null)){
    txtGiro.focus();
    swal("","Favor de ingresar la actividad o giro.", "warning");
    return false;
  }
  if((txtTelefono.val() == '')||(txtTelefono.val() == ' ')||(txtTelefono.val() == null)){
    txtTelefono.focus();
    swal("","Favor de ingresar telefono.", "warning");
    return false;
  }
  if((txtCorreo.val() == '')||(txtCorreo.val() == ' ')||(txtCorreo.val() == null)){
    txtCorreo.focus();
    swal("","Favor de ingresar correo electrónico.", "warning");
    return false;
  }
  if (chkAcepto.is(':checked')){
    return true;
  }
  else{
    chkAcepto.focus();
    swal("Debe aceptar las políticas de uso y privacidad.","Para hacer uso de este sitio web usted debera aceptar las políticas de uso y privacidad.", "warning");
    return false;
  }
}
function validarFisico(){
  if((txtNombre.val() == '')||(txtNombre.val() == ' ')||(txtNombre.val() == null)){
    txtNombre.focus();
    swal("","Favor de ingresar nombre.", "warning");
    return false;
  }
  if((txtNacionalidad.val() == '')||(txtNacionalidad.val() == ' ')||(txtNacionalidad.val() == null)){
    txtNacionalidad.focus();
    swal("","Favor de ingresar nacionalidad.", "warning");
    return false;
  }
  return true;
}
function validarMoral(){
  if((txtNombreMoral.val() == '')||(txtNombreMoral.val() == ' ')||(txtNombreMoral.val() == null)){
    txtNombreMoral.focus();
    swal("","Favor de ingresar nombre de la persona moral.", "warning");
    return false;
  }
  if((txtNombre.val() == '')||(txtNombre.val() == ' ')||(txtNombre.val() == null)){
    txtNombre.focus();
    swal("","Favor de ingresar nombre del representante legal.", "warning");
    return false;
  }
  if((txtNumeroEP.val() == '')||(txtNumeroEP.val() == ' ')||(txtNumeroEP.val() == null)){
    txtNumeroEP.focus();
    swal("","Favor de ingresar el número de Escritura Pública.", "warning");
    return false;
  }
  if((slctDia.val() == '')||(slctDia.val() == ' ')||(slctDia.val() == null)){
    slctDia.focus();
    swal("","Favor seleccionar un día", "warning");
    return false;
  }
  if((slctMes.val() == '')||(slctMes.val() == ' ')||(slctMes.val() == null)){
    slctMes.focus();
    swal("","Favor seleccionar un mes", "warning");
    return false;
  }
  if((txtAnioEP.val() == '')||(txtAnioEP.val() == ' ')||(txtAnioEP.val() == null)){
    txtAnioEP.focus();
    swal("","Favor seleccionar un año", "warning");
    return false;
  }
  if((txtNombreNP.val() == '')||(txtNombreNP.val() == ' ')||(txtNombreNP.val() == null)){
    txtNombreNP.focus();
    swal("","Favor de ingresar el nombre del notario público", "warning");
    return false;
  }
  if((txtNumeroNP.val() == '')||(txtNumeroNP.val() == ' ')||(txtNumeroNP.val() == null)){
    txtNumeroNP.focus();
    swal("","Favor de ingresar el número del notario público", "warning");
    return false;
  }
  if((txtLugar.val() == '')||(txtLugar.val() == ' ')||(txtLugar.val() == null)){
    txtLugar.focus();
    swal("","Favor de ingresar el lugar", "warning");
    return false;
  }
  return true;
}

rdioFisica.on('click', pFisica);
rdioMoral.on('click', pMoral);
btnContratar.on('click',registrarPersona);
