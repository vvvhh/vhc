@extends('layout')

@section('head')
  <meta name="description" content="Enlaces a sitios web con contenido de interés en el área contable.">
  <meta name="keywords" content="sitios web interés general, sitios web fiscales, sitios web laborales, sitios web seguridad social, sitios web jurídico corporativo" />
@stop

@section('title')
  Sitios de Interés | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/inicio.css') }}
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../img/sInteres/187974988.jpg');"class="fondo paddingTexto">

  <div class="row">
    <br>
    <div class="col-md-3 col-md-offset-9">
      <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
    </div>
  </div>


  <div class="container">

  <div class="row">
    <div class="col-lg-12">
      <br>
      <h1 class="tituloEntrada tamTitulo grisClaro texto3D"><i class="fa fa-globe"></i> Sitios de Interés</h1><br>
    </div>
          <!-- well-->
    <div class="col-lg-12 well transparenteObscuro transladarDerecha" >

      <ul id="myTab" class="nav nav-tabs nav-justified">
        <li class="active"><a class="grisClaro" href="#sitiosGenerales" data-toggle="tab"><i class="fa fa-at"></i> Generales</a>
        </li>
        <li><a class="grisClaro" href="#sitiosFiscales" data-toggle="tab"><i class="fa fa-university"></i> Fiscales</a>
        </li>
        <li><a class="grisClaro" href="#sitiosLaborales" data-toggle="tab"><i class="fa fa-suitcase"></i> Laborales</a>
        </li>
        <li><a class="grisClaro" href="#sitiosSSocial" data-toggle="tab"><i class="fa fa-hospital-o"></i> Seguridad Social</a>
        </li>
        <li><a class="grisClaro" href="#sitiosJudirico" data-toggle="tab"><i class="fa fa-gavel"></i> Judírico Corporativo</a>
        </li>
      </ul>

        <!-- Tabla -->
      <div id="myTabContent" class="tab-content transparenteObscuro animEscalarLista ">

      <!--    <div class="table-responsive tamMenu2">
          <table class="table">
-->
        <div class="tab-pane fade active in" id="sitiosGenerales">
          <div class="list-group trasparenteClaroPlus">

            <a href="https://www.scjn.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                  <div class="col-md-11">
                    <i class="fa fa-external-link"></i> Suprema Corte de Justicia de la Nación (SCJN)
                  </div>
                  <div class="col-md-1 hidden-xs">
                  </div>
              </div>
            </a>
            <a href="http://www.diputados.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Cámara de Diputados
                </div>
              </div>
            </a>
            <a href="http://gaceta.diputados.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Gaceta Parlamentaria
                </div>
              </div>
            </a>
            <a href="http://www.senado.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Cámara de Senadores
                </div>
              </div>
            </a>
            <a href="http://www.tfja.mx" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Tribunal Federal de Justicia Fiscal y Administrativa (TFJFA)
                </div>
              </div>
            </a>
            <a href="http://www.juridicas.unam.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Instituto de Investigaciones Jurídicas
                </div>
              </div>
            </a>
            <a href="http://www.ordenjuridico.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Orden Jurídico
                </div>
              </div>
            </a>
            <a href="http://www.df.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Gobierno del DF
                </div>
              </div>
            </a>
            <a href="http://www.consejeria.df.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Consejería Jurídica
                </div>
              </div>
            </a>
            <a href="http://www.aldf.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Asamblea Legislativa del DF
                </div>
              </div>
            </a>
            <a href="http://imcp.org.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Instituto Mexicano de Contadores Públicos AC (IMCP)
                </div>
              </div>
            </a>
            <a href="http://www.sre.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Secretaría de Relaciones Exteriores
                </div>
              </div>
            </a>
            <a href="http://www.banxico.org.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Banco de México
                </div>
              </div>
            </a>
          </div>
        </div>
    <!--    </table>
    </div>
-->
        <div class="tab-pane fade" id="sitiosFiscales">
          <div class="list-group trasparenteClaroPlus">
            <a href="http://www.shcp.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Secretaría de Hacienda y Crédito Público (SHCP
                </div>
              </div>
            </a>
            <a href="http://www.sat.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Servicio de Administración Tributaria (SAT)
                </div>
              </div>
            </a>
            <a href="http://www.finanzas.df.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Tesorería del Gobierno del DF
                </div>
              </div>
            </a>
            <a href="https://sppld.sat.gob.mx/pld/index.html" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Portal de Prevención de Lavado de Dinero
                </div>
              </div>
            </a>
            <a href="http://www.gob.mx/shcp/documentos/shcp-unidad-de-inteligencia-financiera-uif" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> SHCP - Unidad de Inteligencia Financiera (UIF)
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="tab-pane fade" id="sitiosLaborales">
          <div class="list-group trasparenteClaroPlus">
            <a href="http://www.stps.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Secretaría del Trabajo y Previsión Social (STPS)
                </div>
              </div>
            </a>
            <a href="http://www.ilo.org/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Organización Internacional del Trabajo (ILO)
                </div>
              </div>
            </a>
            <a href="http://www.conasami.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Comisión Nacional de los Salarios Mínimos (CONASAMI)
                </div>
              </div>
            </a>
            <a href="http://www.fonacot.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i>  Instituto del Fondo de Fomento y Garantía para el Consumo de los Trabajadores (INFONACOT)
                </div>
              </div>
            </a>
            <a href="http://www.profedet.gob.mx" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Procuraduría Federal de la Defensa del Trabajo (PROFEDET)
                </div>
              </div>
            </a>
            <a href="http://www.conampros.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Comité Nacional Mixto de Protección al Salario (CONAMPROS)
                </div>
              </div>
            </a>
            <a href="http://www.observatoriolaboral.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Observatorio laboral
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="tab-pane fade" id="sitiosSSocial">
          <div class="list-group trasparenteClaroPlus">
            <a href="http://www.imss.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Instituto Mexicano del Seguro Social (IMSS)
                </div>
              </div>
            </a>
            <a href="http://portal.infonavit.org.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i>  Instituto del Fondo Nacional de la Vivienda para los Trabajadores (INFONAVIT)
                </div>
              </div>
            </a>
            <a href="http://www.consar.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Comisión Nacional de los Sistemas de Ahorro para el Retiro (CONSAR)
                </div>
              </div>
            </a>
            <a href="http://www.amafore.org/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Asociación Mexicana de las Administradoras de Fondos para el Retiro (AMAFORE)
                </div>
              </div>
            </a>
            <a href="http://www.aiosfp.org/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Asociación Internacional de Organismos de Supervisión de Fondos de Pensiones (AIOS)
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="tab-pane fade" id="sitiosJudirico">
          <div class="list-group trasparenteClaroPlus">
            <a href="http://www.impi.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Instituto Mexicano de Propiedad Intelectual (IMPI)
                </div>
              </div>
            </a>
            <a href="http://www.rnie.economia.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Registro Nacional de Inversión Extranjera (RNIE)
                </div>
              </div>
            </a>
            <a href="http://www.condusef.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros (CONDUSEF)
                </div>
              </div>
            </a>
            <a href="http://www.indautor.gob.mx" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Instituto Nacional del Derecho de Autor (INDAUTOR)
                </div>
              </div>
            </a>
            <a href="http://www.siem.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Sistema de Información Empresarial Mexicano (SIEM)
                </div>
              </div>
            </a>
            <a href="http://www.economia.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Secretaría de Economía
                </div>
              </div>
            </a>
            <a href="http://www.gob.mx/salud" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Secretaría de Salud
                </div>
              </div>
            </a>
            <a href="http://www.sagarpa.gob.mx/" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> SAGARPA
                </div>
              </div>
            </a>
            <a href="http://www.semarnat.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> SEMARNAT
                </div>
              </div>
            </a>
            <a href="http://www.economia-noms.gob.mx" target="_blank" class="list-group-item">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Catálogo de Normas Oficiales (NOM)
                </div>
              </div>
            </a>
            <a href="http://pnd.gob.mx/" target="_blank" class="list-group-item trasparenteClaroPlus">
              <div class="row">
                <div class="col-md-11">
                  <i class="fa fa-external-link"></i> Plan Nacional de Desarrollo (PND)
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- ./Contenido Tabla -->
    </div>
      <!-- ./well-->
  </div>

</div>
</div>
@stop

@section('javascript')
  <script>
  	$('#navInteres').addClass('activoLi');
  </script>
@stop
