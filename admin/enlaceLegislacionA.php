<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="" />
  <link rel="icon" type="image/png" href="../favicon.png"/>


  <link href="../css/lib/sweet-alert.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/publicos/sesionA.css" rel="stylesheet">

</head>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header ">
            <img id="imgI"class="img-responsive" src="../img/logoNombre.png">
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><?php echo $_SESSION['nombreSes']; ?></li>
          <li class="dropdown">
            <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog "></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>Cuenta asesores</li>
              <li class="divider"></li>
              <li>Cambiar contraseña</li>
              <li class="divider"></li>
              <li><a href="../php/sesion/logout.php">Cerrar sesión</a></li>
            </ul>
           </li>
        </ul>

      </div>
    </nav>




    <body>
      <?php session_start(); ?>

      <div  id="contenidoUsuario" class="paddingMenu"> <!-- fondo -->
        <div>
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header tamTitulo grisObscuro texto3D"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombreSes']; ?></h1>
            </div>
          </div>

          <div class="row"> <!-- Renglon Principal -->

            <aside class="col-md-2 col-lg-2">
              <?php include ("../seccionesAdmAsesor/adminMenu.php"); ?>
            </aside>

            <div class="col-md-10 col-lg-10">
              <!-- *********************************************************************** -->

    <div class="row">
      <div class="col-md-11">
        <h1>Enlaces </h1>
        <h5>Enlaces a sitios externos desde página Sitios de interés / Legislación </h5>
    
        <br>
        <!-- Tabla de clientes -->

         <div class="row">
          <div class="well  transparenteClaroTxt" id="formAgregar">
            <div class="row">
              <div class="col-md-6">
                <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Agregar enlace</h3>
              </div>
            </div>
            <div  class="form-horizontal" >

              <div class="form-group">
                <label for="txtTipoA" class="col-md-2 control-label">Sección:</label>
                <div class="col-md-10">
                  <select name="" id="txtTipoA" class="form-control input-sm">
                    <option value="1">Constitución</option>
                    <option value="2">Códigos</option>
                    <option value="3">Leyes</option>
                    <option value="4">Reglamentos</option>
                  <!--   <option value="5">Estatutos</option>  -->
                  </select>
                </div>
              </div>

              <div class="form-group">
                  <label for="txtNombreA" class="col-md-2 control-label">Nombre: </label>
                  <div class="col-md-10">
                    <input type="text" id="txtNombreA" class="form-control input-sm" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtEnlaceA" class="col-md-2 control-label">Enlace: </label>
                  <div class="col-md-10">
                    <input type="text" id="txtEnlaceA" class="form-control input-sm" >
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-9">
                    <button class="btn btn-primary btn-sm" id="btnGuardarA" ><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
                    <button class="btn btn-danger btn-sm" id="btnRegresarA"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
                  </div>
                </div>
                <br><br>

                <div>
                  <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
                  <input type="hidden" id="txtId" class="form-control input-sm" disabled>
                  <input type="hidden" id="token" name="_token" value="5552156">
                </div>

              </div>
            </div>

          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive hidden" id="tblClienteP">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th class="col-md-3">Nombre</th>
                      <th class="col-md-2 text-center">Enlace</th>
                      <th class="col-md-2 text-center">Sección</th>
                      <th class="col-md-1 text-center">eliminar</th>
                      <th class="col-md-1 text-center">Editar</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyClienteP"></tbody>
                </table>
              </div>
            </div>
          </div> <!-- /Tabla de clientes -->
        </div>  <!-- /renglonAgregar -->


        </div>  <!-- /renglonDetalles -->



      </div>  <!--/columna10 contenido-->
    </div>

    <!-- ******************************************************************** -->
  </div>


</div> <!-- /Renglon Principal -->
</div>  <!-- /Container -->
</div>


<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/lib/sweet-alert.min.js"></script>
<script src="../js/admin/enlaceLegislacionA.js"></script>

  <script>
    $('#enlacesInfo').addClass('activoBorde');
  </script>
  <script>
  $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
  });
</script>
</body>

</body>

</html>
