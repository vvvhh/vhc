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
          <!-- ******************** -->
<h3 class="text-center">	Tarifa aplicable a pagos provisionales </h3>

<thead>
<tr  class="activoLiMenu">	<th class="text-center">	Límite inferior $	</th>	<th class="text-center">	Límite superior $	</th>	<th class="text-center">	Cuota fija $	</th>	<th class="text-center">	Por ciento para aplicarse sobre el excedente del límite inferior %	</th>	</tr>
<tbody class="animEscalarFila">
<tr>	<td class="text-center">	0.01	      </td>	<td class="text-center">	5,952.84	   </td>	<td class="text-center">	0	        </td>	<td class="text-center">	1.92	 </td>	</tr>
<tr>	<td class="text-center">	5,952.85	  </td>	<td class="text-center">	50,524.92	   </td>	<td class="text-center">	114.29	  </td>	<td class="text-center">	6.4	   </td>	</tr>
<tr>	<td class="text-center">	50,524.93	  </td>	<td class="text-center">	88,793.04	   </td>	<td class="text-center">	2,966.91	</td>	<td class="text-center">	10.88	 </td>	</tr>
<tr>	<td class="text-center">	88,793.05	  </td>	<td class="text-center">	103,218.00	 </td>	<td class="text-center">	7,130.48	</td>	<td class="text-center">	16	   </td>	</tr>
<tr>	<td class="text-center">	103,218.01  </td>	<td class="text-center">	123,580.20	 </td>	<td class="text-center">	9,438.47	</td>	<td class="text-center">	17.92	 </td>	</tr>
<tr>	<td class="text-center">	123,580.21  </td>	<td class="text-center">	249,243.48	 </td>	<td class="text-center">	13,087.37	</td>	<td class="text-center">	21.36	 </td>	</tr>
<tr>	<td class="text-center">	249,243.49  </td>	<td class="text-center">	392,841.96	 </td>	<td class="text-center">	39,929.05	</td>	<td class="text-center">	23.52	 </td>	</tr>
<tr>	<td class="text-center">	392,841.97  </td>	<td class="text-center">	750,000.00	 </td>	<td class="text-center">	73,703.41	</td>	<td class="text-center">	30	   </td>	</tr>
<tr>	<td class="text-center">	750,000.01  </td>	<td class="text-center">	1,000,000.00 </td>	<td class="text-center">	180,850.82</td>	<td class="text-center">	32	   </td>	</tr>
<tr>	<td class="text-center">	1,000,000.01 </td><td class="text-center">	3,000,000.00 </td>	<td class="text-center">	260,850.81</td>	<td class="text-center">	34	   </td>	</tr>
<tr>	<td class="text-center">	3,000,000.01 </td><td class="text-center">	En adelante	 </td>	<td class="text-center">	940,850.81</td>	<td class="text-center">	35	   </td>	</tr>

</tbody>
<!-- **************** -->
      </table>
    </div>
  </div>
</div>
</div>
@stop

@section('javascript')
<script>
  $('#ulIFe').addClass('in');
  $('#liTarifasPp').addClass('activoBorde');
</script>
@stop
