<div id="usuarioMenu">
      <ul class="nav nav-sidebar colorNav">

        <li>
          <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ ')}}"><strong>
            <h5><i class="fa fa-home"></i>
              &nbsp;Inicio
            </h5>
          </strong></a>
        </li>
        <li data-toggle="collapse" data-target="#collapseConsulta" id="liContratar">
          <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaContratar')}}"><strong>
            <h5><i class="fa fa-question-circle"></i>
              &nbsp;Contratar
            </h5>
          </strong></a>
        </li>

          <li data-toggle="collapse" data-target="#collapseContra" id="liPagos">
            <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaPagos')}}"><strong>
              <h5><i class="fa fa-question-circle"></i>
                &nbsp;Pagos
              </h5>
            </strong></a>
          </li>

          <li class="header" data-toggle="collapse" data-target="#collapseInfo" id="liLinea">
            <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaConsulta')}}"><strong>
              <h5><i class="fa fa-question-circle"></i>
                &nbsp;Realizar Consulta en Línea
              </h5>
            </strong></a>
          </li>
          <li class="header" data-toggle="collapse" data-target="#collapseInfo" id="liLeer">
            <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaLeerConsulta')}}"><strong>
              <h5><i class="fa fa-question-circle"></i>
                &nbsp;Leer respuesta
              </h5>
            </strong></a>
          </li>
          <li class="header" data-toggle="collapse" data-target="#collapseInfo" id="liTelefonica">
            <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaConsultaT')}}"><strong>
              <h5><i class="fa fa-question-circle"></i>
                &nbsp;Realizar Consulta Teléfonica
              </h5>
            </strong></a>
          </li>
        <!--    <li class="header" data-toggle="collapse" data-target="#collapseInfo"id="liActualizar">
            <a class="grisClaro " style="cursor:pointer" href="{{ URL::to('usuario/ayudaActualizar')}}"><strong>
              <h5><i class="fa fa-question-circle"></i>
                &nbsp;Actualizar información
              </h5>
            </strong></a>
          </li> -->
      </ul>
</div>
