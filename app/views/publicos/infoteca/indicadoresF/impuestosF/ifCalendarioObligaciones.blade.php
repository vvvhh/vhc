@extends('layoutIndicadoresF')
@section('title')
Indicadores Fiscales | Vázquez Hernández Contadores, S. C.
@stop
@section('content')
<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">
              <!-- ******* -->
      <table class="table table-striped  table-bordered table-condensed">
    		<h2 class="text-center">	CALENDARIO DE OBLIGACIONES FISCALES 	</h2>
    		<h3 class="text-center">	Obligaciones correspondientes a Octubre 2016	</h3>
        <thead>
          	<tr  class="activoLiMenu">	<th class="text-center">	Fecha límite de presentacion día 10 	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          	<tr>	<th class="text-center">
              Presentar declaraciones informativas
            </td>	</tr>
        </tbody>
      </table>

    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
          <thead>
          	<tr  class="activoLiMenu">	<th class="text-center">	Obligación a cumplir	</th>	<th class="text-center">	Personas obligadas	</th>	<th class="text-center">	Forma de cumplir	</th>	<th class="text-center">	Fundamento legal	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          	<tr>	<td class="text-center">	Presentar información de las cuentas, los depósitos, servicios, fideicomisos, créditos o préstam​os otorgados a personas físicas y morales, o cualquier tipo de operaciones, para efectos del cobro de créditos fiscales firmes o del procedimiento administrativo de ejecución.
                   </td>	<td class="text-center">	Las entidades financieras y sociedades cooperativas de ahorro y préstamo.
                   </td>	<td class="text-center">	En la ADSC que corresponda al domicilio fiscal del contribuyente, o a través de la página de Internet del SAT, en la sección “Mi Portal”.
                   </td>	<td class="text-center">	Artículo 32-B, fracción IV del CFF. Regla 2.15.1 de la RMF y ficha 163/CFF del anexo 1-A de la RMF 2015.
                 </td>	</tr>
          	<tr>
              	<td class="text-center">Presentar información mensual a​l SAT de depósitos en ef​​​ectivo.
                </td>	<td class="text-center">	Instituciones del Sistema Financiero que opten por presentar la información de manera mensual.
                </td>	<td class="text-center">A través de la forma electrónica IDE-M “Declaración mensual de depósitos en efectivo”, contenida en el Anexo 1, rubro A, numeral 2.
                </td> <td class="text-center">	Artículo 55, fracción IV de la LISR. Regla 3.5.12 de la RMF 2016.
                </td>	</tr>
        </tbody>
      </table>
    </div>

  <table class="table table-striped  table-bordered table-condensed">
    <thead>
    	<tr  class="activoLiMenu">	<th class="text-center">	Fecha limite de presentacion el día 17	</th>	</tr>
    </thead>
 </table>
<!--
    <h4 class="text-center">	PERSONAS FÍSICAS	</h4>
    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
        <thead>
          <tr  class="activoLiMenu">	<th class="text-center">	CONTRIBUYENTE	</th>	<th class="text-center">	FORMA DE PRESENTACIÓN	</th>	<th class="text-center">	CONCEPTO A DECLARAR	</th>	<th class="text-center">	FUNDAMENTO	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          <tr>	<td class="text-center">	Arrendamiento de bienes inmuebles	                                                    </td>	<td class="text-center">	Con el Servicio de Declaraciones y Pagos (pago referenciado).</td>	<td class="text-center">	Pago provisional trimestral del ISR e IVA y entero de retenciones, en su caso.	     </td>	<td class="text-center">	Artículos 1-A y 5-D de la LIVA. Regla 2.8.5.1 de la RMF 2015.	                                            </td>	</tr>
          <tr>	<td class="text-center">	Salarios, en su caso, sólo ISR. Actividades Empresariales y Servicios Profesionales	  </td>	<td class="text-center">	Pago con línea de captura en los Bancos autorizados.         </td>	<td class="text-center">	Pago provisional o definitivo del ISR, IVA, IEPS y entero de retenciones, en su caso. </td>	<td class="text-center">	Artículos 90, 94, 96, 97, 106, 114 y 116 de la LISR; 1-A y 5-F de la LIVA;  Regla 2.8.5.1 de la RMF 2015.	</td>	</tr>
        </tbody>
      </table>
    </div>
<br>
    <h4 class="text-center">	PERSONAS MORALES	</h4>
    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
        <thead>
          <tr  class="activoLiMenu">	<th class="text-center">	CONTRIBUYENTE	</th>	<th class="text-center">	FORMA DE PRESENTACIÓN	</th>	<th class="text-center">	CONCEPTO A DECLARAR	</th>	<th class="text-center">	FUNDAMENTO	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          <tr>	<td class="text-center">	   </td>	<td class="text-center">	Con el servicio de declaraiones y pagos (pago referenciado)<br>Pago con línea de captura en los Bancos autorizados.</td>	<td class="text-center">	Pago provisional del ISR, IVA, IEPS y entero de retenciones. </td>	<td class="text-center">	Artículos 10, 12, 14, 71, 72, 74, 75, 84, 87, 96 y 106 de la LISR. Regla 2.8.5.1 de la RMF 2015.  </td>	</tr>

        </tbody>
      </table>
    </div>
    -->

    <!-- ********* -->
    <h4 class="text-center">
      	Pagos provisionales y definitivos
    </h4>
    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
        <thead>
          <tr  class="activoLiMenu">	<th class="text-center">	Obligación a cumplir</th>	<th class="text-center">Personas obligadas	</th>	<th class="text-center">	Forma de presentación	</th>	<th class="text-center">	Fundamento legal	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          <tr><td class="text-center">
            Pago provisional del ISR, IVA, IEPS y entero de retenciones.
           </td>	<td class="text-center">Personas morales
           </td>	<td class="text-center">Con el Servicio de Declaraciones y Pagos. Pago con línea de captura en los Bancos autorizados.
           </td>  <td class="text-center">Artículos 10, 12, 14, 71, 72, 74, 75, 84, 87, 96 y 106 de la LISR.Artículos 1-A y 5-D de la LIVA. Regla 2.8.5.1 de la RMF 2016.
           </td>	</tr>

           <tr><td class="text-center">	Pago provisional trimestral de ISR, IVA y entero de retenciones, en su caso.
          </td>	<td class="text-center"> Personas físicas: <br> Arrendamiento de bienes inmuebles
          </td>	<td class="text-center"> Con el Servicio de Declaraciones y Pagos. Pago con línea de captura en los Bancos autorizados.
          </td><td class="text-center"> Artículos 116, tercer párrafo de la LISR y 5-F de la LIVA.
          </td>	</tr>

           <tr><td class="text-center">	Pago provisional o definitivo del ISR, IVA, IEPS y entero de retenciones, en su caso.
          </td>	<td class="text-center"> Personas físicas: <br> Actividades Empresariales y Servicios Profesionales Arrendamiento de bienes inmuebles Salarios, en su caso, sólo ISR.
          </td>	<td class="text-center"> Con el Servicio de Declaraciones y Pagos. Pago con línea de captura en los Bancos autorizados.
          </td><td class="text-center"> Artículos 90, 94, 96, 97, 106, 114 y 116 de la LISR; 1-A y 5-F de la LIVA; Regla 2.8.5.1 de la RMF 2016.
          </td>	</tr>
        </tbody>
      </table>
    </div>


    </div>
  </div>
</div>

<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">
        <!-- ********* -->

      <h4 class="text-center">	ENTERO DE RETENCIONES ESPECIFICAS 	</h4>
      <div class="table-responsive">
        <table class="table table-striped  table-bordered table-condensed">
          <thead>
            <tr  class="activoLiMenu">	<th class="text-center">	Obligación a cumplir	</th>	<th class="text-center">	Personas obligadas	</th>	<th class="text-center">	Forma de presentación	</th>	<th class="text-center">	 	Fundamento legal	</th>	</tr>
          </thead>
          <tbody class="animEscalarFila">
            <tr><td class="text-center">Entero de la retención por ingresos devengados que obtengan las personas físicas propietarias de los certificados de fideicomisos accionarios a que se refiere la Regla 3.2.13.
                </td>	<td class="text-center">Intermediarios financieros.
                </td>	<td class="text-center">Servicio de Declaraciones y Pagos. Entero de retención: a través de los Bancos autorizados con la línea de captura.
                </td><td class="text-center">Regla 3.2.10. de la RMF 2016.
                </td>	</tr>
            <tr><td class="text-center">	Entero de la retención que se efectúe de pagos por intereses.
            </td>	<td class="text-center">Las instituciones que componen el sistema financiero.
            </td>	<td class="text-center">Servicio de Declaraciones y Pagos en el caso de las personas obligadas, a utilizar este servicio. <br> Entero de retención: a través de los Bancos autorizados con la línea de captura.
            </td><td class="text-center">Artículo 54 de la LISR.
            </td>	</tr>
          </tbody>
        </table>
      </div>
      <!-- ******************* -->
      </div>
    </div>
  </div>


  <div class="well transparenteClaroTxt">
    <div class="row">
      <div class="col-md-12">
          <!-- ****************************** -->

    <h4 class="text-center">	DECLARACIONES INFORMATIVAS 	</h4>
    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
        <thead>
          <tr  class="activoLiMenu">	<th class="text-center">	Información a presentar </th>	<th class="text-center">Personas obligadas 	</th>	<th class="text-center">	Forma de presentación 	</th>	<th class="text-center">	Fundamento legal 	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          <tr><td class="text-center">Información de las contraprestaciones o donativos recibidos en el mes inmediato anterior, en efectivo en moneda nacional o extranjera, así como en piezas de oro o plata, cuyo monto sea superior a 100,000 pesos.  
          </td>	<td class="text-center">Contribuyentes que perciban contraprestaciones o donativos en efectivo en moneda nacional o extranjera, así como en piezas de oro o plata, cuyo monto sea superior a 100,000 pesos.
          </td>	<td class="text-center">Declaración Informativa del Formulario 35. Dé clic aquí para obtener el programa electrónico para elaborar su declaración.
          </td><td class="text-center">Artículos 76, fracción XV, 82 fracción VII, 110, fracción VII, 118 fracción V y 128 de la LISR. Ficha de trámite 1/ISR del Anexo 1-A de la RMF 2016.
          </td>	</tr>
          <tr><td class="text-center">Precio de enajenación de cada producto (tabacos labrados), valor y volumen de los mismos, así como el peso total de tabacos labrados enajenados o, en su caso, total de cigarros enajenados.
          </td>	<td class="text-center">Productores e importadores de tabacos labrados.
          </td>	<td class="text-center">Esta información se presenta a través de la Declaración Informativa Múlti
          </td><td class="text-center">Artículo 19, fracción IX de la LIEPS. Reglas 5.2.1. y 5.2.16. de la RMF 2016.
          </td>	</tr>
          <tr><td class="text-center">Información relativa a operaciones realizadas con partes relacionadas o donantes en el mes inmediato anterior.
          </td>	<td class="text-center">Organizaciones civiles y fideicomisos autorizados para recibir donativos deducibles del ISR que realicen operaciones con partes relacionadas o donantes.
          </td>	<td class="text-center"> En el portal de internet del SAT con el programa electrónico Declaraci
          </td><td class="text-center">Artículo 82 fracción VIII de la LISR. Regla 3.10.12 de la RMF 2016. Ficha de trámite 20/ISR del Anexo 1-A de la RMF 2016.
          </td>	</tr>
        </tbody>
      </table>
    </div>
    <!-- ****************** -->
    </div>
  </div>
</div>



  <div class="well transparenteClaroTxt">
    <div class="row">
      <div class="col-md-12">
          <!-- *********** -->

    <p class="text-justify">
      Por decreto presidencial, los contribuyentes que de conformidad con las disposiciones fiscales deban presentar declaraciones provisionales o definitivas de impuestos federales a mas tardar el día 17 de abril, al periodo que corresponda la declaración, ya sea por impuestos propios o por retenciones, podrán presentarse a más tardar el dia que a continuación se señala considerando el sexto digito númerico del registro federal de contribuyentes (RFC), de acuerdo a lo siguiente:
    </p>
    <div class="table-responsive">
      <table class="table table-striped  table-bordered table-condensed">
        <thead>
          <tr  class="activoLiMenu">	<th class="text-center">	SEXTO DIGITO NUMERICO DE LA CLAVE DEL RFC	</th>	<th class="text-center">	FECHA LIMITE DE PAGO	</th>	</tr>
        </thead>
        <tbody class="animEscalarFila">
          <tr><td class="text-center">1 y 2</td>	<td class="text-center">18 de octubre 2016</td>	</tr>
          <tr><td class="text-center">3 y 4</td>	<td class="text-center">19 de octubre 2016</td>	</tr>
          <tr><td class="text-center">5 y 6</td>	<td class="text-center">20 de octubre 2016</td>	</tr>
          <tr><td class="text-center">7 y 8</td>	<td class="text-center">21 de octubre 2016</td>	</tr>
          <tr><td class="text-center">9 y 0</td>	<td class="text-center">24 de octubre 2016 </td>	</tr>
        </tbody>
      </table>
    </div>
    <!-- **************** -->
    </div>
  </div>
</div>


<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">
        <!-- ********************* -->

  <h4 class="text-center">
    PRESENTAR LOS SIGUIENTES PAGOS O DECLARACIONES A MAS TARDAR EL DIA 31
  </h4>
  <h4 class="text-center">
    Declaración Informativa de Operaciones con Terceros (DIOT)
  </h4>
  <div class="table-responsive">
    <table class="table table-striped  table-bordered table-condensed">
      <thead>
        <tr  class="activoLiMenu">	<th class="text-center">	Obligación	</th>	<th class="text-center">Personas obligadas	</th>	<th class="text-center">Forma de presentación	</th>	<th class="text-center">	Fundamento legal	</th>	</tr>
      </thead>
      <tbody class="animEscalarFila">
        <tr><td class="text-center">Presentar información sobre pago, retención, acreditamiento y traslado del IVA en las operaciones con los proveedores.
         </td>	<td class="text-center">Personas morales y físicas que sean sujetos del impuesto al valor agregado
         </td>	<td class="text-center">Formato electrónico A-29. Declaración Informativa de Operaciones con Terceros (DIOT)
         </td><td class="text-center">Artículo 32 fracciones V y VIII de la LIVA. Reglas 4.5.1 y 4.5.2 de la RMF 2016.
         </td>	</tr>
      </tbody>
    </table>
  </div>

  <br><br>
  <h4 class="text-center">
    Declaraciones Informativas de IEPS
  </h4>
  <div class="table-responsive">
    <table class="table table-striped  table-bordered table-condensed">
      <thead>
        <tr  class="activoLiMenu">	<th class="text-center">	Obligación  </th>	<th class="text-center">	Personas obligadas	</th>	<th class="text-center">Forma de presentación	</th>	<th class="text-center">	Fundamento legal	</th>	</tr>
      </thead>
      <tbody class="animEscalarFila">
        <tr><td class="text-center">	Presentar la relación de las personas a las que en el trimestre anterior les hubiere trasladado el IEPS en forma expresa y por separado.	</td> <td class="text-center">	Personas morales y físicas que trasladen en forma expresa y por separado el IEPS 	</td> <td class="text-center">	"Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y su Anexo 1.​"	</td> <td class="text-center">	​Artículo 19, fracción II de la LIEPS. Regla 5.2.2. de la RMF 2016.	</td> </tr>
        <tr><td class="text-center">	​Presentar información sobre sus 50 principales clientes y proveedores del trimestre inmediato anterior. 	</td> <td class="text-center">	​Personas morales y físicas que presten servicios de comisión, mediación, agencia, representación, correduría, consignación y correduría.	</td> <td class="text-center">	​Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y su Anexo 1.​	</td> <td class="text-center">	​Artículo 19, fracción VIII de la LIEPS. Regla 5.2.15. de la RMF 2016.	</td> </tr>
        <tr><td class="text-center">	​Reportar la lectura mensual de los registros de cada uno de los dispositivos que se utilicen para llevar el control físico de volumen fabricado, producido o envasado en el trimestre inmediato anterior.	</td> <td class="text-center">	​Personas morales y físicas fabricantes, productores o envasadores.	</td> <td class="text-center">	​Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y su Anexo 9.​	</td> <td class="text-center">	​Artículo 19, fracción X de la LIEPS. Regla 5.2.17. de la RMF 2016.	</td> </tr>
        <tr><td class="text-center">	​Información sobre el precio de enajenación de cada producto, valor y volumen de los mismos, efectuado en el trimestre inmediato anterior.	</td> <td class="text-center">	​Personas físicas y morales que enajenen o importen bebidas alcohólicas, energetizantes y combustibles fósiles.	</td> <td class="text-center">	​Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y su Anexo 1.​	</td> <td class="text-center">	​Artículo 19, fracción XIII de la LIEPS. Regla 5.2.21. de la RMF 2016.	</td> </tr>
        <tr><td class="text-center">	​Presentar informe que contenga el número de litros producidos de conformidad con el citado control, del trimestre inmediato anterior a la fecha en que se informa.	</td> <td class="text-center">	​Personas morales y físicas productoras de bebidas alcohólicas.	</td> <td class="text-center">	​Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y sus Anexos 4 o 5.​	</td> <td class="text-center">	​Artículo 19, fracción XVI de la LIEPS. Regla 5.2.26. de la RMF 2016.	</td> </tr>
        <tr><td class="text-center">	Presentar informe de los números de folio de marbetes y precintos, obtenidos, utilizados, destruidos, e inutilizados durante el trimestre inmediato anterior.	</td> <td class="text-center">	"  Personas morales y físicas por los marbetes y precintos con año de emisión 2012 y anteriores."	</td> <td class="text-center">	    Esta información se presenta a través de la Declaración Informativa Múltiple del IEPS (MULTI-IEPS) y su Anexo 6.​ 	</td> <td class="text-center">	  Artículo 19, fracción XV de la LIEPS. Reglas 5.2.24. y 5.2.25. de la RMF 2016. 	</td> </tr>


      </tbody>
    </table>
  </div>

  <br><br>
    <h4 class="text-center">
        Declaración Informativa - Donatarias Autorizadas
  </h4>
  <div class="table-responsive">
    <table class="table table-striped  table-bordered table-condensed">
      <thead>
        <tr  class="activoLiMenu">	<th class="text-center">	CONTRIBUYENTE	</th>	<th class="text-center">	FORMA DE PRESENTACIÓN	</th>	<th class="text-center">	CONCEPTO A DECLARAR	</th>	<th class="text-center">	FUNDAMENTO	</th>	</tr>
      </thead>
      <tbody class="animEscalarFila">
        <tr><td class="text-center">	Obligación	</td> <td class="text-center">	Personas obligadas	</td> <td class="text-center">	Forma de presentación	</td> <td class="text-center">	Fundamento legal	</td> </tr>
        <tr><td class="text-center">	​Presentar la información para garantizar la transparencia, así como el uso y destino de los donativos recibidos correspondiente al ejercicio fiscal 2015.	</td> <td class="text-center">	​Organizaciones civiles y fideicomisos autorizados para recibir donativos deducibles del ISR	</td> <td class="text-center">	​Portal de internet del SAT, a través del programa electrónico Transparencia de las Donatarias Autorizadas	</td> <td class="text-center">	Artículo 82, de la LISR. Regla 3.10.11. de la RMF 2016 y ficha de trámite 19/ISR del Anexo 1-A de la RMF 2016.	</td> </tr>

      </tbody>
    </table>
  </div>


  <!-- *************** -->
  </div>
</div>
</div>





@stop

@section('javascript')
<script>
$('#ulIFe').addClass('in');
$('#liFiCalendario').addClass('activoBorde');
</script>
@stop
