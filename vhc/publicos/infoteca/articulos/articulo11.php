<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <link rel="icon" type="../../../image/png" href="./favicon.png"/>

  <title>

    Artículos | Vázquez Hernández Contadores, S. C.
  </title>

  <link href="../../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="../../../css/publicos/pagina.css" rel="stylesheet">
</head>


  <body>
      <?php include ("../../../seccionesVista/barraNavegacionPagina.php"); ?>

        <div class="fondoInfoteca fondo paddingMenu">
            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada"><i class="fa fa-book"></i> Artículos</h1>
                <br>
              </div>
            </div>

            <div class="row">

              <div class="col-md-9 animacionContenido">
                 <!--CONTENIDO DEL ARTICULO **************************-->

   <div class="well transparenteClaroMTxt">  <!-- Well Articulo1 -->
     <div class="row">
       <div class="col-md-12">
         <h3>
           El fin del ciclo del contribuyente
         </h3>
         <p class="text-justify">
           Existe una cita bíblica que cuando se lee pareciera, hasta cierto punto, enigmática, sin embargo, en esencia es absolutamente verdadera, pues como bien lo afirma: todo tiene su tiempo, y el ciclo del contribuyente, también.
         </p>

       </div>
     </div>
     <div class="row">
       <div class="col-md-12">

           <!-- CONTENIDO DEL ARTICULO -->

           <div class="row">

             <div class="col-md-8">

               <br>
               <h4>
                 ¿En qué momento concluye el ciclo del contribuyente?
               </h4>
               <p class="text-justify">
                 En un artículo anterior al que titulamos <i>“Existe vida fiscal después de la muerte.”</i>, comentamos que, efectivamente, cuando una persona fallece, las obligaciones fiscales subsisten hasta en tanto no se adjudiquen a alguien los bienes los bienes y negocios del <i>“de cujus” <sup>1</sup></i>. Una de esas obligaciones es la Cancelación del RFC por defunción, tema que a continuación abordaremos brevemente.
               </p>

               <p class="text-justify">
                 Este trámite es, únicamente, aplicable para personas físicas, en el caso de las personas morales (empresas), lo primero que procede para éstas es someterlas a un periodo de liquidación y posteriormente viene la cancelación del RFC.
               </p>

               <p class="text-justify">
                 Es importante que consideres que, previo a éste trámite, deberás presentar un aviso denominado Apertura de Sucesión.
               </p>


               </div>
               <div class="col-md-4">
                 <br>
                 <img class="img-rounded img-responsive imgN" src="../../../img/infoteca/articulos/173764003.jpg"/>
               </div>
           </div>


           <br>
           <h4>
             ¿Y cómo se cancela?
           </h4>
           <p class="text-justify">
             Para poder cancelar el RFC de una persona fallecida se debe de presentar, para tal efecto, un aviso ante la oficina del Servicio de Administración Tributaria (SAT) de su preferencia. El trámite puede llevarse a cabo por un familiar del fallecido o algún tercero interesado, debiendo presentar dentro del mes siguiente al fallecimiento del contribuyente, <i>el formato de avisos de liquidación, fusión, escisión y cancelación al RFC (Forma oficial RX)</i> en dos tantos y la copia certificada del acta de defunción expedida por la oficina del Registro Civil. Una vez revisados los documentos por el representante de la autoridad fiscal, harán entrega al interesado del aviso de actualización o modificación de situación fiscal y acuse de actualización al RFC, mismos que deberán ser guardados para cualquier aclaración posterior.
           </p>

           <p class="text-justify">
             Recuerda, que es preferible acudir siempre con cita para disminuir el tiempo de espera de atención.
           </p>

           <p class="text-justify">
             Una vez que resulta procedente la cancelación del RFC, podemos afirmar que formalmente concluye el ciclo del contribuyente.
           </p>

           <p class="text-center">
             “Todo tiene su tiempo y todo lo que se quiere debajo del cielo tiene su hora”
           </p>

           <small class="text-justify">
            <sup>1</sup> Primeras palabras de la fórmula latina “de cujus succesione agitur” (aquel de cuya sucesión se trata); utilizada en nuestros días para designar al difunto causante de la sucesión: se dice el “de cujus”. Palabra que designa a la persona cuya sucesión ha sido abierta. Véase en <a href="http://www.enciclopedia-juridica.biz14.com/d/de-cujus/de-cujus.htm" target="blanck">http://www.enciclopedia-juridica.biz14.com/d/de-cujus/de-cujus.htm</a> 
           </small>

         <!-- /CONTENIDO DEL ARTICULO -->

       </div>
     </div>


     <small>Autora: L.C. Bibiana I. Nuñez Aguilar</small>
   </div>  <!-- /Well Articulo1 -->




                 <!-- ************************************************************************************ -->
              </div>

              <div class="col-md-3 transladarIzquierda">
                  <!--MENU DE LOS ARTICULOS menuArticulo.blde.php -->
                <?php include ("../../../seccionesVista/menuArticulo.php"); ?>
                <br>
                <a class="btn btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar Infoteca</span></a>
              </div>

          </div>
        </div>

        <?php include ("../../../seccionesVista/piePagina.php"); ?>
        <script src="../../../js/jquery.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
      <script>
        $('#navInfoteca').addClass('activoLi');
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
      </script>

      <script>
  $('#ulArtTem1').addClass('in');
  $('#liArt11').addClass('activoBorde');
</script>
  </body>
</html>
