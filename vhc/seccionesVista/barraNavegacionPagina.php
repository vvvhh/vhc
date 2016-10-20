<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="barraNav">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="">
        <img id="imgI" class="img-responsive" src="">
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="navInicio">
          <a  href="#" id="aInicio">Inicio</a>
        </li>
        <li id="navNosotros">

          <a   href="#"id="aNosotros">Sobre nosotros</a>
          <!--  <a  href="publicos/sobreNosotros.php" id="aNosotros">Sobre Nosotros</a>
          -->
        </li>
        <li id="navServicios">
          <a   href="#"  id="aServicios">Servicios</a>
        </li>
        <li id="navInfoteca">
          <a  href="#" id="aInfoteca">Infoteca</a>
        </li>
        <li id="navInteres">
          <a  href="#" id="aSitios">Sitios de Interés</a>
        </li>
        <li id="navIntegrate">
          <a href="#"  id="aIntegrate">Intégrate</a>
        </li>
        <li id="navPortafolio">
          <a  href="#" id="aPortafolio">Portafolio</a>
        </li>
        <li id="navContacto">
          <a   href="#" id="aContato">Contacto</a>
        </li>

      </ul>
    </div>




</nav>

<script type="text/javascript">
function verificarAceptadoAviso(){
  var valor=sessionStorage.getItem("visita");

  var aInicio=document.getElementById('aInicio'),
      aNosotros=document.getElementById('aNosotros'),
      aServicios=document.getElementById('aServicios'),
      aInfoteca=document.getElementById('aInfoteca'),
      aSitios=document.getElementById('aSitios'),
      aIntegrate=document.getElementById('aIntegrate'),
      aPortafolio=document.getElementById('aPortafolio'),
      aContato=document.getElementById('aContato'),
      imgI=document.getElementById('imgI');

  var rInicio="index.php",
      rNosotros="publicos/sobreNosotros.php",
      rServicios="publicos/servicios.php",
      rInfoteca="publicos/infoteca.php",
      rInteres="publicos/sInteres.php",
      rIntegrate="publicos/integrate.php",
      rportafolio="publicos/portafolio.php",
      rContacto="publicos/contacto.php",
      rImagen="img/logoNombre.png";

  var dominio=window.location.host;
  var absoluta="/vhc/vhc/";                   /*------------------------------------------------------------------*/

  aInicio.href="http://"+dominio+absoluta+rInicio;
  imgI.src="http://"+dominio+absoluta+rImagen;

  console.log("sesion:"+valor);
  if((valor=="1") && (valor!=null)){

    aNosotros.href="http://"+dominio+absoluta+rNosotros;
    aServicios.href="http://"+dominio+absoluta+rServicios;
    aInfoteca.href="http://"+dominio+absoluta+rInfoteca;
    aSitios.href="http://"+dominio+absoluta+rInteres;
    aIntegrate.href="http://"+dominio+absoluta+rIntegrate;
    aPortafolio.href="http://"+dominio+absoluta+rportafolio;
    aContato.href="http://"+dominio+absoluta+rContacto;


    console.log(dominio);

  }
  else {
    aNosotros.href="#";
    aServicios.href="#";
    aInfoteca.href="#";
    aSitios.href="#";
    aIntegrate.href="#";
    aPortafolio.href="#";
    aContato.href="#";
  }

}

verificarAceptadoAviso();

</script>
