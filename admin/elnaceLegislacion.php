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
        <div id="buscar" class="row">
            <div class="form-group">
              <label for="txtBuscar" class="col-md-2">Buscar Enlace:</label>
              <div class="col-md-6">
                <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Palabra clave">
              </div>
              <div class="col-md-2">
                <button class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
              </div>
              <div class="col-md-2">
                <button class="btn btn-primary btn-sm" id="btnVerTodos"><span class=" glyphicon glyphicon-list-alt"></span> Ver todos</button>
              </div>
            </div>
          </div>
        <br>
        <!-- Tabla de clientes -->
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


         <div class="row">
          <div class="well  transparenteClaroTxt" id="formAgregar">
            <div class="row">
              <div class="col-md-6">
                <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Agregar enlace</h3>
              </div>
            </div>
            <div  class="form-horizontal" >

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
                  <label for="txtTipoA" class="col-md-2 control-label">Sección:</label>
                  <div class="col-md-10">
                    <select name="" id="txtTipoA" class="form-control input-sm">
                      <option value="1">Constitución</option>
                      <option value="2">Códigos</option>
                      <option value="3">Leyes</option>
                      <option value="4">Reglamentos</option>
                    <!--   <option value="5">Estatutos</option>  -->
                      <option value="6">Otros</option>
                      <option value="7">Legislación estatal</option>
                      <option value="8">NOM</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                      <option value="51">51</option>
                      <option value="52">52</option>
                      <option value="53">53</option>
                      <option value="54">54</option>
                      <option value="55">55</option>
                      <option value="56">56</option>
                      <option value="57">57</option>
                      <option value="58">58</option>
                      <option value="59">59</option>
                      <option value="60">60</option>
                      <option value="61">61</option>
                      <option value="62">62 Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016. Actualizada con la 1ra, 2da, 3ra y 4ta Resolución de Modificaciones.</option>
                      <option value="63">63 Quinta Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016 y sus anexos</option>
                      <option value="64">64 Resolución Miscelánea Fiscal para 2016</option>
                      <option value="65">65 Anexo 1-A de la Resolución Miscelánea Fiscal para 2017 anticipada</option>
                      <option value="66">66 Resolución Miscelánea Fiscal 2017 anticipada</option>
                      <option value="67">67 Segunda Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016. (Publicada el 19 de octubre de 2016)</option>
                      <option value="68">68 Compilado de las Reglas Generales de Comercio Exterior para 2016, a la Segunda Resolución de Modificaciones a las RGCE para 2016.</option>
                      <option value="69">69 Anexo Glosario de Definiciones y Acrónimos 1, 15, 21, 22 y 29 de la Segunda Resolución de modificaciones a las Reglas Generales de Comercio Exterior para 2016</option>
                      <option value="70">70 Tercera Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016 </option>
                      <option value="71">71 Compilado de las Reglas Generales de Comercio Exterior para 2016, a la Tercera Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016. </option>
                      <option value="72">72 Resolución Miscelánea Fiscal para 2017 y su anexo 19</option>
                      <option value="73">73 Anexo 1-A </option>
                      <option value="75">75 Anexo 1 </option>
                      <option value="74">74 Anexos 3 y 7 </option>
                      <option value="76">76 Anexos 5, 8, 10, 11 y 17 </option>
                      <option value="77">77 Anexos 24, 25, 27, 28 y 29 </option>
                      <option value="78">78 Anexo 23</option>
                      <option value="79">79 Anexo 14 </option>
                      <option value="80">80 Anexo 20</option>
                      <option value="81">81 Anexo 15</option>
                      <option value="82">82 Anexo 16</option>
                      <option value="83">83 Anexo 16-A</option>

                    </select>
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
        </div>  <!-- /renglonAgregar -->

        <div class="row">
          <div class="well hidden transparenteClaroTxt" id="formDetallesPersona">
            <div class="row">
              <div class="col-md-6">
                <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Editar enlace</h3>
              </div>
            </div>
            <div  class="form-horizontal" >

              <div class="form-group">
                  <label for="txtIdE" class="col-md-2 control-label">Id: </label>
                  <div class="col-md-10">
                    <input type="text" id="txtIdE" class="form-control input-sm" disabled >
                  </div>
                </div>
              <div class="form-group">
                  <label for="txtNombre" class="col-md-2 control-label">Nombre: </label>
                  <div class="col-md-10">
                    <input type="text" id="txtNombre" class="form-control input-sm" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="txtEnlace" class="col-md-2 control-label">Enlace: </label>
                  <div class="col-md-10">
                    <input type="text" id="txtEnlace" class="form-control input-sm" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="txtTipo" class="col-md-2 control-label">Sección:</label>
                  <div class="col-md-10">
                    <select name="" id="txtTipo" class="form-control input-sm">
                      <option value="1">Constitución</option>
                      <option value="2">Códigos</option>
                      <option value="3">Leyes</option>
                      <option value="4">Reglamentos</option>
                      <!--    <option value="5">Estatutos</option> -->
                      <option value="6">Otros</option>
                      <option value="7">Legislación estatal</option>
                      <option value="8">NOM</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                      <option value="51">51</option>
                      <option value="52">52</option>
                      <option value="53">53</option>
                      <option value="54">54</option>
                      <option value="55">55</option>
                      <option value="56">56</option>
                      <option value="57">57</option>
                      <option value="58">58</option>
                      <option value="59">59</option>
                      <option value="60">60</option>
                      <option value="61">61 Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016. Actualizada con la 1ra, 2da, 3ra y 4ta Resolución de Modificaciones.</option>
                      <option value="62">62 Quinta Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2016 y sus anexos</option>
                      <option value="63">63 Resolución Miscelánea Fiscal para 2016</option>
                      <option value="64">64 Anexo 1-A de la Resolución Miscelánea Fiscal para 2017 anticipada</option>
                      <option value="65">65 Resolución Miscelánea Fiscal 2017 anticipada</option>
                      <option value="66">66 Resolución Miscelánea Fiscal 2017 anticipada</option>
                      <option value="67">67 Segunda Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016. (Publicada el 19 de octubre de 2016)</option>
                      <option value="68">68 Compilado de las Reglas Generales de Comercio Exterior para 2016, a la Segunda Resolución de Modificaciones a las RGCE para 2016.</option>
                      <option value="69">69 Anexo Glosario de Definiciones y Acrónimos 1, 15, 21, 22 y 29 de la Segunda Resolución de modificaciones a las Reglas Generales de Comercio Exterior para 2016</option>
                      <option value="70">70 Tercera Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016 </option>
                      <option value="71">71 Compilado de las Reglas Generales de Comercio Exterior para 2016, a la Tercera Resolución de Modificaciones a las Reglas Generales de Comercio Exterior para 2016. </option>
                      <option value="72">72 Resolución Miscelánea Fiscal para 2017 y su anexo 19</option>
                      <option value="73">73 Anexo 1-A </option>
                      <option value="75">75 Anexo 1 </option>
                      <option value="74">74 Anexos 3 y 7 </option>
                      <option value="76">76 Anexos 5, 8, 10, 11 y 17 </option>
                      <option value="77">77 Anexos 24, 25, 27, 28 y 29 </option>
                      <option value="78">78 Anexo 23</option>
                      <option value="79">79 Anexo 14 </option>
                      <option value="80">80 Anexo 20</option>
                      <option value="81">81 Anexo 15</option>
                      <option value="82">82 Anexo 16</option>
                      <option value="83">83 Anexo 16-A</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-9">
                    <button class="btn btn-primary btn-sm" id="btnGuardarEdit" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardas cambios</button>
                    <button class="btn btn-danger btn-sm" id="btnRegresar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
                  </div>
                </div>
                <br><br>

                <div>
                  <input type="hidden" id="idU" value=<?php echo $_SESSION['idSes']; ?> disabled >
                  <input type="hidden" id="txtId" class="form-control input-sm" disabled>
                  <input type="hidden" id="token" name="_token" value="123514">
                </div>

              </div>

            </div>

          </div>
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
<script src="../js/admin/enlaceLegislacion.js"></script>

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
