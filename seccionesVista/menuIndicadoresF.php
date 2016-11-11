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
</style>

<div class="table-responsive tamMenu" >
<table class="table">


  <div class="panel-group" id="accordion">
    <div class="panel panel-default ">
      <a  class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulIFe">
      <div class="panel-heading">
        <h4 class="panel-title">
          Impuestos Federales
        </h4>
      </div>
      </a>
      <div id="ulIFe" class="panel-collapse collapse">
<!-- in -->
        <ul  class="colorNav" style="list-style-type: none">

             <li id="liCantidadesCFF" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aCFF">
                   <p>- Cantidades actualizadas CFF</p>
                 </a>
             </li>

             <li id="liTarifasPp" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTarifasPp">
                   <p>- Tarifas y tablas ISR-PP</p>
                 </a>
             </li>
             <li id="liTarifasDa" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTarifaDa">
                   <p>- Tarifas y tablas ISR-DA</p>
                 </a>
             </li>
             <li id="liTReincos" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aReincos">
                   <p>- Tablas de cuotas fijas para reincos</p>
                 </a>
             </li>
             <li id="liTSemestrales" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aSemestralesP">
                   <p>- Tarifas semestrales sector primario</p>
                 </a>
             </li>
            <!--   <li id="liTSueldos" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTSueldos">
                   <p>- Tablas y tarifas para sueldos y salarios, semanales, diarias, decenal, quincenal</p>
                 </a>
             </li>
             -->
             <li id="liTArrendamiento" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aArrendamiento">
                   <p>- Tarifa mensual y trimestral de arrendamiento</p>
                 </a>
             </li>
             <li id="liTActividades" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTProfesionales">
                   <p>- Tarifa mensual actividades empresariales y profesionales</p>
                 </a>
             </li>

           <li id="liFiCalendario" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aCObligaciones">
                   <p>- Calendario de obligaciones</p>
                 </a>
           </li>

           <li id="liTRecargos2" class="liInfoteca">
             <a class="grisClaro " href="#" id="aTRecargos">
                 <p>- Tasas de recargos
                 </p>
             </a>
           </li>

           <li id="liInstituciones" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aInstituciones">
                   <p>- Instituciones de crédito autorizadas para recibir declaraciones</p>
                 </a>
             </li>
           </li>

           <li id="liDSat" class="liInfoteca">
               <a class="grisClaro " href="#" id="aDirectorio">
                 <p>- Directorio de oficinas del SAT DF
                 </p>
               </a>
           </li>

           <li id="liPagosDerecho" class="liInfoteca">
               <a class="grisClaro " href="#" id="aCantidadesPagar">
                 <p>- Cantidades a pagar por concepto de derecho 2016
                 </p>
               </a>
           </li>

         </ul>

      </div>


    </div>




    <div class="panel panel-default">
        <a class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulFi">
      <div class="panel-heading">
        <h4 class="panel-title">
        Financiero
        </h4>
      </div>
      </a>
      <div id="ulFi" class="panel-collapse collapse">


        <ul  class="colorNav" style="list-style-type: none">
             <li id="liEquivalencia" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aDolar">
                   <p>- Equivalencia del dólar</p>
                 </a>
             </li>
             <li id="liEquivalenciaO" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aOtrasMonedas">
                   <p>- Equivalencia de otras monedas</p>
                 </a>
             </li>
             <li id="liIncp" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aInpc">
                   <p>- INPC</p>
                 </a>
             </li>
             <li id="liCetes" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aCetes">
                   <p>- CETES</p>
                 </a>
             </li>
             <li id="liCppc" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aCppc">
                   <p>- CPP</p>
                 </a>
             </li>
             <li id="liTiie" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTiie">
                   <p>- TIIE</p>
                 </a>
             </li>
             <li id="liUdis" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aUdis">
                   <p>- UDIS</p>
                 </a>
             </li>
             <li id="liInflacion" class="liInfoteca">
                 <a class="grisClaro " href="#" id="aTasaP">
                   <p>- Tasa porcentual de inflación</p>
                 </a>
             </li>




           <!--    <li id="liTRepecos">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiTRepecos')}}">
                   - Tablas de cuotas fijas para repecos
                 </a>
             </li>-->

         </ul>






      </div>
    </div>





    <div class="panel panel-default">
      <a class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulSS">
      <div class="panel-heading">
        <h4 class="panel-title">
          Seguridad social
        </h4>
      </div>
      </a>
      <div id="ulSS"  class="panel-collapse collapse">

        <ul class="colorNav liInfoteca" style="list-style-type: none">
                 <li id="liCuotas" class="liInfoteca">
                     <a class="grisClaro " href="#" id="aCImss">
                       <p>- Cuotas al IMSS e INFONAVIT</p>
                     </a>
                 </li>
            <!--       <li id="liCalendario" class="liInfoteca">
                     <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssCalendario')}}">
                       <p>- Calendarios de obligaciones</p>
                     </a>
                 </li>
                 -->
                 <li id="liSanciones" class="liInfoteca">
                     <a class="grisClaro " href="#" id="aSanciones">
                       <p>- Sanciones establecidas LSS e INFONAVIT</p>
                     </a>
                 </li>
             </ul>


      </div>
    </div>




  <div class="panel panel-default">
    <a class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulLd">
    <div class="panel-heading">
      <h4 class="panel-title">
        Lavado de dinero
      </h4>
    </div>
    </a>
    <div id="ulLd" class="panel-collapse collapse">

      <ul  class="colorNav liInfoteca" style="list-style-type: none">
                  <li id="liLimite" class="liInfoteca">
                      <a class="grisClaro " href="#" id="aVulnerables">
                        <p>- Catálogo de actividades vulnerables</p>
                      </a>
                  </li>
      </ul>
    </div>
  </div>



  <div class="panel panel-default">
    <a class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulLa">
    <div class="panel-heading">
      <h4 class="panel-title">
        Laboral
      </h4>
    </div>
    </a>
    <div id="ulLa"  class="panel-collapse collapse">

      <ul class="colorNav liInfoteca" style="list-style-type: none">
                   <li id="liSalario"  class="liInfoteca">
                       <a class="grisClaro " href="#" id="aSalarioM">
                         <p>- Salarios mínimos generales</p>
                       </a>
                   </li>
                   <li id="liSalarioP"  class="liInfoteca">
                       <a class="grisClaro " href="#" id="aSalarioP">
                         <p>- Salarios mínimos profesionales</p>
                       </a>
                   </li>
      </ul>
    </div>
  </div>



  <div class="panel panel-default">
    <a class="enlaceSimple2"data-toggle="collapse" data-parent="#accordion" href="#ulCo">
    <div class="panel-heading">
      <h4 class="panel-title">
        Comercio exterior
      </h4>
    </div>
    </a>
    <div id="ulCo" class="panel-collapse collapse">

      <ul  class="colorNav liInfoteca" style="list-style-type: none">
                   <li id="liMultas" class="liInfoteca">
                       <a class="grisClaro " href="#" id="aMultas">
                         <p>- Multas ley aduanera</p>
                       </a>
                   </li>
      </ul>

    </div>
  </div>


  </div>



</table>
</div>
  <br>
  <a class="btn btn-primary btn-block"  href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar </span></a>


<script type="text/javascript">

  var dominio=window.location.host;
  var absoluta="/vhc/";

  aCFF=document.getElementById('aCFF');
  aTarifasPp=document.getElementById('aTarifasPp');
  aTarifaDa=document.getElementById('aTarifaDa');
  aReincos=document.getElementById('aReincos');
  aSemestralesP=document.getElementById('aSemestralesP');
//  aTSueldos=document.getElementById('aTSueldos');
  aArrendamiento=document.getElementById('aArrendamiento');
  aTProfesionales=document.getElementById('aTProfesionales');
  aCObligaciones=document.getElementById('aCObligaciones');
  aTRecargos=document.getElementById('aTRecargos');
  aInstituciones=document.getElementById('aInstituciones');
  aDirectorio=document.getElementById('aDirectorio');
  aCantidadesPagar=document.getElementById('aCantidadesPagar');
  aDolar=document.getElementById('aDolar');
  aOtrasMonedas=document.getElementById('aOtrasMonedas');
  aInpc=document.getElementById('aInpc');
  aCetes=document.getElementById('aCetes');
  aCppc=document.getElementById('aCppc');
  aTiie=document.getElementById('aTiie');
  aUdis=document.getElementById('aUdis');
  aTasaP=document.getElementById('aTasaP');
  aCImss=document.getElementById('aCImss');
  aSanciones=document.getElementById('aSanciones');
  aVulnerables=document.getElementById('aVulnerables');
  aSalarioM=document.getElementById('aSalarioM');
  aSalarioP=document.getElementById('aSalarioP');
  aMultas=document.getElementById('aMultas');


  var rCFF="publicos/infoteca/indicadoresF/impuestosF/ifCantidadesCFF.php";
  var rTarifasPp="publicos/infoteca/indicadoresF/impuestosF/ifIsr-pp.php";
  var rTarifaDa= "publicos/infoteca/indicadoresF/impuestosF/ifIsr-da.php";
  var rReincos= "publicos/infoteca/indicadoresF/impuestosF/ifReincos.php";
  var rSemestralesP= "publicos/infoteca/indicadoresF/impuestosF/ifTSemestralesPrimario.php";
  var rTSueldos= "publicos/infoteca/indicadoresF/impuestosF/ifTSueldosSalarios.php";
  var rArrendamiento = "publicos/infoteca/indicadoresF/impuestosF/ifTArrendamientoTrimestral.php";
  var rTProfesionales = "publicos/infoteca/indicadoresF/impuestosF/ifTMensualActividad.php";
  var rCObligaciones = "publicos/infoteca/indicadoresF/impuestosF/ifCalendarioObligaciones.php";
  var rTRecargos = "publicos/infoteca/indicadoresF/impuestosF/ifTasasRecargo2.php";
  var rInstituciones = "publicos/infoteca/indicadoresF/impuestosF/ifInstitucionesCredito.php";
  var rDirectorio = "publicos/infoteca/indicadoresF/impuestosF/ifDirectorioSat.php";
  var rCantidadesPagar = "publicos/infoteca/indicadoresF/impuestosF/ifPagarDerechos.php";
  var rDolar = "publicos/infoteca/indicadoresF/financiero/fiEquivalenciaDolar.php";
  var rOtrasMonedas = "publicos/infoteca/indicadoresF/financiero/fiEquivalenciaO.php";
  var rINPC = "publicos/infoteca/indicadoresF/financiero/fiIncp.php";
  var rCetes = "publicos/infoteca/indicadoresF/financiero/fiCetes.php";
  rCppc ="publicos/infoteca/indicadoresF/financiero/fiCppc.php";
  rTiie  ="publicos/infoteca/indicadoresF/financiero/fiTiie.php";
  rUdis = "publicos/infoteca/indicadoresF/financiero/fiUdis.php";
  rTasaP = "publicos/infoteca/indicadoresF/financiero/fiInflacion.php";
  rcImss = "publicos/infoteca/indicadoresF/seguridadS/ssCuotasImss.php";
  rSanciones = "publicos/infoteca/indicadoresF/seguridadS/ssSancion.php";
  rVulnerables = "publicos/infoteca/indicadoresF/lavadoD/ldLimite.php";
  rSalarioM = "publicos/infoteca/indicadoresF/laboral/laSalario.php";
  rSalarioP = "publicos/infoteca/indicadoresF/laboral/laSalarioProfecionales.php";
  rMultas = "publicos/infoteca/indicadoresF/comercioE/coMultasLeyAduanera.php";


  aCFF.href="http://"+dominio+absoluta+rCFF;
  aTarifasPp.href="http://"+dominio+absoluta+rTarifasPp;
  aTarifaDa.href="http://"+dominio+absoluta+rTarifaDa;
  aReincos.href="http://"+dominio+absoluta+rReincos;
  aSemestralesP.href="http://"+dominio+absoluta+rSemestralesP;
//  aTSueldos.href="http://"+dominio+absoluta+rTSueldos;
  aArrendamiento.href="http://"+dominio+absoluta+rArrendamiento;
  aTProfesionales.href="http://"+dominio+absoluta+rTProfesionales;
  aCObligaciones.href="http://"+dominio+absoluta+rCObligaciones;
  aTRecargos.href="http://"+dominio+absoluta+rTRecargos;
  aInstituciones.href="http://"+dominio+absoluta+rInstituciones;
  aDirectorio.href="http://"+dominio+absoluta+rDirectorio;
  aCantidadesPagar.href="http://"+dominio+absoluta+rCantidadesPagar;
  aDolar.href="http://"+dominio+absoluta+rDolar;
  aOtrasMonedas.href="http://"+dominio+absoluta+rOtrasMonedas;
  aInpc.href="http://"+dominio+absoluta+rINPC;
  aCetes.href="http://"+dominio+absoluta+rCetes;
  aCppc.href="http://"+dominio+absoluta+rCppc;
  aTiie.href="http://"+dominio+absoluta+rTiie;
  aUdis.href="http://"+dominio+absoluta+rUdis;
  aTasaP.href="http://"+dominio+absoluta+rTasaP;
  aCImss.href="http://"+dominio+absoluta+rcImss;
  aSanciones.href="http://"+dominio+absoluta+rSanciones;
  aVulnerables.href="http://"+dominio+absoluta+rVulnerables;
  aSalarioM.href="http://"+dominio+absoluta+rSalarioM;
  aSalarioP.href="http://"+dominio+absoluta+rSalarioP;
  aMultas.href="http://"+dominio+absoluta+rMultas;

</script>
