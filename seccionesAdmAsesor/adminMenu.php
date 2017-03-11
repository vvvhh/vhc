<div class="menuAdmin">
  <ul class="nav nav-sidebar colorNav">

<!-- Clientes -->
<li class="header">
  <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('admin/') }}"><strong>
    <h4><span class="glyphicon glyphicon-home"></span>
      &nbsp;Inicio
    </h4>
  </strong></a>
</li>
</ul>
</li>
<br>

<div class="menuAdmin">
  <ul class="nav nav-sidebar colorNav">

<!-- Clientes -->
<li class="header" data-toggle="collapse" data-target="#collapseClie">
  <a class="grisClaro " style="cursor:pointer"><strong>
    <h4><span class="glyphicon glyphicon-user"></span>
      &nbsp;Clientes
    </h4>
  </strong></a>
  <ul id="collapseClie" class="nav nav-sidebar collapse colorNav">
      <li id="liAgregarCli">
          <a class="grisClaro " href="{{ URL::to('admin/clienteAgregarA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Agregar
          </a>
      </li>
      <li id="liCliente">
          <a class="grisClaro " href="{{ URL::to('admin/clienteA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Clientes
          </a>
      </li>
      <li id="liPreregistro">
          <a class="grisClaro " href="{{ URL::to('admin/preregistroA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Pre-registros
          </a>
      </li>
  </ul>
</li>
<!-- /Clientes -->

<!-- Consultas -->
<li class="header" data-toggle="collapse" data-target="#collapseConsulta">
  <a class="grisClaro " style="cursor:pointer"><strong>
    <h4><span class="glyphicon glyphicon-tasks"></span>
      &nbsp;Consultas
    </h4>
  </strong></a>
  <ul id="collapseConsulta" class="nav nav-sidebar collapse colorNav">
      <li id="liActivarConsulta">
          <a class="grisClaro " href="{{ URL::to('admin/consultaActivarA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Registrar Pago
          </a>
      </li>
      <li id="liRevisarConsulta">
          <a class="grisClaro " href="{{ URL::to('admin/consultaRecibidaA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            En Línea
          </a>
      </li>
      <li id="liRevisarTel">
          <a class="grisClaro " href="{{ URL::to('admin/consultaTelA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Telefónicas
          </a>
      </li>
      <li id="liGratis">
          <a class="grisClaro " href="{{ URL::to('admin/consultaGratisA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Gratis
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
          <a class="grisClaro " href="{{  URL::to('admin/reporteInscritosA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Personas inscritas
          </a>
      </li>
      <li id="liConsultas">
        <a class="grisClaro " href="{{ URL::to('admin/reporteConsultasA') }}">
          <span class="glyphicon glyphicon-plus"></span> Consultas
        </a>
      </li>
      <li id="liContratos">
        <a class="grisClaro " href="{{ URL::to('admin/reporteContratosA') }}">
          <span class="glyphicon glyphicon-plus"></span> Contratos
        </a>
      </li>
      <li id="liRPagos">
        <a class="grisClaro " href="{{ URL::to('admin/reportePagosA') }}">
          <span class="glyphicon glyphicon-plus"></span> Servicios solicitados
        </a>
      </li>
      <li id="liRPagados">
        <a class="grisClaro " href="{{ URL::to('admin/reportePagadosA') }}">
          <span class="glyphicon glyphicon-plus"></span> Servicios pagados
        </a>
      </li>
      <li id="liRSinPagar">
        <a class="grisClaro " href="{{ URL::to('admin/reporteSinPagarA') }}">
          <span class="glyphicon glyphicon-plus"></span> Servicios sin pagar
        </a>
      </li>
      <li id="liSerCliente">
          <a class="grisClaro " href="{{  URL::to('admin/consultasA') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Servicios-Cliente
          </a>
      </li>


  </ul>
</li>
<li class="header" data-toggle="collapse" data-target="#collapseMensaje">
  <a class="grisClaro " style="cursor:pointer"><strong>
    <h4><i class="fa fa-paper-plane"></i>
      &nbsp;Mensajes
    </h4>
  </strong></a>
  <ul id="collapseMensaje" class="nav nav-sidebar collapse colorNav">
      <li id="liMContacto">
          <a class="grisClaro " href="{{  URL::to('admin/msjContactos') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Mensajes contacto
          </a>
      </li>
  </ul>
</li>

<li class="header" data-toggle="collapse" data-target="#collapseCuestionario">
  <a class="grisClaro " style="cursor:pointer"><strong>
    <h4><i class="fa fa-list-alt"></i>
      &nbsp;Cuestionarios
    </h4>
  </strong></a>
  <ul id="collapseCuestionario" class="nav nav-sidebar collapse colorNav">
      <li id="liCLaboral">
          <a class="grisClaro " href="{{  URL::to('admin/reporteCLaboral') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Cuestionario laboral
          </a>
      </li>
      <li id="liCPLD">
          <a class="grisClaro " href="{{  URL::to('admin/reporteCPLD') }}">
            <span class="glyphicon glyphicon-plus"></span>
            Cuestionario PLD
          </a>
      </li>
  </ul>
</li>



<!-- /Reportes -->

</ul>
</div>
<br>
<div class="menuAdmin">
  <ul class="nav nav-sidebar colorNav">
    <li class="header" data-toggle="collapse" data-target="#collapseAsesor">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class="glyphicon glyphicon-book"></span>
          &nbsp;Asesores
        </h4>
      </strong></a>
      <ul id="collapseAsesor" class="nav nav-sidebar colorNav collapse">
          <li id="liAsesorAgrEdit">
              <a class="grisClaro " href="{{ URL::to('admin/asesorAgrEditA') }}">
                <span class="glyphicon glyphicon-plus"></span> Agregar-Editar
              </a>
          </li>
      </ul>
    </li>



    <li class="header" data-toggle="collapse" data-target="#collapseServicios">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class="glyphicon glyphicon-briefcase"></span>
          &nbsp;Servicios
        </h4>
      </strong></a>
      <ul id="collapseServicios" class="nav nav-sidebar colorNav collapse">
          <li id="liAgregarServicio">
              <a class="grisClaro " href="{{ URL::to('admin/servAgregarA') }}">
                <span class="glyphicon glyphicon-plus"></span> Agregar
              </a>
          </li>
          <li id="liEditarServicios">
              <a class="grisClaro " href="{{ URL::to('admin/servEditarA') }}">
                <span class="glyphicon glyphicon-plus"></span> Editar
              </a>
          </li>
      </ul>
    </li>

    <li class="header" data-toggle="collapse" data-target="#collapseTPrecio">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class="glyphicon glyphicon-star"></span>
          &nbsp;Tipo Precios
        </h4>
      </strong></a>
      <ul id="collapseTPrecio" class="nav nav-sidebar colorNav collapse">
          <li id="liPrecioTipo">
              <a class="grisClaro " href="{{ URL::to('admin/precioTipoA') }}">
                <span class="glyphicon glyphicon-plus"></span> Agregar-Editar
              </a>
          </li>
      </ul>
    </li>


    <li class="header" data-toggle="collapse" data-target="#collapsePrecios">
      <a class="grisClaro " style="cursor:pointer"><strong>
        <h4><span class=" glyphicon glyphicon-usd"></span>
          &nbsp;Precios
        </h4>
      </strong></a>
      <ul id="collapsePrecios" class="nav nav-sidebar colorNav collapse">
          <li id="liPTelefonicas">
              <a class="grisClaro " href="{{ URL::to('admin/preciosTelefonoA') }}">
                <span class="glyphicon glyphicon-plus"></span>
                Telefónicas
              </a>
          </li>
          <li id="liPLinea">
              <a class="grisClaro " href="{{ URL::to('admin/preciosLineaA') }}">
                <span class="glyphicon glyphicon-plus"></span>
                En Línea
              </a>
          </li>
      </ul>
    </li>



    <li class="header" data-toggle="collapse" data-target="#collapseEnlacesJ">
          <a  class="grisClaro " style="cursor:pointer"><strong>
            <h4><i class="fa fa-external-link"></i>
              &nbsp;Enlaces Infoteca
            </h4>
          </strong></a>

            <ul id="collapseEnlacesJ" class="nav nav-sidebar colorNav collapse">
              <li id="enlacesInfo">
                <a href="enlaceLegislacionA.php" class="grisClaro ">
                  Agregar
                </a>
              </li>
          </ul>
        </li>


    </div>
