<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <meta name="description" content="Testimonios y algunos clientes en Vázquez Hernández Contadores, S.C.">
  <meta name="keywords" content="testimonios, clientes" />
  <meta name="description" content="Conocer las vacates y podras envíes tu Currículum Vitae así como tus datos curriculares para futuras oportunidades. ">
  <meta name="keywords" content="postulate, vacantes, desarrollo profesional, desarrollo personal" />


  <link rel="icon" type="../image/png" href="./favicon.png"/>

  <title> Intégrate | Vázquez Hernández Contadores, S. C.
  </title>

  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">


  <link href="../../css/publicos/pagina.css" rel="stylesheet">
</head>
  <body>

    <?php include ("../../seccionesVista/barraNavegacionPagina.php"); ?>
        <div class="fondoIntegrate fondo paddingMenu2">

          <div class="row">
            <br>
            <div class="col-md-3 col-md-offset-9">
              <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
            </div>
          </div>

            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-puzzle-piece"></i> Intégrate</h1>
              </div>
            </div>

            <div class="row">


              <div class="col-md-9"> <!-- Columna Contenido -->
  <!--  -->      <!-- MUESTRA CONTENIDO ***************************************-->






    <div class="well transparenteClaroTxt animacionContenido">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="grisObscuro"><strong> Postúlate</strong></h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 text-center">
            <h4 ><i class="fa fa-envelope"></i> Envíanos tu currículum</h4>
            <p class="text-justify">
              ¿Te interesa pertenecer a nuestra firma?, envíanos tu Currículum Vitae y tus datos de contacto, te tomaremos en cuenta para futuras oportunidades:
            </p>
            <br>
  <!--  action="{{URL::to('publicos/integrate/enviarCurriculum')}}" -->
            <form accept-charset="utf-8" method="post"  class="trabaja" enctype="multipart/form-data" id="formPostulate" method="post">

                 <div class="control-group form-group">

                   <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="inpNombre" name="_nombre" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Nombre" maxlength="50" required >
                   </div>
                   <br>

                   <div class="control-group form-group">
                     <div class="input-group">
                       <span class="input-group-addon glyphicon"><i class="fa fa-at"></i></span>
                       <input id="inpEmail" name="_correo" type="email" class="form-control grisObscuro"  placeholder="*Correo Electrónico" maxlength="50">
                       <p class="text-danger" id="spnCorreo"> </p>
                     </div>
                   </div>

                   <div class="control-group form-group">
                     Seleccionar Empresa:
                     <div class="input-group">
                       <span class="input-group-addon glyphicon"><i class="fa fa-building" aria-hidden="true"></i></span>

                       <select id="inpEmpresa" class="form-control" name="_empresa">
                            <option value="VHC" selected>Vázquez Hernández Contadores, S.C. </option>
                            <option value="Empresa_Privada">Empresa privada</option>
                       </select>
                       <!-- <input id="inpEmpresa" name="_empresa" type="email" class="form-control grisObscuro"  placeholder="Empresa" maxlength="50">
   -->


                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-8">
                       <div class="control-group form-group">
                         Seleccionar área:
                         <div class="input-group">
                           <span class="input-group-addon glyphicon"><i class="fa fa-users" aria-hidden="true"></i></span>

                           <select id="inpArea" class="form-control" name="_inpArea">
                                <option value="Contable" selected>Contable</option>
                                <option value="Consultoria">Consultoría</option>
                                <option value="Auditoria">Auditoría</option>

                           </select>
                           <!-- <input id="inpEmpresa" name="_empresa" type="email" class="form-control grisObscuro"  placeholder="Empresa" maxlength="50">
       -->


                         </div>
                       </div>
                     </div>
                     <div class="col-md-4">
                       <br>
                      <a href="integrateVacantes.php')}}" class="btn btn-md"><strong>Ver vacantes</strong></a>
                     </div>



                   </div>



                  </div>
                  <br>



                  <div class="control-group form-group">
                    <div class="input-group">
                      Seleccione su Currículum Vitae desde un archivo (.pdf, .doc, .docx):
                      <input type="file" name="_archivo" value="" class="form-control" required >

                      <br>

                    </div>
                  </div>



                  <div class="control-group form-group">
                    <div class="input-group" id="aceptoCheck">
                      <input type="checkbox" id="chkAcepto" name="chkAcepto" />
                        Acepto haber leído y estar de acuerdo con la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">"Política de uso y privacidad del sitio web"</a> y el <a href="{{  URL::to('publicos/integrate/integrateAvisoP')}}" >"Aviso de privacidad para aspirantes"</a> de Vázquez Hernández Contadores, S.C.
                    </div>
                  <!--    <p>
                      *Al hacer clic en el botón, usted confirma haber leído y reconoce la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a> y el <a href="{{ URL::to('publicos/integrate/integrateAvisoP')}}" >Aviso de privacidad para aspirantes</a>.
                    </p> -->
                  </div>

                  <input id="btnEnviar" value="Enviar" class="btn btn-primary btn-block"/>
                  <input type="hidden" name="_token" id="token" value="1235">
                  <br>
                  <div class="hidden" id="procesoEnviar">
                      <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                      Enviando...
                  </div>



                </form>




            <br>
          </div>
          <div class="col-md-6">
            <br><br><br><br>
            <img class="imgS img-rounded img-responsive" src="../../img/integrate/137830602.jpg"/>
          </div>
        </div>

        <div>
          <input type="hidden" name="integrateh" id="integrateh" value="744156">
          <input type="hidden" name="_token" value="15328">
        </div>

      </div> <!-- Well -->


















                <!-- ************************************************************************** -->
              </div> <!-- /Columna Contenido -->

              <div class="col-md-3 transladarIzquierda">  <!-- Columna Menu -->
                        <!-- MENU DERECHO INTEGRATE DESDE menuIntegrate.blde.php -->
                <?php include ("../../seccionesVista/menuIntegrate.php"); ?>

              </div>  <!-- /Columna Menu -->


          </div>
        </div>


      <script src="../../js/jquery.js"></script>
      <script src="../../js/bootstrap.min.js"></script>
      <?php include ("../../seccionesVista/piePagina.php"); ?>

      <script src="../../js/publicos/integrate/integratePostulate.js"></script>
      <script src="../../js/lib/sweet-alert.min.js"></script>

      <script charset="utf-8">
        $('#liPostulate').addClass('activoBorde');
      </script>

      <script>
        $('#navIntegrate').addClass('activoLi');
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
      </script>

  </body>
