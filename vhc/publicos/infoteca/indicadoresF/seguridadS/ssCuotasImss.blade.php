@extends('layoutIndicadoresF')

@section('head')
@stop

@section('title')
  Indicadores Fiscales | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">

          <div class="table-responsive" >
            <table class="table table-striped  table-bordered table-condensed">
                <!-- ************ -->

                <h3 class="text-center">	Cuotas obrero-patronales del IMSS y aportaciones del Infonavit </h3>
                <thead>
	<tr  class="activoLiMenu">	<th colspan="8" class="text-center">	VIGENTE A PARTIR DEL 1o DE JULIO DE 1997 Y A LA FECHA	</th>													</tr>
	<tr  class="activoLiMenu">	<th colspan="8" class="text-center">	REGIMEN OBLIGATORIO	</th>													</tr>
  <tr >	<th class="text-center">	Artículo L.S.S.	</th>	<th  class="text-center">	Ramo	</th>	<th class="text-center">	Observaciones	</th>	<th class="text-center">	Cuota patronal	</th>	<th class="text-center">	Cuota trabajador	</th>	<th class="text-center">	Cuota estado	</th>	</tr>

</thead>

<tbody class="animEscalarFila">
<tr>	<td>	25	  </td>	<td >	ENFERMEDADES Y MATERNIDAD PENSIONADOS ( y sus beneficiarios )	  </td>	<td>	Prestaciones en especie:	  </td>	<td class="text-center">	1.05% del SBC	  </td>	<td class="text-center">	0.375% del SBC	  </td>	<td class="text-center">	0.75%	  </td>	</tr>
<tr>	<td>	74	  </td>	<td>	RIESGOS DE TRABAJO	  </td>	<td>	Mínimo Máximo	  </td>	<td class="text-center">	0.50% 15.00 %	  </td>	<td class="text-center">		  </td>	<td class="text-center">		  </td>	</tr>
<tr>	<td rowspan="3">	106,107	  </td>	<td rowspan="3">	ENFERMEDADES Y MATERNIDAD	  </td>	<td>	Prestaciones en especie: <br> más:	  </td>	<td class="text-center">	20.40% SMG (1)	  </td>	<td class="text-center">		  </td>	<td class="text-center">	20.40% SMG (4)	  </td>	</tr>
<tr>							<td>	Para salarios mayores a 3 veces S.M.G.	  </td>	<td class="text-center">	1.10% de la diferencia entre SBC y 3 SMG (2)	  </td>	<td class="text-center">	0.40% de la diferencia entre SBC y 3 SMG (3)	  </td>	<td class="text-center">		  </td>	</tr>
<tr>							<td>	En dinero:	  </td>	<td class="text-center">	70% del 1% del SBC	  </td>	<td class="text-center">	25% del 1% del SBC	  </td>	<td class="text-center">	5% del 1% del SBC	  </td>	</tr>
<tr>	<td>	147	  </td>	<td>	INVALIDEZ Y VIDA	  </td>	<td>		  </td>	<td class="text-center">	1.75% SBC	  </td>	<td class="text-center">	0.625% SBC	  </td>	<td class="text-center">	125,00%	  </td>	</tr>
<tr>	<td>	168	  </td>	<td>	RETIRO, CESANTIA Y VEJEZ	  </td>	<td>	Retiro Cesantía y vejez Cuota Social	  </td>	<td class="text-center">	2% SBC 3.150% SBC	  </td>	<td class="text-center">	1.125% SBC	  </td>	<td class="text-center">	0.225% SBC 5.5% SMG	  </td>	</tr>
<tr>	<td>	211	  </td>	<td>	GUARDERIAS Y PRESTACIONES SOCIALES	  </td>	<td>		  </td>	<td class="text-center">	1% SBC	  </td>	<td class="text-center">		  </td>	<td class="text-center">		  </td>	</tr>
<tr>	<td>	242 106-III	  </td>	<td>	SEGURO DE SALUD	  </td>	<td>	REGIMEN VOLUNTARIO	  </td>	<td class="text-center">	REGIMEN VOLUNTARIO	  </td>	<td class="text-center">	22.4% SMG Es cuota anual	  </td>	<td class="text-center">		  </td>	</tr>




</tbody>


            <!-- *************** -->
            </table>
          </div>
          <p>
            SMG =Salario mínimo general para el Distrito Federal
          </p>
          <p>
            SBC = Salario base de cotización
          </p>
      </div>
    </div>
  </div>


  <div class="well transparenteClaroTxt">
    <div class="row">
      <div class="col-md-12">

            <div  >
              <table class="table table-striped  table-bordered table-condensed">
                  <!-- ***************** -->
                  <thead>
                  	<tr  class="activoLiMenu">	<th colspan="8" class="text-center">	Infonavit	</th>	</tr>
                  	<tr  class="activoLiMenu">	<th colspan="8" class="text-center">	Cuotas	</th>	</tr>
                  	<tr >	<th class="text-center">	Fundamento	</th>	<th class="text-center">	Del patrón	</th>	<th class="text-center">	Del trabajador	</th>	<th class="text-center">	Total patrón	</th>	<th class="text-center">	Del Estado	</th>	</tr>
                  </thead>
                  <tbody class="animEscalarFila">
                  	<tr>	<td>	Artículo 29, fracción II, de la Linfonavit	  </td>	<td>	5.00% del SBC	  </td>	<td>	0.00%	  </td>	<td>	5.00% del SBC	  </td>	<td colspan="2">	0.00%	  </td>	</tr>
                  </tbody>
                  <!-- ************* -->
              </table>
            </div>
        </div>
    </div>
</div>

<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">

          <div  >
            <table class="table table-striped  table-bordered table-condensed">
              <!-- ********************** -->
              <thead>
              <tr  class="activoLiMenu ">	<th class="col-md-12 text-center">	Notas	</th>	</tr>
              </thead>

              <tbody class="animEscalarFila">
              <tr>	<td>	1.  El artículo 74 de la LSS establece la obligación para las empresas de revisar anualmente su siniestralidad en la que se determinará el porcentaje de prima con la que se pagará el seguro de riesgos de trabajo. 	  </td>	</tr>
              <tr>	<td>	2.  Según el artículo 148 de la LSS, la contribución del Estado para los seguros de invalidez y vida será igual al 7.143% del total de las cuotas patronales; por tanto, el porcentaje del Estado se obtuvo de multiplicar la cuota de éste en el seguro de invalidez por la cuota patronal por dicho seguro, que es de 1.75% (1.75% x 7.143% = 0.125%). 	  </td>	</tr>
              <tr>	<td>	3.  En términos del artículo 168, fracción III, de la LSS, la aportación estatal en los ramos de cesantía en edad avanzada y vejez será de 7.143% del total de las cuotas patronales de estos ramos. De ahí que la aportación del Estado se obtuvo de multiplicar el porcentaje que aporta para este seguro por la cuota patronal del mismo (3.15% x 7.143%). 	  </td>	</tr>
              <tr>	<td>	4.  Conforme al artículo primero transitorio del Decreto por el que se reforman diversas disposiciones de la Ley del Seguro Social, publicado en el DOF el 26 de mayo de 2009, lo estipulado en el artículo 168, fracción IV, de la LSS está vigente desde el bimestre de cotización siguiente a su publicación; es decir, a partir del cuarto bimestre de 2009, que corresponde a los meses de julio y agosto del mismo año. Es de señalar que los valores relativos a la cuota social se actualizarán de manera trimestral de acuerdo con el INPC, en marzo, junio, septiembre y diciembre de cada año. 	  </td>	</tr>
              </tbody>
              <!-- ********************* -->
            </table>
          </div>

      </div>
    </div>
</div>

@stop
@section('javascript')
<script>
  $('#ulSS').addClass('in');
  $('#liCuotas').addClass('activoBorde');
</script>
@stop
