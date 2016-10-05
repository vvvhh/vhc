var valor=sessionStorage.getItem("visita");
var txtValDolar=$('#txtValDolar'),
    txtValDolarBM=$('#txtValDolarBM'),
    inpUsd=$('#inpUsd'),
    inpMxn=$('#inpMxn');

function alertInicio(){

  now = new Date()
  if(valor=="1"){
    valor=1;
  }
  else{
      //sessionStorage.setItem("visita", "1");
      urlImg="img/inicio/Logonombre1.png";
      centrado="text-center";
      centrado="center";

      bootbox.dialog({
        message: "<div align='"+centrado+"'> <img src='"+urlImg+"'><br><h4><strong>Bienvenido(a)</strong></h4><p>Al visitar este sitio, usted está de acuerdo con la Política de Uso y Privacidad.</p> <p><a href='publicos/piePagina/politicaUso'>Leer Política de Uso y Privacidad</a></p> </div>",
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
              var condicion=$('#condicion'),
                  aPrivacidad=$('#aPrivacidad'),
                  aPolitica=$('#aPolitica')
                  aMapa=$('#aMapa');

                  condicion.attr('href', 'publicos/piePagina/propiedadIntelectual');
                  aPrivacidad.attr('href', 'publicos/piePagina/avisoPrivacidadClientes');
                  aPolitica.attr('href', 'publicos/piePagina/politicaUso');
                  aMapa.attr('href', 'publicos/piePagina/mapaSitio');
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
    if (now.getDay() == 6){
      valDolBM=txtValDolarBM.val();
      valDolar=valDolBM.substr(5,6);
      console.log("dol"+valDolar);
    }
    else {
        valDolar=txtValDolar.val();
    }
    cantidadDolar0=inpUsd.val();
    cantidadDolar = cantidadDolar0.replace(',','');
    console.log(txtValDolar.val());
    valorPeso=valDolar*cantidadDolar;
    pesoDecimal=valorPeso.toFixed(4);
    inpMxn.val(pesoDecimal);
}

function cambioPeso(){
  var now = new Date();
  if (now.getDay() == 6){
    valDolBM=txtValDolarBM.val();
    valDolar=valDolBM.substr(5,6);
    console.log("dol"+valDolar);
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

inpUsd.change(cambioDolar);
inpMxn.change(cambioPeso);

inpUsd.keydown(function (e){
  if (e.which == 13) {
    cambioDolar();
    cambio();
  }
});

function cambio(){
  val = inpUsd.val();
  valComas=accounting.formatNumber(val);
  inpUsd.val(valComas);
}


inpMxn.keypress(function (e){
  if (e.which == 13) {
    cambioPeso();
    cambio2();
  }
});

function cambio2(){
  val2 = inpMxn.val();
  val2Comas =accounting.formatNumber(val2);
  inpMxn.val(val2Comas);
}



/*
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$2' + ',' + '$2');

    }
    return x1 + x2;
}
*/

/*$(document).on('ready', function(){
  alertInicio();
});
*/
