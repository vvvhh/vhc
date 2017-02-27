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
       <div  class="table-responsive">
              <table class="table table-striped  table-bordered table-condensed">
            <!-- ** -->
  				<h3 class="text-center">	Unidad de Medida y Actualización (UMA) 	</h3>

  <thead>
  	<tr  class="activoLiMenu">	<th class="text-center col-md-3 col-lg-3 col-sm-3">	Año	</th>	<th class="text-center col-md-3 col-lg-3 col-sm-3">	Diario	</th>	<th class="text-center col-md-3 col-lg-3 col-sm-3">	Mensual​	</th> <th class="text-center col-md-3 col-lg-3 col-sm-3">	Anual​	</th>	</tr>
  </thead>

  <tbody class="animEscalarFila">

  <tr>	<td class="text-center">	2017	  </td>	<td class="text-center">	​ 	$ 75.49​	  </td>	<td class="text-center">	$ 2,294.90  </td> <td class="text-center">	  $ 27,538.80  </td>	</tr>
  <tr>	<td class="text-center">	2016	  </td>	<td class="text-center">	​ 	$ 73.04​	  </td>	<td class="text-center">	$ 2,220.42  </td> <td class="text-center">	  $ 26,645.04  </td>	</tr>

  </tbody>

    	<!-- ******** -->
            </table>
          </div>
        </div>
    </div>
  </div>



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
	  $('#ulFi').addClass('in');
	  $('#liUma').addClass('activoBorde');
	</script>

  </body>
</html>
