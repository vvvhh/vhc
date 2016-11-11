<div class="">
    <ul id="ulIntegrate"class="nav nav-sidebar colorNav">
        <li id="liPElegir">
            <a class="grisClaro texto3d" id="aElegirnos">
              <i class="fa fa-check-circle"></i> ¿Por qué elegirnos?
            </a>
        </li>

        <li id="liDesarrollo">
            <a class="grisClaro texto3d" id="aDesarrollo">
            <i class="fa fa-check-circle"></i> Tu desarrollo profesional y personal</a>
        </li>
        <li id="liRol">
            <a class="grisClaro texto3d" id="aRol">
              <i class="fa fa-check-circle"></i> Tu rol en la firma
            </a>
        </li>
        <li id="liConducta">
            <a class="grisClaro texto3d" id="aCodigoC">
            <i class="fa fa-check-circle"></i> Código de conducta</a>
        </li>
        <li id="liVacantes">
            <a class="grisClaro texto3d" id="aVacantes">
              <i class="fa fa-check-circle"></i> Vacantes
            </a>
        </li>
        <li id="liPostulate">
            <a class="grisClaro texto3d" id="aPostulate">
              <i class="fa fa-check-circle"></i> Postúlate
            </a>
        </li>
        <li id="liAviso">
          <!--    <a class="grisClaro texto3d" href="{{ URL::to('publicos/piePagina/avisoPrivacidadEmpleados.php"> -->
            <a class="grisClaro texto3d" id="aAviso">
              <i class="fa fa-check-circle"></i> Consulta el aviso de privacidad para aspirantes
            </a>
        </li>

    </ul>
    <br>
    <a class="btn btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar </span></a>

</div>

<script type="text/javascript">
var aElegirnos=document.getElementById('aElegirnos');
    aDesarrollo=document.getElementById('aDesarrollo');
    aRol=document.getElementById('aRol');
    aCodigoC=document.getElementById('aCodigoC');
    aVacantes=document.getElementById('aVacantes');
    aPostulate=document.getElementById('aPostulate');
    aAviso=document.getElementById('aAviso');


  var rElegirnos="publicos/integrate/integratePElegir.php";
  var rDesarrollo="publicos/integrate/integrateDesarrollo.php";
  var rRol="publicos/integrate/integrateRol.php";
  var rCodigoC="publicos/integrate/eCConducta.php";
  var rVAcantes="publicos/integrate/integrateVacantes.php";
  var rPostulate="publicos/integrate/integratePostulate.php";
  var rAviso="publicos/integrate/integrateAvisoP.php";

  var dominio=window.location.host;
  var absoluta2="/vhc/";

  aElegirnos.href="http://"+dominio+absoluta2+rElegirnos;
  aDesarrollo.href="http://"+dominio+absoluta2+rDesarrollo;
  aRol.href="http://"+dominio+absoluta2+rRol;
  aCodigoC.href="http://"+dominio+absoluta2+rCodigoC;
  aVacantes.href="http://"+dominio+absoluta2+rVAcantes;
  aPostulate.href="http://"+dominio+absoluta2+rPostulate;
  aAviso.href="http://"+dominio+absoluta2+rAviso;


</script>
