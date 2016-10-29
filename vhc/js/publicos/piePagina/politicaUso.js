/*var valor=sessionStorage.getItem("visita");*/
var btnAceptacion = $('#btnAceptacion');

function alertConfirmar(){
  urlImg="../../img/inicio/Logonombre1.png";
  centrado="text-center";
  centrado="center";

  bootbox.dialog({
    message: "<div align='"+centrado+"'> <img src='"+urlImg+"'><br><h4><strong>Bienvenido(a)</strong></h4><p>Para poder seguir navegando en www.contadoresvh.com deberá aceptar la Leer Política de Uso y Privacidad</p> </div>",
    closeButton: false,
    animate: true,
    buttons: {
      main: {
        label: "Seguir leyendo",
        className: "btn-default",
      /*  callback: function() {
          sessionStorage.setItem("visita", "1");
        }*/

      },
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

function alertConfirmar_(){
  $("#modAceptacion").modal({show: true});
}

function verificarAceptacion(){
  valor=sessionStorage.getItem("visita");
  if (valor != 1) {
      alertConfirmar();
  }
}

function aceptacionAviso(){
/*  console.log("boton aceptar");
  sessionStorage.setItem("visita", "1");
  valor=sessionStorage.getItem("visita");
  console.log(valor);
  verificarAceptadoAvisoNavegacion(); //desde js de inicio
  verificarAceptadoAvisoPie();
  */
  $("#modAceptacion").modal({show: false});
}

/*aInicio.addEventListener("click", myFunction);*/
  /*la definicio de los objetos del menu se realizo de forma global en seccionesVista/barraNavegacionPagina*/
  btnAceptacion.on('click',aceptacionAviso);
    aNosotros.addEventListener("click", verificarAceptacion);
    aServicios.addEventListener("click", verificarAceptacion);
    aInfoteca.addEventListener("click", verificarAceptacion);
    aSitios.addEventListener("click", verificarAceptacion);
    aIntegrate.addEventListener("click", verificarAceptacion);
    aPortafolio.addEventListener("click", verificarAceptacion);
    aContato.addEventListener("click", verificarAceptacion);
