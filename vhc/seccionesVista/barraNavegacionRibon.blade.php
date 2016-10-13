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
          <a  href="{{ URL::to('publicos/sobreNosotros')}}">Sobre Nosotros</a>
        </li>
        <li id="navServicios">
          <a  href="{{ URL::to('publicos/servicios')}}">Servicios</a>
        </li>
        <li id="navInfoteca">
          <a href="{{ URL::to('publicos/infoteca')}}">Infoteca</a>
        </li>
        <li id="navInteres">
          <a href="{{ URL::to('publicos/sInteres')}}">Sitios de Interés</a>
        </li>
        <li id="navIntegrate">
          <a href="{{ URL::to('publicos/integrate')}}">Intégrate</a>
        </li>
        <li id="navPortafolio">
          <a href="{{ URL::to('publicos/portafolio')}}">Portafolio</a>
        </li>
        <li id="navContacto">
          <a  href="{{ URL::to('publicos/contacto')}}">Contacto</a>
        </li>

      </ul>
    </div>

      <div class="container">
      <div class="row">
          <div class="footer-ribbon transladarIzquierda2" style="right: 0">
          <!--    <a href="{{ URL::to('publicos/servicios/autodiagnostico?c=0')}}" class="enlaceSimple">  -->
              <a href="{{ URL::to('publicos/servicios/laboral2')}}" class="enlaceSimple"> 
                <h4 class="txtRibbon" style="margin: 0;padding: 5px 10px">
                  <i class="fa fa-pencil-square-o"></i>
                  Elaborar <br>
                  Diagnostico
                </h4  >
              </a>
          </div>
      </div>
  </div>

</nav>

<!--    -->
