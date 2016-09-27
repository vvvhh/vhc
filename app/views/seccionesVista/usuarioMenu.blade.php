<div id="usuarioMenu">
      <ul class="nav nav-sidebar colorNav">

        <li>
          <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ ')}}"><strong>
            <h4><i class="fa fa-home"></i>
              Inicio
            </h4>
          </strong></a>
        </li>



        <li data-toggle="collapse" data-target="#collapseConsulta">
          <a class="grisClaro " style="cursor:pointer"><strong>
            <h4><i class="fa fa-tty"></i>
              Consultas
            </h4>
          </strong></a>
              <ul id="collapseConsulta" class="nav nav-sidebar colorNav collapse">
                  <li id="liConsulta">
                      <a class="grisClaro " href="{{ URL::to('usuario/realizarConsultaU')}}">
                        - En Línea
                      </a>
                  </li>
                  <li id="liConsultaTel">
                      <a class="grisClaro " href="{{ URL::to('usuario/realizarTelU')}}">
                        - Teléfonicas
                      </a>
                  </li>
              </ul>
        </li>

          <li data-toggle="collapse" data-target="#collapseContra">
            <a class="grisClaro " style="cursor:pointer"><strong>
              <h4><i class="fa fa-file-text-o"></i>
                 Contratar
              </h4>
            </strong></a>
                <ul id="collapseContra" class="nav nav-sidebar colorNav collapse">
                    <li id="liContraPaquete">
                        <a class="grisClaro " href="{{ URL::to('usuario/contratarU') }}">
                          <i class="fa fa-suitcase"></i> Contratar Servicio
                        </a>
                    </li>
                    <li id="liPagar">
                        <a class="grisClaro " href="{{ URL::to('usuario/pagarContratoU') }}">
                          <i class="fa fa-file-text-o"></i> Contratados
                        </a>
                    </li>
                </ul>
          </li>

          <li class="header" data-toggle="collapse" data-target="#collapseInfo">
            <a class="grisClaro " style="cursor:pointer"><strong>
              <h4><i class="fa fa-list-alt"></i>
                &nbsp;Información
              </h4>
            </strong></a>
            <ul id="collapseInfo" class="nav nav-sidebar colorNav collapse">
                <li id="liCuotas">
                    <a class="grisClaro " href="{{ URL::to('usuario/informacionU') }}">
                      - Mi cuenta
                    </a>
                </li>
            </ul>
          </li>

      </ul>
</div>
