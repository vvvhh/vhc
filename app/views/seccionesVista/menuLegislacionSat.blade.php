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
  <br>
<table class="table">


  <div class="panel-group" id="accordion">
    <div class="panel panel-default ">
      <a  class="enlaceSimple2" data-toggle="collapse" data-parent="#accordion" href="#ulIFe">
      <div class="panel-heading">
        <h4 class="panel-title">
          Criterios
        </h4>
      </div>
      </a>
      <div id="ulIFe" class="panel-collapse collapse">
<!-- in -->
        <ul  class="colorNav" style="list-style-type: none">

             <li id="liCantidadesCFF" class="liInfoteca">
                 <a class="grisClaro "  id="liCriNormativo" style="cursor:pointer">
                   <p class="text-justify">- Criterios Normativos
                   </p>
                 </a>
             </li>

             <li id="liTarifasPp" class="liInfoteca">
                 <a class="grisClaro "  id="liCriAplicacion" style="cursor:pointer">
                   <p class="text-justify">- Criterios de aplicación en la operación aduanera
                   </p>
                 </a>
             </li>
             <li id="liTarifasDa" class="liInfoteca">
                 <a class="grisClaro "  id="liCriVinculativos" style="cursor:pointer">
                   <p class="text-justify">- Criterios no vinculativos de las disposiciones fiscales y aduaneras
                   </p>
                 </a>
             </li>
             <li id="liTReincos" class="liInfoteca">
                 <a class="grisClaro "  id="liCriProcedimientos" style="cursor:pointer">
                   <p class="text-justify">- Procedimientos en materia aduanera
                   </p>
                 </a>
             </li>
             <li id="liTSemestrales" class="liInfoteca">
                 <a class="grisClaro " id="liCriCPR" style="cursor:pointer">
                   <p class="text-justify">- Criterios a considerar por el CPR para elaborar la opinión sobre la imposibilidad financiera del contribuyente para cumplir sus créditos fiscales con recargos y multas
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
        Formas y formatos fiscales
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
          Instructivo de operación para la recepción de contribuciones al comercio exterior
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
                 <li id="liCalendario" class="liInfoteca">
                     <a class="grisClaro " href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssCalendario')}}">
                       <p>- Calendarios de obligaciones</p>
                     </a>
                 </li>
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
        Leyes fiscales y otros ordenamientos
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
        Manuales

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
        Modificaciones
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


    <div class="panel panel-default">
      <a class="enlaceSimple2"data-toggle="collapse" data-parent="#accordion" href="#ulCo">
      <div class="panel-heading">
        <h4 class="panel-title">
          Modificaciones
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


      <div class="panel panel-default">
        <a class="enlaceSimple2"data-toggle="collapse" data-parent="#accordion" href="#ulCo">
        <div class="panel-heading">
          <h4 class="panel-title">
            Otras disposiciones fiscales publicadas en el Diario Oficial de la Federación

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



        <div class="panel panel-default">
          <a class="enlaceSimple2"data-toggle="collapse" data-parent="#accordion" href="#ulCo">
          <div class="panel-heading">
            <h4 class="panel-title">
              Tesis y sentencias
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
