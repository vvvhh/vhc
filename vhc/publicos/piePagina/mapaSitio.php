
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="edSantiago" />
    <meta name="description" content="Contáctenos para recibir un diagnóstico, una opinión o una asesoría, con gusto uno de nuestros asesores le atenderá.">
    <meta name="keywords" content="domicilio fiscal, direccion, teléfono, horario atención, mensaje, contacto" />

    <link rel="icon" type="../image/png" href="./favicon.png"/>

    <title>
      Mapa del Sitio | ContadoresVH
    </title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/lib/sweet-alert.css" rel="stylesheet">
    <link href="../../css/inicio.css" rel="stylesheet">

    <link href="../../css/publicos/pagina.css" rel="stylesheet">
  </head>


    <body>

      <?php include ("../../seccionesVista/barraNavegacionPagina.php"); ?>


<div class="fondo paddingTexto animarContenidoEscalar" style="background-image:url('../../img/inicio/460916001.jpg ');">
  <div class="container"> <!-- Container -->

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-sitemap"></i> Mapa del Sitio</h1>
      </div>
    </div>
    <div class="well transparenteClaroTxt animacionContenido">
      <div class="row">
        <div class="col-md-12">
          <a id="closeModal" href="{{ URL::to('/')}}" type="button" class="close" aria-hidden="true">&times;</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/sobreNosotros')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-user"></i> Sobre Nosotros</h3></a>
          </div>
          <div class="row">
            <ul class="">
              <li ><a  href="{{ URL::to('publicos/sobreNosotros#titMision')}}" class="grisObscuro enlaceSimple"> Misión</a></li>
              <li ><a href="{{ URL::to('publicos/sobreNosotros#mision')}}" class="grisObscuro enlaceSimple"> Visión </a></li>
              <li ><a href="{{ URL::to('publicos/sobreNosotros#titVision')}}" class="grisObscuro enlaceSimple"> Valores</a></li>
              <li ><a href="{{ URL::to('publicos/sobreNosotrosCCconduta')}}" class="grisObscuro enlaceSimple"> Código de conducta</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/servicios')}}" class="grisObscuro enlaceSimple"><h3 > <i class="fa fa-briefcase"></i> Servicios</h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/servicios/contables')}}" class="grisObscuro enlaceSimple"> Contables </a></li>
              <li ><a href="{{ URL::to('publicos/servicios/asesoria')}}" class="grisObscuro enlaceSimple"> Asesorías</a></li>
              <li ><a href="{{ URL::to('publicos/servicios/auditoria')}}" class="grisObscuro enlaceSimple"> Auditorías </a></li>


            <!--    <li ><a href="{{ URL::to('publicos/servicios/obtenerAsesoria')}}" class="grisObscuro enlaceSimple"> Servicios de Asesoría Online</a></li>
            -->
              <ul>
                <!--  <li><a href="{{ URL::to('publicos/servicios/asesoriaServ/consultaAsesoria')}}" class="grisObscuro enlaceSimple">Realizar Consulta Gratuita</a></li> -->
              <!--    <li ><a href="{{  URL::to('publicos/servicios/obtenerAsesoria#btnContratar')}}" class="grisObscuro enlaceSimple"> Contratar Paquete</a></li>
              -->
                <!--  <li><a href="{{ URL::to('publicos/servicios/asesoriaServ/consultaAsesoria')}}" class="grisObscuro enlaceSimple">Pagar Paquete</a></li>-->
              </ul>
              <li ><a href="{{ URL::to('publicos/servicios/juridico')}}" class="grisObscuro enlaceSimple">  Jurídicos </a></li>
              <li ><a href="{{ URL::to('publicos/servicios/fiscal')}}" class="grisObscuro enlaceSimple">  Fiscal </a></li>
              <li ><a href="{{ URL::to('publicos/servicios/pLavado')}}" class="grisObscuro enlaceSimple"> Prevención de Lavado de Dinero </a></li>
              <li ><a href="{{ URL::to('publicos/servicios/laborales')}}" class="grisObscuro enlaceSimple"> Laborales</a></li>
              <li ><a href="{{ URL::to('publicos/servicios/otros')}}" class="grisObscuro enlaceSimple"> Otros servicios </a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/infoteca')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-folder-open"></i>  Infoteca</h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/infoteca/videos/video1')}}" class="grisObscuro enlaceSimple">Videos</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/podcast')}}" class="grisObscuro enlaceSimple"> Podcasts</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/articulos/articulo1')}}" class="grisObscuro enlaceSimple"> Artículos</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/resenas/resena1')}}" class="grisObscuro enlaceSimple"> Reseñas</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/tutoriales/tutorial1')}}" class="grisObscuro enlaceSimple"> Tutoriales</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssCuotasImss')}}" class="grisObscuro enlaceSimple"> Indicadores Fiscales</li></a>
              <li ><a href="{{ URL::to('publicos/infoteca/legislacion')}}" class="grisObscuro enlaceSimple"> Legislación</li></a>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/sInteres')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-globe"></i> Sitios de Interés</h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/sInteres#sitiosGenerales')}}"  class="grisObscuro enlaceSimple">Generales</li></a>
              <li ><a href="{{ URL::to('publicos/sInteres#sitiosFiscales')}}"  class="grisObscuro enlaceSimple">Fiscales</li></a>
              <li ><a href="{{ URL::to('publicos/sInteres#sitiosLaborales')}}"  class="grisObscuro enlaceSimple">Laborales</li></a>
              <li ><a href="{{ URL::to('publicos/sInteres#sitiosSSocial')}}"  class="grisObscuro enlaceSimple">Seguridad Social</li></a>
              <li ><a href="{{ URL::to('publicos/sInteres#sitiosJudirico')}}"  class="grisObscuro enlaceSimple">Judírico Corporativo</li></a>
            </ul>
          </div>
        </div>


        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/integrate')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-puzzle-piece"></i> Intégrate</h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/integrate/integratePElegir')}}" class="grisObscuro enlaceSimple">¿Por qué elegirnos?</li></a>
              <li ><a href="{{ URL::to('publicos/integrate/integrateDesarrollo')}}" class="grisObscuro enlaceSimple">Tu desarrollo profesional y personal</li></a>
              <li ><a href="{{ URL::to('publicos/integrate/integrateRol')}}" class="grisObscuro enlaceSimple">Tu rol en la firma</li></a>
              <li ><a href="{{ URL::to('publicos/integrate/integrateVacantes')}}" class="grisObscuro enlaceSimple">Vacantes</li></a>
              <li ><a href="{{ URL::to('publicos/integrate/integratePostulate')}}" class="grisObscuro enlaceSimple">Postúlate</li></a>
              <li ><a href="{{ URL::to('publicos/integrate/integrateAvisoP')}}" class="grisObscuro enlaceSimple">Aviso de privacidad para aspirantes</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/contacto')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-map-marker"></i> Contacto</h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/contacto#tituloContacto')}}" class="grisObscuro enlaceSimple">Oficinas</li></a>
              <li ><a href="{{ URL::to('publicos/contacto#tituloEnviar')}}" class="grisObscuro enlaceSimple">Envíenos un Mensaje</li></a>
            </ul>
          </div>
        </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <a href="{{ URL::to('publicos/portafolio')}}" class="grisObscuro enlaceSimple"><h3 ><i class="fa fa-star"></i>Portafolio </h3></a>
          </div>
          <div class="row">
            <ul>
              <li ><a href="{{ URL::to('publicos/portafolio#contenidoSobreNosotros')}}" class="grisObscuro enlaceSimple">Testimonios</li></a>
              <li ><a href="{{ URL::to('publicos/portafolio#renglonClientes')}}" class="grisObscuro enlaceSimple">Algunos de nuestros clientes</li></a>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>  <!-- ./Container -->
</div>


  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <?php include ("../../seccionesVista/piePagina.php"); ?>


</body>

</html>
