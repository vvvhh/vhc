<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <link rel="icon" type="../../../../image/png" href="./favicon.png"/>

  <title>

    Indicadores Fiscales | Vázquez Hernández Contadores, S. C.
  </title>

  <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="../../../../css/publicos/pagina.css" rel="stylesheet">
</head>


  <body>
      <?php include ("../../../../seccionesVista/barraNavegacionPagina.php"); ?>


        <div class="fondoInfoteca fondo paddingMenu">
            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada">
                  <i class="fa fa-line-chart"></i> Indicadores</h1>
                <br>
              </div>
            </div>

            <div class="row">

             <div class="col-md-2 transladarIzquierda">
                    <?php include ("../../../../seccionesVista/menuIndicadoresF.php"); ?>   <!-- MUESTRA MENU DE ARTICULOS menuArticulo.blde.php -->
              </div>

              <div class="col-md-10 animacionContenido">
  <!--  -->     <!-- MUESTRA EL CONTENIDO DEL ARTICULO -->

  <div class="well transparenteClaroTxt">
    <div class="row">
      <div class="col-md-12">
       <div class="table-responsive">

              <table class="table table-striped  table-bordered table-condensed">
            <!-- **************** -->
            <h3 class="text-center">
              Cantidades a pagar por concepto de derecho 2016
            </h3>

            <thead>


  	<tr class="activoLiMenu">
  		<th>	Concepto​	</th>	<th>	 	Importe en m.n.​	</th>
  	</tr>
  </thead>

            <tbody>
            	<tr>	<td>	Pago de derechos por solicitar copias certificadas de documentos​	  </td>	<td class="text-center">	17.63 </td>
              </tr>
              <tr>
                  <td>
                    Pago de derechos por solicitar constancias
                  </td>
                  <td class="text-center">
                       	149.55
                  </td>
              </tr>
              <tr>
                <td>
                  Pago de derechos por marbetes que se adhieren a los envases de bebidas alcohólicas, por cada uno​
                </td>
                <td class="text-center">
                   	0.3966​
                </td>
              </tr>
              <tr>
                <td>
                  Pago de derechos por precintos que se adhieren a los envases de bebidas alcohólicas, por cada uno​
                </td>
                <td class="text-center">
                   	1.46​
                </td>
              </tr>

            </tbody>


  <!-- ********** -->
        </table>
      </div>
    </div>
  </div>
  </div>





  <!-- ****************************** -->
              </div>

          </div>
        </div>



      <script src="../../../../js/jquery.js"></script>
      <script src="../../../../js/bootstrap.min.js"></script>
      <?php include ("../../../../seccionesVista/piePagina.php"); ?>


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
    $('#ulIFe').addClass('in');
    $('#liPagosDerecho').addClass('activoBorde');
  </script>

  </body>
</html>
