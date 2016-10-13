<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="barraNav">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/">
        <img id="imgI" class="img-responsive" src="img/logoNombre.png">
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="navInicio">
          <a  href="/">Inicio</a>
        </li>
        <li id="navNosotros">
          <a  href="publicos/sobreNosotros.php" id="aNosotros">Sobre Nosotros</a>
        </li>
        <li id="navServicios">
          <a  href="publicos/servicios.php" id="aServicios">Servicios</a>
        </li>
        <li id="navInfoteca">
          <a href="publicos/infoteca.php" id="aInfoteca">Infoteca</a>
        </li>
        <li id="navInteres">
          <a href="publicos/sInteres.php" id="aSitios">Sitios de Interés</a>
        </li>
        <li id="navIntegrate">
          <a href="publicos/integrate.php" id="aIntegrate">Intégrate</a>
        </li>
        <li id="navPortafolio">
          <a href="publicos/portafolio.php" id="aPortafolio">Portafolio</a>
        </li>
        <li id="navContacto">
          <a  href="publicos/contacto.php" id="aContato">Contacto</a>
        </li>

      </ul>
    </div>




</nav>

<script type="text/javascript">
  var valor=sessionStorage.getItem("visita");

  if(valor!="1"){
/*    var aNosotros=$('#aNosotros'),
        aServicios=$('#aServicios'),
        aInfoteca=$('#aInfoteca'),
        aSitios=$('#aSitios'),
        aIntegrate=$('#aIntegrate'),
        aPortafolio=$('#aPortafolio'),
        aContato=$('#aContato');

        aNosotros.attr('href', ' ');
        aServicios.attr('href', ' ');
        aInfoteca.attr('href', ' ');
        aSitios.attr('href', ' ');
        aIntegrate.attr('href', ' ');
        aPortafolio.attr('href', ' ');
        aContato.attr('href', ' ');
*/
  }
</script>
