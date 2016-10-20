var valor=sessionStorage.getItem("visita");
var txtValDolar=$('#txtValDolar'),
    txtValDolarBM=$('#txtValDolarBM'),
    inpUsd=$('#inpUsd'),
    inpMxn=$('#inpMxn');
  var introducirPeso=0, introducirDolar=0;
var btnConvertir=$('#btnConvertir');
function alertInicio(){

  now = new Date()
  if(valor=="1"){
    valor=1;
  }
  else{

      urlImg="img/inicio/Logonombre1.png";
      centrado="text-center";
      centrado="center";

      bootbox.dialog({
        message: "<div align='"+centrado+"'> <img src='"+urlImg+"'><br><h4><strong>Bienvenido(a)</strong></h4><p>Al visitar este sitio, usted está de acuerdo con la Política de Uso y Privacidad.</p> <p><a href='publicos/piePagina/politicaUso.php'>Leer Política de Uso y Privacidad</a></p> </div>",
        closeButton: false,
        animate: true,
        buttons: {
      /*    main: {
            label: "He leido y acepto la Política de Uso y Privacidad",
            className: "btn-default",
            callback: function() {
              sessionStorage.setItem("visita", "1");
            }

          },*/
          success: {
            label: "He leído y acepto la Política de Uso y Privacidad",
            //label: "Leer Política de Uso y Privacidad",
            className: "btn-primary",
            callback: function() {
              //location.href="publicos/piePagina/politicaUso";
              sessionStorage.setItem("visita", "1");
            /*  var condicion=$('#condicion'),
                  aPrivacidad=$('#aPrivacidad'),
                  aPolitica=$('#aPolitica')
                  aMapa=$('#aMapa');

                  condicion.attr('href', 'publicos/piePagina/propiedadIntelectual');
                  aPrivacidad.attr('href', 'publicos/piePagina/avisoPrivacidadClientes');
                  aPolitica.attr('href', 'publicos/piePagina/politicaUso');
                  aMapa.attr('href', 'publicos/piePagina/mapaSitio');*/
                  verificarAceptadoAvisoNavegacion(); //desde js de inicio
                  verificarAceptadoAvisoPie();
            }
          }
        }
      });
    }
    inpUsd.val('1');
    inpMxn.val(txtValDolar.val());
}

function cambioDolar(){
  var now = new Date();
    if ((now.getDay() == 6) || (now.getDay() == 0)){
      valDolBM=txtValDolarBM.val();
      valDolar=valDolBM.substr(5,6);
      console.log("cambioDolar dol"+valDolar);
    }
    else {
        valDolar=txtValDolar.val();
    }
    cantidadDolar0=inpUsd.val();
    cantidadDolar = cantidadDolar0.replace(',','');
    console.log("cambioDolar "+txtValDolar.val());
    valorPeso=valDolar*cantidadDolar;
    pesoDecimal=valorPeso.toFixed(4);
    inpMxn.val(pesoDecimal);

}

function introDolar(){
  introducirDolar=1;
  introducirPeso=0;
}
function introPeso(){
  introducirPeso=1;
  introducirDolar=0;
}

function cambioPeso(){
  var now = new Date();
  if (now.getDay() == 6){
    valDolBM=txtValDolarBM.val();
    valDolar=valDolBM.substr(5,6);
    console.log("cambioPeso dol: "+valDolar);
  }
  else {
      valDolar=txtValDolar.val();
  }
  cantidadPeso0=inpMxn.val();
  cantidadPeso=cantidadPeso0.replace(',','');
  valorDolar=cantidadPeso/valDolar;
  dolarDecimal=valorDolar.toFixed(4);
  inpUsd.val(dolarDecimal);
}

inpUsd.keydown(function (e){
  if (e.which == 13) {
    dolarPeso();
  }
});

inpMxn.keypress(function (e){
  if (e.which == 13) {
    pesoDolar();
  }
});

function dolarPeso(){
  cambioDolar();
  cambio();
  cambio2();
}

function pesoDolar(){
  cambioPeso();
  cambio2();
  cambio();
}

function cambio(){
  val = inpUsd.val();
  valComas=accounting.formatNumber(val,3);
  inpUsd.val(valComas);
  console.log("desde dolar "+valComas);
}

function cambio2(){
  val2 = inpMxn.val();
  val2Comas = accounting.formatNumber(val2,3);
  inpMxn.val(val2Comas);
  console.log("desde peso"+val2Comas);
}

function convertirBoton(){
  if (introducirPeso == 1) {
    console.log("desdePeso");
    pesoDolar();
  }
  if (introducirDolar == 1) {
    console.log("desde dolar");
    dolarPeso();
  }
}

inpUsd.change(introDolar);
inpMxn.change(introPeso);
btnConvertir.on('click',convertirBoton);
