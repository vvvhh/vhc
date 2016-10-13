<nav class="navbar navbar-default navbar-fixed-top" role="navigation"id="barraNav">

    <div class="navbar-header ">
        <img id="imgI" class="img-responsive" src="{{URL::asset('img/logoNombre.png')}}">
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li>{{ HTML::link('/usuario/principalU', Session::get('reg')) }}</li>

      <li class="dropdown">
        <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown">Ayuda <b class="caret"></b></a>
        <ul class="dropdown-menu">

          <li>{{ HTML::link('usuario/ayudaContratar', 'Contratar') }}</li>
          <li class="divider"></li>
          <li>{{ HTML::link('usuario/ayudaPagos', 'Pagos') }}</li>
          <li class="divider"></li>
          <li>{{ HTML::link('usuario/ayudaConsulta', 'Consulta en Línea') }}</li>
          <li class="divider"></li>
          <li>{{ HTML::link('usuario/ayudaLeerConsulta', 'Leer respuesta') }}</li>
          <li class="divider"></li>
          <li>{{ HTML::link('usuario/ayudaConsultaT', 'Consulta Teléfonica') }}</li>
        <!--    <li class="divider"></li>
          <li>{{ HTML::link('usuario/ayudaActualizar', 'Actualizar información') }}</li> -->

        </ul>
       </li>

      <li class="dropdown">
        <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown">{{ Session::get('nombre') }} <b class="caret"></b></a>
        <ul class="dropdown-menu">

          <li>{{ HTML::link('usuario/cambioCU', 'Cambiar contraseña') }}</li>
          <li class="divider"></li>
          <li>{{ HTML::link('usuario/logout', 'Cerrar sesión') }}</li>

        </ul>
       </li>
     </ul>
   </nav>
