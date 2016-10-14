<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="barraNav">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/">
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
    var aInicio=document.getElementById('aInicio');
        aNosotros=document.getElementById('aNosotros');
        aServicios=document.getElementById('aServicios');
        aInfoteca=document.getElementById('aInfoteca');
        aSitios=document.getElementById('aSitios');
        aIntegrate=document.getElementById('aIntegrate');
        aPortafolio=document.getElementById('aPortafolio');
        aContato=document.getElementById('aContato');
        imgI=document.getElementById('imgI');

    var dominio=window.location.host;
    var absoluta="/vhc/vhc/";                   /*------------------------------------------------------------------*/


    var rInicio="index.php";
    var rNosotros="publicos/sobreNosotros.php"
    var rServicios="publicos/servicios.php"
    var rInfoteca="publicos/infoteca.php"
    var rInteres="publicos/sInteres.php"
    var rIntegrate="publicos/integrate.php"
    var rportafolio="publicos/portafolio.php"
    var rContacto="publicos/contacto.php"
    var rImagen="img/logoNombre.png";

    aInicio.href="http://"+dominio+absoluta+rInicio;
    aNosotros.href="http://"+dominio+absoluta+rNosotros;
    aServicios.href="http://"+dominio+absoluta+rServicios;
    aInfoteca.href="http://"+dominio+absoluta+rInfoteca;
    aSitios.href="http://"+dominio+absoluta+rInteres;
    aIntegrate.href="http://"+dominio+absoluta+rIntegrate;
    aPortafolio.href="http://"+dominio+absoluta+rportafolio;
    aContato.href="http://"+dominio+absoluta+rContacto;

    imgI.src="http://"+dominio+absoluta+rImagen;
    console.log(dominio);



</script>
