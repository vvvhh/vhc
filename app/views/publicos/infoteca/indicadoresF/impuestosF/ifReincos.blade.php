@extends('layoutIndicadoresF')
@section('title')
Indicadores Financieros | Vázquez Hernández Contadores, S. C.
@stop
@section('content')
<div class="well transparenteClaroTxt">
  <div class="row">
    <div class="col-md-12">
     <div class="table-responsive">
            <table class="table table-striped  table-bordered table-condensed">
          <!-- *********** -->
          <h3 class="text-center">	CUOTAS FIJAS PARA REINCOS	</h3>
<h4 class="text-center">	Tarifa bimestral	</h4>

<thead>
<tr  class="activoLiMenu">	<th class="text-center">	Límite inferior $	</th>	<th class="text-center">	Límite superior $	</th>	<th class="text-center">	Cuota fija $	</th>	<th class="text-center">	Por ciento para aplicarse sobre el excedente del límite inferior %	</th>	</tr>
<tbody class="animEscalarFila">
<tr>	<td class="text-center">	0.01	  </td>	<td class="text-center">	992.14	  </td>	<td class="text-center">	0.00	  </td>	<td class="text-center">	1.92%	  </td>	</tr>
<tr>	<td class="text-center">	992.15	  </td>	<td class="text-center">	8,420.82	  </td>	<td class="text-center">	19.04	  </td>	<td class="text-center">	6.40%	  </td>	</tr>
<tr>	<td class="text-center">	8,420.83	  </td>	<td class="text-center">	14,798.84	  </td>	<td class="text-center">	494.48	  </td>	<td class="text-center">	10.88%	  </td>	</tr>
<tr>	<td class="text-center">	14,798.85	  </td>	<td class="text-center">	17,203.00	  </td>	<td class="text-center">	1,188.42	  </td>	<td class="text-center">	16.00%	  </td>	</tr>
<tr>	<td class="text-center">	17,203.01	  </td>	<td class="text-center">	20,596.70	  </td>	<td class="text-center">	1,573.08	  </td>	<td class="text-center">	17.92%	  </td>	</tr>
<tr>	<td class="text-center">	20,596.71	  </td>	<td class="text-center">	41,540.58	  </td>	<td class="text-center">	2,181.22	  </td>	<td class="text-center">	21.36%	  </td>	</tr>
<tr>	<td class="text-center">	41,540.59	  </td>	<td class="text-center">	65,473.66	  </td>	<td class="text-center">	6,654.84	  </td>	<td class="text-center">	23.52%	  </td>	</tr>
<tr>	<td class="text-center">	65,473.67	  </td>	<td class="text-center">	125,000.00	  </td>	<td class="text-center">	12,283.90	  </td>	<td class="text-center">	30.00%	  </td>	</tr>
<tr>	<td class="text-center">	125,000.01	  </td>	<td class="text-center">	166,666.67	  </td>	<td class="text-center">	30,141.80	  </td>	<td class="text-center">	32.00%	  </td>	</tr>
<tr>	<td class="text-center">	166,666.68	  </td>	<td class="text-center">	500,000.00	  </td>	<td class="text-center">	43,475.14	  </td>	<td class="text-center">	34.00%	  </td>	</tr>
<tr>	<td class="text-center">	500,000.01	  </td>	<td class="text-center">	En adelante	  </td>	<td class="text-center">	156,808.46	  </td>	<td class="text-center">	35.00%	  </td>	</tr>

</tbody>

          <!-- ********************** -->
                </table>
              </div>
            </div>
          </div>
          </div>

          <div class="well transparenteClaroTxt">
            <div class="row">
              <div class="col-md-12">
               <div class="table-responsive">
                      <table class="table table-striped  table-bordered table-condensed">
                    <!-- *********** -->
          <h4 class="text-center">	Reducción del ISR a pagar	</h4>
<thead>
<tr  class="activoLiMenu">	<th class="text-center" colspan="11">	Reducción del impuesto sobre la renta a pagar en el régimen de incorporación	</th>	</tr>
<tbody class="animEscalarFila">
<tr>	<td class="text-center">	Años	  </td>	<td class="text-center">	1	  </td>	<td class="text-center">	2	  </td>	<td class="text-center">	3	  </td>	<td class="text-center">	4	  </td>	<td class="text-center">	5	  </td>	<td class="text-center">	6	  </td>	<td class="text-center">	7	  </td>	<td class="text-center">	8	  </td>	<td class="text-center">	9	  </td>	<td class="text-center">	10	  </td>	</tr>
<tr>	<td class="text-center">	Por la prestación de información de ingresos, derogaciones y proveedores	  </td>	<td class="text-center">	100%	  </td>	<td class="text-center">	90%	  </td>	<td class="text-center">	80%	  </td>	<td class="text-center">	70%	  </td>	<td class="text-center">	60%	  </td>	<td class="text-center">	50%	  </td>	<td class="text-center">	40%	  </td>	<td class="text-center">	30%	  </td>	<td class="text-center">	20%	  </td>	<td class="text-center">	10%	  </td>

</tbody>
<!-- ******************** -->
      </table>
    </div>
  </div>
</div>
</div>

@stop

@section('javascript')
<script>
  $('#ulIFe').addClass('in');
  $('#liTReincos').addClass('activoBorde');
</script>
@stop
