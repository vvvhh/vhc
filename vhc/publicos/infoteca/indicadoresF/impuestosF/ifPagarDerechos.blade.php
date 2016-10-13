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
          <!-- **************** -->
          <h3 class="text-center">
            Cantidades a pagar por concepto de derecho 2016
          </h3>

          <thead>


	<tr class="activoLiMenu">
		<th>	Concepto​	</th>	<th>	 	Importe en m.n.​	</th>
	</tr>
</thead>

          <tbody>
          	<tr>	<td>	Pago de derechos por solicitar copias certificadas de documentos​	  </td>	<td class="text-center">	17.63 </td>
            </tr>
            <tr>
                <td>
                  Pago de derechos por solicitar constancias
                </td>
                <td class="text-center">
                     	149.55
                </td>
            </tr>
            <tr>
              <td>
                Pago de derechos por marbetes que se adhieren a los envases de bebidas alcohólicas, por cada uno​
              </td>
              <td class="text-center">
                 	0.3966​
              </td>
            </tr>
            <tr>
              <td>
                Pago de derechos por precintos que se adhieren a los envases de bebidas alcohólicas, por cada uno​
              </td>
              <td class="text-center">
                 	1.46​
              </td>
            </tr>

          </tbody>


<!-- ********** -->
      </table>
    </div>
  </div>
</div>
</div>

@stop

@section('javascript')
<script>
  $('#ulIFe').addClass('in');
  $('#liPagosDerecho').addClass('activoBorde');
</script>
@stop
