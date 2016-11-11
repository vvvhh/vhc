<div class="menuAdmin">
  <ul class="nav nav-sidebar colorNav">
    <li>
      <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('asesor/ ')}}"><strong>
        <h4><span class="glyphicon glyphicon-home"></span>
          Inicio
        </h4>
      </strong></a>
    </li>
    <li class="header" data-toggle="collapse" data-target="#collapseConsulta">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class="glyphicon glyphicon-tasks"></span>
          &nbsp;Consultas
        </h4>
      </strong></a>
      <ul id="collapseConsulta" class="nav nav-sidebar collapse colorNav">
          <!--  <li id="liActivarConsulta">
              <a class="grisClaro " href="{{ URL::to('admin/consultasA') }}">
                <span class="glyphicon glyphicon-plus"></span>
                Activar consulta
              </a>
          </li>-->
          <li id="liRevisarConsulta">
              <a class="grisClaro " href="{{ URL::to('asesor/consultaRecibidaAs') }}">
                - En Línea
              </a>
          </li>
          <li id="liRevisarTel">
              <a class="grisClaro " href="{{ URL::to('asesor/consultaTelAs') }}">
                - Telefónicas
              </a>
          </li>
          <li id="liGratis">
              <a class="grisClaro " href="{{ URL::to('asesor/consultaGratisAs') }}">
                - Gratis
              </a>
          </li>
      </ul>
    </li>
    <!-- /Consultas -->
    <!-- Reportes -->
    <li class="header" data-toggle="collapse" data-target="#collapseReporte">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class="glyphicon glyphicon-file"></span>
          &nbsp;Reportes
        </h4>
      </strong></a>
      <ul id="collapseReporte" class="nav nav-sidebar collapse colorNav">
          <li id="liPInscritas">
              <a class="grisClaro " href="{{  URL::to('asesor/reporteInscritosAs') }}">
                - Personas inscritas
              </a>
          </li>
          <li id="liConsultas">
            <a class="grisClaro " href="{{ URL::to('asesor/reporteConsultasAs') }}">
              - Consultas
            </a>
          </li>
          <li id="liContratos">
            <a class="grisClaro " href="{{ URL::to('asesor/reporteContratosAs') }}">
              - Contratos
            </a>
          </li>
          <li id="liRPagos">
            <a class="grisClaro " href="{{ URL::to('asesor/reportePagosAs') }}">
              - Servicios solicitados
            </a>
          </li>
          <li id="liRPagados">
            <a class="grisClaro " href="{{ URL::to('asesor/reportePagadosAs') }}">
              - Servicios pagados
            </a>
          </li>
          <li id="liRSinPagar">
            <a class="grisClaro " href="{{ URL::to('asesor/reporteSinPagarAs') }}">
              - Servicios sin pagar
            </a>
          </li>
          <li id="liSerCliente">
              <a class="grisClaro " href="{{  URL::to('asesor/consultasAs') }}">
                - Servicios-Cliente
              </a>
          </li>
      </ul>
    </li>

    <li class="header" id="libusqueda">
      <a href="{{  URL::to('asesor/busquedaAs') }}" class="grisClaro " style="cursor:pointer"><strong>
        <h4><i class="fa fa-search"></i>
          &nbsp;Buscar respuestas
        </h4>
      </strong></a>

    </li>
    <!-- /Reportes -->
  </ul>
</div>
