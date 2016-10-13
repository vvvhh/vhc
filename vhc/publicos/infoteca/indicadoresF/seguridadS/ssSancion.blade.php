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

          <div class="table-responsive">
            <table class="table table-striped  table-bordered table-condensed">
                <!-- *************** -->
                <h3 class="text-center">	Sanciones establecidas por el Infonavit con base en el Reglamento para la Imposición de Multas por Incumplimiento de las Obligaciones que la Ley del Infonavit y sus reglamentos establecen a cargo de los patrones (Rimpiolinfo)	</h3>

            <thead>
            	<tr  class="activoLiMenu">	<th rowspan="2" class="text-center">	Obligación de ley y de reglamento	</th>	<th rowspan="2" class="text-center">	Art. 6o.,fracción	</th>	<th class="text-center">	Rimpiolinfo	</th>	<th rowspan="2" colspan="2" class="text-center">	Artículo 8o., fracción	</th>				<th  colspan="2" class="text-center">	Sanciones(SMGVDF)	</th>				</tr>
            	<tr  class="activoLiMenu">							<th class="text-center">	Infracciones	</th>							<th class="text-center">	Mínima	</th>	<th class="text-center">	Máxima	</th>	</tr>
            </thead>

            <tbody class="animEscalarFila">
            	<tr>	<td  class="text-center">	31, Linfonavit	  </td>	<td  class="text-center">	VI	  </td>	<td  class="text-center">	No solventar los errores u omisiones en la información presentada.	  </td>	<td  colspan="2"  class="text-center">	I	  </td>				<td  class="text-center">	3	  </td>	<td  class="text-center">	150	  </td>	</tr>
            	<tr>	<td  class="text-center">	29, fracc. VII, Linfonavit	  </td>	<td  class="text-center">	X	  </td>	<td  class="text-center">	No entregar a los trabajadores de la construcción constancia escrita, semanal o quincenal, del número de días laborados y del salario recibido.	  </td>	<td  colspan="2"  class="text-center">	I	  </td>				<td colspan="2" rowspan="3">	Sanción (pesos) De 219.12 a 10,956.00	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, fracc. VIII, Linfonavit	  </td>	<td  class="text-center">	XV	  </td>	<td  class="text-center">	No presentar al instituto, cuando se esté obligado a ello, copia con firma autógrafa del dictamen con los anexos correspondientes a aportaciones patronales o, en su caso, cuando se opte por dictaminarse de acuerdo con la ley y el reglamento respectivos.	  </td>	<td  colspan="2"  class="text-center">	I	  </td>										</tr>
            	<tr>	<td  class="text-center">	55, Ripaedi	  </td>	<td  class="text-center">	XVI	  </td>	<td  class="text-center">	No presentar el dictamen de obligaciones en materia de vivienda, en caso de que se haya elegido la opción de dictaminar.	  </td>	<td  colspan="2"  class="text-center">	I	  </td>										</tr>
            	<tr>	<td  rowspan="2"class="text-center">	29, fracc. VI, Linfonavit	  </td>	<td  rowspan="2"class="text-center">	IX	  </td>	<td  rowspan="2"class="text-center">	Negarse por cualquier causa a recibir la documentación enviada por el instituto para cumplir sus obligaciones y, en su caso, entregarla a los trabajadores.	  </td>	<td  colspan="2"  class="text-center">	II	  </td>				<td  class="text-center">	151	  </td>	<td  class="text-center">	200	  </td>	</tr>
            	<tr>																<td  colspan="2" class="text-center">	Sanción (pesos) De 11,029.04 a 14,608	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, 30 y 31 Linfonavit y 3, 23 y 43, Ripaedi	  </td>	<td  class="text-center">	XIII	  </td>	<td  class="text-center">	No conservar en el domicilio fiscal la documentación sobre la contabilidad de la empresa correspondiente al cumplimiento de las obligaciones patronales con el instituto, así como la comprobatoria del pago de aportaciones y entero de descuentos, dentro de los plazos que el código establece al efecto, excepto cuando se cuente con autorización de la SHCP para conservar la documentación en un domicilio fiscal diferente de aquél.	  </td>	<td  colspan="2"  class="text-center">	III	  </td>				<td  class="text-center">	201	  </td>	<td  class="text-center">	250	  </td>	</tr>
            	<tr>	<td  class="text-center">	 29, fracc. II, Linfonavit; y 3o., fracc. IV, Ripaedi	  </td>	<td  class="text-center">	XVII	  </td>	<td  class="text-center">	Presentar los pagos sobre aportaciones o descuentos, o de ambos, con errores en los datos de identificación del patrón o del trabajador, de movimientos afiliatorios, del periodo a pagar y de los conceptos e importes de pago.	  </td>							<td  class="text-center" colspan="2">	Sanción (pesos) De 14,090.10 a 17,525	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, fraccs. I y II; y 31, Linfonavit	  </td>	<td  class="text-center">	IV	  </td>	<td  class="text-center">	Proporcionar datos falsos en la información correspondiente a la inscripción, en la de los trabajadores a su servicio y en la que se requiera mediante los diversos avisos que deban presentarse.	  </td>	<td  colspan="2"  class="text-center">	IV	  </td>				<td  class="text-center">	251	  </td>	<td  class="text-center">	300	  </td>	</tr>
            	<tr>	<td  class="text-center">	31, Linfonavit; y 9o. y 10, Ripaedi	  </td>	<td  class="text-center">	VII	  </td>	<td  class="text-center">	Omitir presentar los avisos de cambio de domicilio y denominación o razón social de la empresa; de aumento o disminución de obligaciones fiscales; de suspensión o reanudación de actividades, incluyendo el estallamiento de huelga y la terminación de ésta; de clausura; de fusión; de escisión; de enajenación; y de declaración de quiebra o suspensión de pagos, así como cualquier otra circunstancia que afecte su registro ante el instituto o exhibirlos extemporáneamente.	  </td>	<td  colspan="2"  class="text-center">	IV	  </td>				<td  class="text-center" rowspan="4" colspan="2">	Sanción (pesos) De 18,333.04 a 21,912.00	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, fraccs. I y II; 31,Linfonavit; y 3o., fracc. III, y 20, Ripaedi	  </td>	<td  class="text-center">	VIII	  </td>	<td  class="text-center">	No presentar los avisos de altas, bajas, modificaciones de salario, ausencias e incapacidades y los demás datos de los trabajadores necesarios para el instituto, a fin de cumplir las obligaciones previstas en la ley, o exhibirlos fuera del término establecido al efecto.	  </td>	<td  colspan="2"  class="text-center">	IV	  </td>										</tr>
            	<tr>	<td  class="text-center">	29, fraccs. IV y VI, Linfonavit; y 22, Ripaedi	  </td>	<td  class="text-center">	XI	  </td>	<td  class="text-center">	No proporcionar al instituto, cuando éste lo solicite, la información relacionada con el cumplimiento de las obligaciones en materia de pago de aportaciones y entero de descuentos, así como la demás necesaria para el logro de sus fines.	  </td>	<td  colspan="2"  class="text-center">	IV	  </td>										</tr>
            	<tr>	<td  class="text-center">	29, fraccs. II, párrafo último, y IV, Linfonavit	  </td>	<td  class="text-center">	XII	  </td>	<td  class="text-center">	No proporcionar al instituto la información necesaria para precisar la existencia, naturaleza y cuantía de las obligaciones a cargo por los trabajadores a su servicio.	  </td>	<td  colspan="2"  class="text-center">	IV	  </td>										</tr>
            	<tr>	<td  class="text-center">	29, fracc. I, y 31, párrafo tercero, Linfonavit; y 3o.,	  </td>	<td  class="text-center">	I	  </td>	<td  class="text-center">	No inscribirse en el instituto o hacerlo fuera del plazo establecido en la ley y en el Ripaedi.	  </td>	<td  colspan="2" rowspan="3" class="text-center">	V	  </td>				<td  class="text-center">	301	  </td>	<td  class="text-center">	350	  </td>	</tr>
            	<tr>	<td  class="text-center">	29, fracc. III, Linfonavit; y 3o., fracc. IV, Ripaedi	  </td>	<td  class="text-center">	III	  </td>	<td  class="text-center">	No efectuar la retención de los descuentos para la amortización de los créditos de vivienda, cuando exista la obligación de hacerlo, de acuerdo con lo previsto en el Ripaedi.	  </td>							<td  class="text-center" colspan="2" rowspan="2">	Sanción (pesos) De 21,985.04 a 25,564.00	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, fracc. V, Linfonavit	  </td>	<td  class="text-center">	XIV	  </td>	<td  class="text-center">	Obstaculizar o impedir, por sí o por interpósita persona, la inspección o visita domiciliaria que el instituto practique de conformidad con la ley, el código y su reglamento.	  </td>													</tr>
            	<tr>	<td  rowspan="4"class="text-center">	29, fracc. I, y 31, Linfonavit; y 3o., fracc. I, y 13, Ripaedi	  </td>	<td  rowspan="4"class="text-center">	II	  </td>	<td  rowspan="4"class="text-center">	No inscribir a cada uno de los trabajadores a su cargo ante el instituto o hacerlo en forma extemporánea.	  </td>	<td  rowspan="4"class="text-center">	VII	  </td>	<td  rowspan="2"class="text-center">	a)	  </td>	<td  class="text-center">	3	  </td>	<td  class="text-center">	5	  </td>	</tr>
            	<tr>																<td  colspan="2"class="text-center">	Sanción (pesos por cada trabajador) de 219.12 a 365.20 si se trata de uno a 100 trabajadores	  </td>				</tr>
            	<tr>													<td  rowspan="2"class="text-center">	b)	  </td>	<td  class="text-center">	301	  </td>	<td  class="text-center">	350	  </td>	</tr>
            	<tr>																<td  class="text-center" colspan="2" >	Sanción (pesos) de 21,985.04 a 25,564.00 si se trata de más de 100 trabajadores no inscritos	  </td>				</tr>
            	<tr>	<td  class="text-center">	29, fracc. II, párrafo tercero, Linfonavit	  </td>	<td  class="text-center">	V	  </td>	<td  class="text-center">	No presentar la información necesaria para individualizar las aportaciones y los descuentos de los trabajadores por quienes se hayan realizado el pago o el entero correspondientes.	  </td>	<td  colspan="2"  class="text-center">	VI	  </td>				<td  class="text-center" colspan="2">	La que resulte mayor entre 50% de las aportaciones no individualizadas y la que corresponda al máximo de 350 (25,564 .00)	  </td>				</tr>
            </tbody>

                <!-- ******************* -->
                </table>
              </div>
          </div>
        </div>
      </div>

      <div class="well transparenteClaroTxt">
        <div class="row">
          <div class="col-md-12 text-justify">
            Sin necesidad de que el Infonavit dicte una nueva resolución, la multa que se pague dentro de los 45 días hábiles siguientes a que surta efectos su notificación se disminuirá en 50% de su monto. Si la multa se cubre después de los 45 días hábiles siguientes, pero antes de notificarse el requerimiento de pago con mandamiento de ejecución, se reducirá en 25%, y en 75%, cuando el patrón haya optado por dictaminar el cumplimiento de sus obligaciones en materia de vivienda (artículo 28 del Rimpiolinfo).
          </div>
        </div>
      </div>

@stop

@section('javascript')
  <script>
    $('#ulSS').addClass('in');
    $('#liSanciones').addClass('activoBorde');
  </script>
@stop
