/*var valor=sessionStorage.getItem("visita");*/
var btnAceptacion = $('#btnAceptacion');

function alertConfirmar(){
  urlImg="../../img/inicio/Logonombre1.png";
  centrado="text-center";
  centrado="center";

  bootbox.dialog({
    message: "<div align='"+centrado+"'> <img src='"+urlImg+"'><br><h4><strong>Bienvenido(a)</strong></h4><p>Para poder seguir navegando en www.contadoresvh.com deberá aceptar la <strong> Política de Uso y Privacidad </strong></p> </div>",
    closeButton: false,
    animate: true,
    buttons: {
      main: {
        label: "Seguir leyendo la Política de Uso y Privacidad <br>",
        className: "btn-default",
      },
      success: {
        label: "He leído y acepto la Política de Uso y Privacidad",
        //label: "Leer Política de Uso y Privacidad",
        className: "btn-primary",
        callback: function() {
          //location.href="publicos/piePagina/politicaUso";
          sessionStorage.setItem("visita", "1");
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
  $("#modAceptacion").modal({show: false});
}

  /*la definicio de los objetos del menu se realizo de forma global en seccionesVista/barraNavegacionPagina*/
    btnAceptacion.on('click',aceptacionAviso);

    aNosotros.addEventListener("click", verificarAceptacion);
    aServicios.addEventListener("click", verificarAceptacion);
    aInfoteca.addEventListener("click", verificarAceptacion);
    aSitios.addEventListener("click", verificarAceptacion);
    aIntegrate.addEventListener("click", verificarAceptacion);
    aPortafolio.addEventListener("click", verificarAceptacion);
    aContato.addEventListener("click", verificarAceptacion);
/*La definicion de los objetos de pie de pagina desde seccionesVista/piePagina*/
    condicion.addEventListener("click", verificarAceptacion);
    aPrivacidad.addEventListener("click", verificarAceptacion);
    aPolitica.addEventListener("click", verificarAceptacion);
    aMapa.addEventListener("click", verificarAceptacion);
