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
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifIsr-pp')}}">
                   <p>- Tarifas y tablas ISR-PP</p>
                 </a>
             </li>
             <li id="liTarifasDa" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifIsr-da')}}">
                   <p>- Tarifas y tablas ISR-DA</p>
                 </a>
             </li>
             <li id="liTReincos" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifReincos')}}">
                   <p>- Tablas de cuotas fijas para reincos</p>
                 </a>
             </li>
             <li id="liTSemestrales" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifTSemestralesPrimario')}}">
                   <p>- Tarifas semestrales sector primario</p>
                 </a>
             </li>
             <li id="liTSueldos" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifTSueldosSalarios')}}">
                   <p>- Tablas y tarifas para sueldos y salarios, semanales, diarias, decenal, quincenal</p>
                 </a>
             </li>
             <li id="liTArrendamiento" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifTArrendamientoTrimestral')}}">
                   <p>- Tarifa mensual y trimestral de arrendamiento</p>
                 </a>
             </li>
             <li id="liTActividades" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifTMensualActividad')}}">
                   <p>- Tarifa mensual actividades empresariales y profesionales</p>
                 </a>
             </li>

           <li id="liFiCalendario" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifCalendarioObligaciones')}}">
                   <p>- Calendario de obligaciones</p>
                 </a>
           </li>

           <li id="liTRecargos2" class="liInfoteca">
             <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifTasasRecargo2')}}">
                 <p>- Tasas de recargos
             </a>
           </li>

           <li id="liInstituciones" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifInstitucionesCredito')}}">
                   <p>- Instituciones de crédito autorizadas para recibir declaraciones</p>
                 </a>
             </li>
           </li>

           <li id="liDSat" class="liInfoteca">
               <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifDirectorioSat')}}">
                 <p>- Directorio de oficinas del SAT DF
               </a>
           </li>

           <li id="liPagosDerecho" class="liInfoteca">
               <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/impuestosF/ifPagarDerechos')}}">
                 <p>- Cantidades a pagar por concepto de derecho 2016
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
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiEquivalenciaDolar')}}">
                   <p>- Equivalencia del dólar</p>
                 </a>
             </li>
             <li id="liEquivalenciaO" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiEquivalenciaO')}}">
                   <p>- Equivalencia de otras monedas</p>
                 </a>
             </li>
             <li id="liIncp" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiIncp')}}">
                   <p>- INPC</p>
                 </a>
             </li>
             <li id="liCetes" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiCetes')}}">
                   <p>- CETES</p>
                 </a>
             </li>
             <li id="liCppc" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiCppc')}}">
                   <p>- CPP</p>
                 </a>
             </li>
             <li id="liTiie" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiTiie')}}">
                   <p>- TIIE</p>
                 </a>
             </li>
             <li id="liUdis" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiUdis')}}">
                   <p>- UDIS</p>
                 </a>
             </li>
             <li id="liInflacion" class="liInfoteca">
                 <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/financiero/fiInflacion')}}">
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
                     <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssCuotasImss')}}">
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
                     <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssSancion')}}">
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
                      <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/lavadoD/ldLimite')}}">
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
                       <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/laboral/laSalario')}}">
                         <p>- Salarios mínimos generales</p>
                       </a>
                   </li>
                   <li id="liSalarioP"  class="liInfoteca">
                       <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/laboral/laSalarioProfecionales')}}">
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
                       <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/comercioE/coMultasLeyAduanera')}}">
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
  var absoluta="/vhc/vhc/";

  aCFF=document.getElementById('aCFF');

  var rCFF="publicos/infoteca/indicadoresF/impuestosF/ifCantidadesCFF.php"

  aInicio.href="http://"+dominio+absoluta+rCFF;

</script>
