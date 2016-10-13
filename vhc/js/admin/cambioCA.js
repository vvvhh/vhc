var txtActual   = $('#txtActual'),
    txtNueva    = $('#txtNueva'),
    txtNueva2   = $('#txtNueva2'),
    contrah     = $('#contrah'),
    btnGuardar  = $('#btnGuardar'),
    btnCancelar = $('#btnCancelar'),
    pnlCambio   = $('#pnlCambio');

function guardarCambios(){
  var datos = $.ajax({
    url:'cambiarCA',
    data: {
      csenah: contrah.val(),
      new: txtNueva.val(),
      actual: txtActual.val()
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
    limpiar();

  }else{
    alert(res.message);
  }
}

function limpiar(){
  txtActual.val("");
  txtNueva.val("");
  txtNueva2.val("");
}

function comprobar(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnActual').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnActual').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y @ . _ - ';
  }
}
function comprobarNueva(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnNueva').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnNueva').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y @ . _ - ';
  }
}
function comprobarNueva2(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnNueva2').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnNueva2').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y @ . _ - ';
  }
  if(txtNueva2.val() != txtNueva.val()){
    elem.style.background='#FFDDDD';
    document.getElementById('spnNueva2').innerHTML = '<i class="fa fa-exclamation-circle"></i> Los campos de la nueva contraseña deben coincidir.';
  }
  else{
    document.getElementById('spnNueva2').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
}

$(document).on('ready', function(){
  limpiar();
  intActual = document.querySelector("input[name='txtActual']");
  intActual.addEventListener("input", comprobar);
  intNueva = document.querySelector("input[name='txtNueva']");
  intNueva.addEventListener("input", comprobarNueva);
  intNueva2 = document.querySelector("input[name='txtNueva2']");
  intNueva2.addEventListener("input", comprobarNueva2);
});
btnCancelar.on('click', limpiar);
btnGuardar.on('click', guardarCambios);
