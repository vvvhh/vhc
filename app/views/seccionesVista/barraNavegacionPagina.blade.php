<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="barraNav">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/">
        <img id="imgI" class="img-responsive" src="{{URL::asset('img/logoNombre.png')}}">
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="navInicio">
          <a  href="{{ URL::to('/')}}">Inicio</a>
        </li>
        <li id="navNosotros">
          <a  href="{{ URL::to('publicos/sobreNosotros')}}" id="aNosotros">Sobre Nosotros</a>
        </li>
        <li id="navServicios">
          <a  href="{{ URL::to('publicos/servicios')}}" id="aServicios">Servicios</a>
        </li>
        <li id="navInfoteca">
          <a href="{{ URL::to('publicos/infoteca')}}" id="aInfoteca">Infoteca</a>
        </li>
        <li id="navInteres">
          <a href="{{ URL::to('publicos/sInteres')}}" id="aSitios">Sitios de Interés</a>
        </li>
        <li id="navIntegrate">
          <a href="{{ URL::to('publicos/integrate')}}" id="aIntegrate">Intégrate</a>
        </li>
        <li id="navPortafolio">
          <a href="{{ URL::to('publicos/portafolio')}}" id="aPortafolio">Portafolio</a>
        </li>
        <li id="navContacto">
          <a  href="{{ URL::to('publicos/contacto')}}" id="aContato">Contacto</a>
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
