@extends('layoutIntegrate')

@section('head')
  <meta name="description" content="Lista de las vacates diponibles dentro de la firma. ">
  <meta name="keywords" content="vacantes, desarrollo profesional, desarrollo personal" />
@stop

@section('title')
  Vacantes | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<style >
.panel-default > .panel-heading {
  color: #fff;
  background-color: #263238;
  border-color: #263238;
}
.panel-default{
  color: #fff;
  background-color: #263238;
  border-color: #263238;
}
 .liInfoteca{
    padding: 5px;
 }
 .badge-info{
   background: #2196f3;
   color #fff;
 }

 </style>
    <div class="well transparenteClaroTxt animacionContenido">
      <!-- vacEmpresa vacante para empresa privada
          vacDetalle vacante para VHC, ver detalle
          sinVacante sin vacante, envia a postular
        -->
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="grisObscuro"><strong> Vacantes</strong></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12">

              <br>
            <h3>Vázquez Hernández Contadores, S.C.</h3>

          <div class="panel-group" id="accordion">

          <div class="panel panel-default">
            <li class="enlaceSimple2 liIntegrate" data-toggle="collapse" data-parent="#accordion" href="#vac1">
            <div class="panel-heading">

                <div class="row">
                  <div class="col-md-11">
                    <h4 class="panel-title">
                      Contabilidad
                    </h4>
                  </div>
                  <div class="col-md-1">
                      <span class="badge badge-info" align="right" title="Número de vacantes">2</span>
                  </div>
                </div>


            </div>
          </li>
            <div id="vac1"  class="panel-collapse collapse">

              <ul class="" style="list-style-type: none">

                        <li id="9" class="liInfoteca sinVacante"  style="cursor:pointer;">
                                <p>
                                   - Gerente
                                <!--     <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                                -->
                                </p>
                        </li>

                       <li id="0" class="liInfoteca sinVacante"  style="cursor:pointer;">
                               <p>
                                  - Senior
                                <!--    <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                                -->
                               </p>
                       </li>
                         <li class="divider"></li>
                       <li id="1" class="liInfoteca vacDetalle"  style="cursor:pointer;">
                             <p>
                               - Semi senior
                               <span class="badge badge-info" align="right" title="Número de vacantes">1</span>
                             </p>
                       </li>
                         <li class="divider"></li>
                       <li id="2" class="liInfoteca vacDetalle"  style="cursor:pointer;">
                             <p>
                               - Asistente
                               <span class="badge badge-info" align="right" title="Número de vacantes">1</span>
                             </p>
                       </li>

                   </ul>


            </div>
          </div>




        <div class="panel panel-default">
          <li class="enlaceSimple2 liIntegrate" data-toggle="collapse" data-parent="#accordion" href="#vac2">
          <div class="panel-heading">
            <div class="row">
                <div class="col-md-11">
                  <h4 class="panel-title">
                    Consultoría
                  </h4>
                </div>
                <div class="col-md-1">
                  <div class="text-right">
                  <!--    <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                  -->
                  </div>

                </div>
            </div>


          </div>
        </li>
          <div id="vac2" class="panel-collapse collapse">

            <ul  class="" style="list-style-type: none">
                        <li id="10" class="liInfoteca sinVacante"  style="cursor:pointer;">
                                <p>
                                   - Gerente
                                  <!--   <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                                  -->
                                </p>

                        </li>
                        <li id="3" class="liInfoteca sinVacante"  style="cursor:pointer;">
                              <p>
                                 - Senior
                                <!--   <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                                -->
                              </p>
                        </li>
                        <li id="4" class="liInfoteca sinVacante"  style="cursor:pointer;">
                              <p>
                                - Consultor
                          <!--        <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                              -->
                              </p>
                        </li>
                        <li id="5" class="liInfoteca sinVacante"  style="cursor:pointer;">
                              <p>
                                - Especialista
                              <!--   <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                               -->
                              </p>
                        </li>
            </ul>
          </div>
        </div>

        <div class="panel panel-default">
          <li class="enlaceSimple2 liIntegrate" data-toggle="collapse" data-parent="#accordion" href="#vac3">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-11">
                <h4 class="panel-title">
                  Auditoría
                </h4>
              </div>
              <div class="col-md-1">
                <span class="badge badge-info" align="right" title="Número de vacantes">2</span>
              </div>
            </div>

          </div>
        </li>
          <div id="vac3" class="panel-collapse collapse">

            <ul  class="" style="list-style-type: none">
                        <li id="11" class="liInfoteca sinVacante"  style="cursor:pointer;">
                                <p>
                                   - Gerente
                                <!--     <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                                -->
                                </p>
                        </li>
                        <li id="6" value="12" class="liInfoteca sinVacante" style="cursor:pointer;">
                            - Senior
                            <!--  <span class="badge badge-info" align="right" title="Número de vacantes">8</span>
                            -->
                        </li>
                        <li id="7" class="liInfoteca vacDetalle"  style="cursor:pointer;">
                              <p>
                                - Semi senior
                                <span class="badge badge-info" align="right" title="Número de vacantes">1</span>
                              </p>
                        </li>
                        <li id="8" class="liInfoteca vacDetalle"  style="cursor:pointer;">
                              <p>
                                - Asistente
                                <span class="badge badge-info" align="right" title="Número de vacantes">1</span>
                              </p>
                        </li>
            </ul>
          </div>
        </div>


        </div>


        </div>  <!-- /c 12 -->
      </div>  <!-- /row *******************************************************-->

        <div class="row">
          <div class="col-md-12">
            <br>
            <h3>Empresas privadas</h3>


            <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <li id="1" class="enlaceSimple2 liIntegrate vacEmpresa" data-toggle="collapse" data-parent="#accordion" href="#emp1">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-11">
                    <h4 class="panel-title">
                      Contabilidad
                    </h4>
                  </div>
                  <div class="col-md-1">
                      <span class="badge badge-info" align="right" title="Número de vacantes">1</span>

                  </div>
                </div>

              </div>
            </li>
            <!--    <div id="emp1"  class="panel-collapse collapse">

                <ul class="" style="list-style-type: none">
                         <li id="0" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                 <p>
                                    - Encargado
                                 </p>
                         </li>
                           <li class="divider"></li>
                         <li id="1" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                               <p>
                                 - Supervisor
                               </p>
                         </li>
                           <li class="divider"></li>
                         <li id="2" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                               <p>
                                 - Auxiliar
                               </p>
                         </li>
                     </ul>


              </div>  -->
            </div>



<!--
          <div class="panel panel-default">
            <li class="enlaceSimple2 liIntegrate" data-toggle="collapse" data-parent="#accordion" href="#emp2">
            <div class="panel-heading">
              <h4 class="panel-title">
                Asesorías
              </h4>
            </div>
          </li>
            <div id="emp2" class="panel-collapse collapse">

              <ul  class="" style="list-style-type: none">
                          <li id="3" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                <p>
                                   - Encargado
                                </p>
                          </li>
                          <li id="4" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                <p>
                                  - Supervisor
                                </p>
                          </li>
                          <li id="5" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                <p>
                                  - Auxiliar
                                </p>
                          </li>
              </ul>
            </div>
          </div>
-->

      <!--      <div class="panel panel-default">
            <li class="enlaceSimple2 liIntegrate" data-toggle="collapse" data-parent="#accordion" href="#emp3">
            <div class="panel-heading">
              <h4 class="panel-title">
                Auditorías
              </h4>
            </div>
          </li>
            <div id="emp3" class="panel-collapse collapse">

              <ul  class="" style="list-style-type: none">
                          <li id="6" value="12" class="liInfoteca vacEmpresa" style="cursor:pointer;">
                              - vacEmpresa
                          </li>
                          <li id="7" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                <p>
                                  - Supervisor
                                </p>
                          </li>
                          <li id="8" class="liInfoteca vacEmpresa"  style="cursor:pointer;">
                                <p>
                                  - Auxiliar
                                </p>
                          </li>
              </ul>
            </div>
          </div>
          -->

          </div>


          </div>
        </div>

        </div>    <!-- /col 7 -->
        <div class="col-md-4">
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/integrate/121198295.jpg')}}"/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          Nota: <span class="badge badge-info" align="right" title="Número de vacantes">1</span> <small>Indica el número de vacantes
            </small>
        </div>
      </div>

    <!--    <div class="row">
        <div class="col-md-12">
          <small>Nota número de vacantes: <span class="badge badge-info" align="right" title="Número de vacantes">1</span></small>
        </div>
      </div>
-->
    </div>  <!-- Well -->

@stop

@section('javascript')
  <script charset="utf-8">
    $('#liVacantes').addClass('activoBorde');
  </script>
  {{ HTML::script('js/publicos/integrate/integranteVacantes.js')}}
  {{ HTML::script('js/lib/bootbox.min.js', array('async' => 'async'))}}
@stop
