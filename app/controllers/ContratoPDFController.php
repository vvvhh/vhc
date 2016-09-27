<?php

class ContratoPDFController extends BaseController {

	public function getContratoMoral()
	{
		if( !Sesion::isUser() ){
	    if( !Sesion::isAsesor() ){
	      if( !Sesion::isAdmin() )
	      return Redirect::to('admin/logout');
	    }
	  }

		$id = Input::get('c');

		$numeroEPVH = "52785";
		$diaEPVH = "30";
		$mesEPVH = "julio";
		$anioEPVH = "1999";
		$nombreNPVH = "Luis de Angoitia Becerra";
		$numeroNPVH = "ciento nueve";
		$lugarEPVH = "Distrito Federal";
		$actividadVH = "servicios de contabilidad y auditoría";
		$direccionVH = "calle Huatabampo número 72, Colonia Roma Sur, Delegación Cuauhtémoc, Código Postal 06760, México, Distrito Federal";
		$urlVHC = "www.contadoresvh.com";
		$telVHC = "55754191";
		$duracionVH = "1 año";
		$bancoVHC = "BBVA Bancomer";
		$cuentaVVHC = "0451908472";
		$clabeVHC = "012180004519084722";


		$getContrato = Solicitudes::where('solId', $id)
		->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
		->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
		->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
		->get(array(
			'solId',
			'solNConsultas',
			'solPagado',
			'solFecha',
			'solTipoConsulta',
			'solPersona',
			'solServicio',
			'solPreciosT',

			'perTipoPersona',
			'perNombre',
	    'perRepresentanteLegal',
	    'perNumeroEP',
	    'perDiaEP',
	    'perMesEP',
	    'perAnioEP',
	    'perNombreNP',
	    'perNumeroNP',
	    'perLugarEP',
			'perDCalle',
      'perDNumero',
      'perDColonia',
      'perDMunicipio',
      'perDEstado',
	    'perNacionalidad',
	    'perRFC',
	    'perActividad',
			'perTelefono',
	    'perCorreo',

			'ctoFecha',
			'ctoId',

			'serNombre'

				))
			->toArray();

			$nombre="DaTo";

		if ( count( $getContrato ) > 0 ){
			$datos    = $getContrato[0];
			$tipoP    = $datos['perTipoPersona'];
			$nombreP  = $datos['perNombre'];
			$nombreRL = $datos['perRepresentanteLegal'];
			$numeroEP = $datos['perNumeroEP'];
			$diaEP    = $datos['perDiaEP'];
			$mesEP    = $datos['perMesEP'];
			$anioEP   = $datos['perAnioEP'];
			$lugarEP  = $datos['perLugarEP'];
			$nombreNP = $datos['perNombreNP'];
			$numeroNP = $datos['perNumeroNP'];
			$perDCalle= $datos['perDCalle'];
			$perDNumero  = $datos['perDNumero'];
			$perDColonia = $datos['perDColonia'];
			$perDMunicipio = $datos['perDMunicipio'];
			$perDEstado  = $datos['perDEstado'];
			$nacionalidad = $datos['perNacionalidad'];
			$rfc      = $datos['perRFC'];
			$actividad = $datos['perActividad'];
			$telefono = $datos['perTelefono'];
			$correo   = $datos['perCorreo'];

			$servicio  = $datos['serNombre'];

			$folio = $datos['ctoId'];
			$fechaContrato = $datos['ctoFecha'];
			$diaContrato  = date('j',strtotime($fechaContrato));
			$mes          = date('n',strtotime($fechaContrato));
			$mesContrato  = ContratoPDFController::mesLetra($mes);
			$anioContrato = date('y',strtotime($fechaContrato));

			$idPrecio     = $datos['solPreciosT'];
			$nConsulta    = $datos['solNConsultas'];
			$tipoConsulta = $datos['solTipoConsulta'];
			$precioContrato = PreciosTipoController::getPrecioPaqueteTipo($tipoConsulta, $idPrecio, $nConsulta);
			if ($tipoConsulta == 1) {
				$tipoConsultaSt = "Consultas en Línea";
			}
			else $tipoConsultaSt = "Consultas Telefónicas";

			if($tipoP == 1){		/*Persona moral*/

			$html = '<html>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <body>'
			.'<p align="right"> <CODE> Folio: '.$folio.'</code></p>'

			.'<h4><p align="justify"><strong>CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES DE ASESORÍAS VÍA TELEFÓNICA O VÍA INTERNET QUE CELEBRAN POR UNA PARTE, </strong>'
			.$nombreP
			.'<strong> REPRESENTADA EN ESTE ACTO POR </strong>'
			.$nombreRL
			.'<strong> Y POR LA OTRA VÁZQUEZ HERNÁNDEZ CONTADORES, S.C., REPRESENTADA EN ESTE ACTO POR EL L.C.C. ENRIQUE ARTURO VÁZQUEZ HERNÁNDEZ, PARTES A LAS QUE EN LO SUCESIVO SE LES DENOMINARÁ “EL CLIENTE” Y “EL PROFESIONISTA”, RESPECTIVAMENTE, SUJETÁNDOSE LOS CONTRATANTES QUE INTERVIENEN EN ESTE ACTO JURÍDICO A LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS: </strong></p></h4>'
			.'<h4 align="center"><strong>D E C L A R A C I O N E S:</strong></h4>'
			.'<h4><strong>I. DECLARA EL CLIENTE QUE: </strong></h4>'
			.'<p align="justify">1. El cliente es una persona moral (o conjunto de personas morales que en su caso se detallan a continuación), debidamente constituida de acuerdo con las leyes mexicanas, según consta en la Escritura Pública número '
			.'<strong>'.$numeroEP.'</strong>'
			.' de fecha '
			.'<strong>'.$diaEP.'</strong>'
			.' de '
			.'<strong>'.$mesEP.'</strong>'
			.' del '
			.'<strong>'.$anioEP.'</strong>'
			.' , otorgada ante la fe del Lic. '
			.'<strong>'.$nombreNP.'</strong>'
			.' , Notario P&uacute;blico N&uacute;mero '
			.'<strong>'.$numeroNP.'</strong>'
			.' en el '
			.'<strong>'.$lugarEP.'</strong>'
			.'. </p>'

			.'<p align="justify">2. El cliente tiene  su domicilio fiscal el ubicado en '
			.'<strong>calle '.$perDCalle.', número '.$perDNumero.', col. '.$perDColonia.', '.$perDMunicipio.', '.$perDEstado.'</strong>'
			.' y que se encuentra Inscrita en el Registro Federal de Contribuyentes del Servicio de Administración Tributaria con el R.F.C. '
			.'<strong>'.$rfc.'</strong>'
			.'. </p>'

			.'<p align="justify">3. Dentro de las principales actividades del objeto social del cliente se encuentran las de '
			.'<strong>'.$actividad.'</strong>'
			.'. Que sus actividades son lícitas y que requiere que se le brinden servicios que se describirán en la cláusula correspondiente al objeto del presente contrato.'
			.'<br><br>4. El representante legal del cliente manifiesta que cuenta con las facultades suficientes y el poder amplio para contratar y obligar a su representada en los términos de este acto jurídico, mismas que se desprenden de la escritura pública citada en el punto número uno que antecede, manifestando bajo protesta de decir verdad que sus facultades no han sido revocadas ni restringidas a la fecha de suscripción del presente contrato.</p>'

			.'<h4><strong>II. DECLARA EL PROFESIONISTA QUE: </strong></h4>'
			.'<p align="justify">1. El profesionista es una persona moral, debidamente constituida de acuerdo con las leyes mexicanas, según consta en la Escritura Pública número '
			.$numeroEPVH
			.' de fecha '
			.$diaEPVH
			.' de '
			.$mesEPVH
			.' de '
			.$anioEPVH
			.' , otorgada ante la fe del Lic. '
			.$nombreNPVH
			.' , Notario P&uacute;blico N&uacute;mero '
			.$numeroNPVH
			.' en el '
			.$lugarEPVH.'</p>'

			.'<p align="justify">2. El profesionista tiene su domicilio fiscal el ubicado en calle Huatabampo número 72, Colonia Roma Sur, Delegación Cuauhtémoc, Código Postal 06760, México, Distrito Federal y que se encuentra Inscrita en el Registro Federal de Contribuyentes del Servicio de Administración Tributaria con el R.F.C. VHC990827VC9
			<br><br>3. Dentro de las principales actividades del objeto social del profesionista se encuentran las de '
			.''.$actividadVH.''
			.'. De igual forma cuenta con los recursos materiales,  los profesionistas y t&eacute;cnicos debidamente capacitados, acreditados y certificados con los t&iacute;tulos expedidos por autoridades competentes, quienes re&uacute;nen los conocimientos y la experiencia necesaria para cumplir con los servicios objeto de este Contrato.</p>'

			.'<p align="justify">4. El propio representante legal del profesionista manifiesta que cuenta con las facultades suficientes y el poder amplio para contratar y obligar a su representada en los t&eacute;rminos de este acto jur&iacute;dico, mismas que se desprenden de la escritura p&uacute;blica citada en el punto n&uacute;mero uno de este apartado, manifestando bajo protesta de decir verdad que sus facultades no han sido revocadas ni restringidas a la fecha de suscripci&oacute;n del presente contrato.</p>'

			.'<h4><strong>DECLARAN AMBAS PARTES:</strong></h4>
			<p align="justify">Que se reconocen mutuamente la personalidad jur&iacute;dica que ostentan y conocen perfectamente los alcances del acto jur&iacute;dico celebran ya que han sostenido pl&aacute;ticas informativas y explicativas de las necesidades del cliente y las actividades del profesionista, por lo que reconocen que el presente contrato se celebra sin vicios en el consentimiento de las partes, que no tienen incapacidad natural o legal para obligarse, siendo posible y l&iacute;cito su objeto y est&aacute;n de acuerdo en someterse a las siguientes:</p>'

			.'<h4 align="center"><strong>C L &Aacute; U S U L A S:</strong></h4>'

			.'<p align="justify"><h4><strong>PRIMERA.- OBJETO.</strong></h4>
			EL objeto del presente contrato lo constituyen los servicios profesionales que se describen detalladamente en el ANEXO &quot;A&quot;  de este documento y no otros y comprender&aacute;n las materias o campos de conocimiento que se especifican en el mismo.</p>'

			.'<h4><strong>SEGUNDA.- MEDIO DE PRESTACI&Oacute;N DE SERVICIOS.</strong></h4>
			<p align="justify">El profesionista prestar&aacute; los servicios materia del contrato v&iacute;a telef&oacute;nica o a trav&eacute;s del servicio de internet.<br><br>
			En ambos casos, el cliente se compromete a contratar o proveer por su cuenta y asumir los costos de los servicios de telefon&iacute;a o internet necesarios para lograr una conexi&oacute;n telef&oacute;nica o de internet a los n&uacute;meros de tel&eacute;fono del profesionista o la p&aacute;gina web del mismo en el dominio que se se&ntilde;ala en el ANEXO &quot;A&quot; del presente contrato.</p>'

			.'<h4><strong>TERCERA.- PERSONAS QUE PRESTAR&Aacute;N LOS SERVICIOS.</strong></h4>
			<p align="justify">Las partes pactan que los servicios objeto del presente contrato ser&aacute;n desarrollados por las personas f&iacute;sicas que el profesionista a trav&eacute;s de su representante legal o socios designen, dependiendo de los servicios contratados y que se detallan en el ANEXO &quot;A&quot; de este contrato.
			<br><br>
			El profesionista se compromete a que, las personas f&iacute;sicas que sean designados por el profesionista a trav&eacute;s de su representante legal o socios para ejecutar los servicios objeto del contrato, ser&aacute;n especialistas y profesionales debidamente capacitados y certificados por las autoridades competentes y con los conocimientos t&eacute;cnicos y pr&aacute;cticos necesarios  para resolver las dudas que se le presenten por el cliente.</p>'

			.'<h4><strong>CUARTA.- HORARIO Y D&Iacute;AS DE PRESTACI&Oacute;N DE SERVICIOS.</strong></h4>'
			.'<p align="justify">El horario de prestaci&oacute;n de los servicios materia de este contrato ser&aacute; el comprendido de las 09.30 a las 20:00 horas, de lunes a viernes, hora local de la Ciudad de M&eacute;xico, Distrito Federal.</p>'
			.'<p align="justify">En caso de que el cliente no respete el horario pactado, ser&aacute; facultad del profesionista elegir entre la rescisi&oacute;n del contrato o dar cumplimiento al mismo dentro del siguiente horario h&aacute;bil pactado para el cumplimiento del objeto del contrato.</p>'
			.'<p align="justify">En acatamiento a la Ley Federal del Trabajo, ambas partes acuerdan que la prestaci&oacute;n del servicio se suspender&aacute; los d&iacute;as domingo y los d&iacute;as que menciona el art&iacute;culo 74 de dicho ordenamiento, siendo los siguientes:</p>'
			.'I. El 1o. de enero;
			<br>
			II. El primer lunes de febrero en conmemoraci&oacute;n del 5 de febrero;
			<br>
			III. El tercer lunes de marzo en conmemoraci&oacute;n del 21 de marzo;
			<br>
			IV. El 1o. de mayo;
			<br>
			V. El 16 de septiembre
			<br>
			VI. El tercer lunes de noviembre en conmemoraci&oacute;n del 20 de noviembre;
			<br>
			VII. El 1o. de diciembre de cada seis a&ntilde;os, cuando corresponda a la transmisi&oacute;n del Poder Ejecutivo Federal;
			<br>
			VIII. El 25 de diciembre, y
			<br>
			IX. El que determinen las leyes federales y locales electorales, en el caso de elecciones ordinarias, para efectuar la jornada electoral.'

			.'<h4><strong>QUINTA.- PAGO DE HONORARIOS.</strong></h4>'
			.'<p align="justify">El cliente se obliga a pagar al profesionista los honorarios pactados por las partes en las fechas programadas para tal efecto, a trav&eacute;s de los m&eacute;dios electr&oacute;nicos que el profesionista ponga a disposici&oacute;n del cliente para tal efecto en su p&aacute;gina web de internet en el dominio que se le indique o mediante dep&oacute;sito en la cuenta bancaria del profesionista, de conformidad con el monto, fechas e informaci&oacute;n detallada en el ANEXO &quot;A&quot;  de este documento. El cliente podr&aacute; solicitar impresa su factura en el domicilio del profesionista o imprimir el mismo su factura desde la p&aacute;gina web y el dominio proporcionado para tal efecto.</p>'

			.'<h4><strong>SEXTA.- OBLIGACIONES DE LAS PARTES.</strong></h4>'
			.'<p align="justify">Para el cumplimiento del presente contrato, ambas partes se obligan a cumplir las siguientes acciones u omisiones y cumplir con las obligaciones que a continuaci&oacute;n se detallan:</p>'

			.'<h4><strong>OBLIGACIONES DEL CLIENTE:</strong></h4>'
			.'<p align="justify">a) Pagar los honorarios del profesionista en tiempo y forma.</p>'
			.'<p align="justify">b) El cliente  se obliga a limitar la prestaci&oacute;n de los servicios a la resoluci&oacute;n de las dudas, o problemas que plante&eacute; al profesionista dentro de la materia y alcances de los servicios que se detallan en el ANEXO &quot;A&quot;, de este contrato.</p>'
			.'<p align="justify">c) A guardar respeto de lenguaje hacia las personas f&iacute;sicas que el profesionista designe para que resuelvan sus dudas o problemas y realizar sus consultas dentro del horario pactado para tal efecto.</p>'
			.'<p align="justify">d) A someterse a las Pol&iacute;ticas de Uso de sitio Web de V&aacute;zquez Hern&aacute;ndez Contadores, S.C., mismas que se encuentran a su disposici&oacute;n para su consulta y aceptaci&oacute;n o rechazo en el sitio web del profesionista en el dominio que &eacute;ste le indique. El cliente se hace responsable del mal uso que se haga de las claves y contrase&ntilde;as que habilite para navegar en el sitio web de internet del profesionista.</p>'
			.'<p align="justify">e) A firmar su aviso de Privacidad por el servicio que se le va a brindar.</p>'
			.'<p align="justify">f) A responder por el uso en cualquiera de sus formas de la informaci&oacute;n, datos, impresiones, im&aacute;genes, audio o video que remita al profesionista haciendo uso de los servicios de este contrato, y que est&eacute;n protegidas por la Ley Federal del Derecho de Autor o la Ley de la Propiedad Industrial.</p>'
			.'<p align="justify">g) Abstenerse de sabotear los medios f&iacute;sicos o electr&oacute;nicos que el profesionista habilite para la prestaci&oacute;n de los servicios.</p>'

			.'<h4><strong>OBLIGACIONES DEL PROFESIONISTA:</strong></h4>'
			.'<p align="justify">a) Desarrollar los servicios profesionales objeto del presente contrato, apeg&aacute;ndose al las disposiciones legales aplicables en los Estados Unidos Mexicanos para la prestaci&oacute;n de los servicios que va a realizar, aplicando su experiencia, conocimientos t&eacute;cnicos, actuando con profesionalismo y responsabilidad, absteni&eacute;ndose de incurrir en negligencia, impericia o dolo.</p>'
			.'<p align="justify">b) Responder, en el momento que lo requiera el cliente y dentro del horario pactado para tal efecto, las consultas que aqu&eacute;l realice v&iacute;a telef&oacute;nica o mediante correo electr&oacute;nico sobre cualquier aspecto materia del objeto del presente contrato.</p>'
			.'<p align="justify">c) En caso de que las dudas o problemas planteados requieran un tiempo considerable para su soluci&oacute;n, el profesionista le informar&aacute; al cliente dicha situaci&oacute;n y le indicar&aacute; del tiempo que utilizar&aacute; para dar soluci&oacute;n a las mismas.</p>'

			.'<h4><strong>S&Eacute;PTIMA.- RESCISI&Oacute;N.</strong></h4>'
			.'<p align="justify">Las partes se manifiestan sabedoras del derecho que tienen derivado del art&iacute;culo 1949 del C&oacute;digo Civil en vigor en el Distrito Federal, para pedir la resoluci&oacute;n de las obligaciones o el cumplimiento de las obligaciones contra&iacute;das para el caso de que uno de los no cumpliere con lo que le incumbe, con el resarcimiento de da&ntilde;os y perjuicios. Sin embargo si alguna de las partes incumpliera sus obligaciones, ambas partes pactan que podr&aacute;n rescindir el presente contrato de manera anticipada, con la obligaci&oacute;n de pagar la pena convencional se&ntilde;alada en la cl&aacute;usula OCTAVA y por las causas se&ntilde;aladas a continuaci&oacute;n:</p>'

			.'<h4><strong>CAUSAS DE RESCISI&Oacute;N EN FAVOR DEL CLIENTE:</strong></h4>'
			.'<p align="justify">a) Si el profesionista no realiza los servicios objeto y materia del contrato en las fechas convenidas y conforme al programa de trabajo estipulado.</p>'
			.'<p align="justify">El cliente acepta que una asesor&iacute;a puede presentar diferentes enfoques, diferentes opiniones, diferentes puntos de vista o diferentes resultados, por lo que darse dicha diferencia, la misma no ser&aacute; causa de rescisi&oacute;n.</p>'
			.'<p align="justify">b) Si el profesionista  suspende injustificadamente los servicios. En caso de que se tratara de una suspensi&oacute;n por caso fortuito o fuerza mayor, no surtir&aacute; efectos esta causal de rescisi&oacute;n, previa comprobaci&oacute;n de la justificaci&oacute;n de la suspensi&oacute;n.</p>'

			.'<h4><strong>CAUSAS DE RESCISI&Oacute;N EN FAVOR DEL PROFESIONISTA:</strong> </h4>'
			.'<p align="justify">A) Si el cliente no respeta el horario pactado y los d&iacute;as pactados para la prestaci&oacute;n del servicio.</p>'
			.'<p align="justify">B) Si el cliente no formula sus dudas o plantea los problemas a resolver por escrito o v&iacute;a telef&oacute;nica en los t&eacute;rminos que fue pactado en este contrato.</p>'
			.'<p align="justify">C) Si el cliente falta el respeto a las personas que el profesionista designe a trav&eacute;s de su representante legal para la prestaci&oacute;n del servicio.</p>'
			.'<p align="justify">D) Si el cliente sabotea las v&iacute;as de comunicaci&oacute;n que el profesionista establezca para la prestaci&oacute;n del servicio o si el cliente no respeta las Pol&iacute;ticas de Uso del Sitio Web de V&aacute;zquez Hern&aacute;ndez Contadores S.C., habilitado para tal efecto.</p>'
			.'<p align="justify">Ambas partes podr&aacute;n rescindir el presente contrato dando aviso a su contraparte por escrito en el domicilio que han se&ntilde;alado en el apartado de declaraciones, con cinco d&iacute;as de anticipaci&oacute;n.</p>'

			.'<h4><strong>OCTAVA.- PENA CONVENCIONAL.</strong> </h4>'
			.'<p align="justify">En caso de que el profesionista no cumpla con las obligaciones materia del presente contrato y de lugar a las causales de rescisi&oacute;n pactadas en la cl&aacute;usula que antecede relativas al mismo en los incisos a) y b), deber&aacute; devolver el pago de honorarios que se le hubiera realizado y por el importe que demuestre el cliente haber cubierto, independientemente del pago de da&ntilde;os y perjuicios a que se haga acreedor por su incumplimiento.</p>'
			.'<p align="justify">En caso de que el cliente incumpla sus obligaciones y d&eacute; lugar a la rescisi&oacute;n del contrato por causas imputables a &eacute;l, en el caso de los incisos A), B) y C) si el profesionista decide rescindir el contrato deber&aacute; pagar una cantidad igual al costo del servicio contratado por los servicio materia del contrato. En caso de que la rescisi&oacute;n tenga como causal el inciso D), de la cl&aacute;usula que antecede, el cliente perder&aacute; derecho a la devoluci&oacute;n de cualquier pago que hubiera realizado al profesionista, debiendo pagar los gastos que se generen para la compostura, compra nueva de equipo o habilitaci&oacute;n de los medios de comunicaci&oacute;n que se hayan establecido para la prestaci&oacute;n del servicio. Ambas partes se manifiestan sabedoras que el pago de da&ntilde;os y perjuicios es independiente de esta cl&aacute;usula penal, por ser disposiciones de orden p&uacute;blico que se encuentran contempladas en la ley. </p>'

			.'<h4><strong>NOVENA.- CASO FORTUITO Y FUERZA MAYOR.</strong> </h4>'
			.'<p align="justify">Ambas partes pactan que estar&aacute;n exentas de toda responsabilidad civil, en caso de retraso, mora e incumplimiento total o parcial de las obligaciones que derivan del presente contrato si en ello media  causas de caso fortuito o fuerza mayor, entendi&eacute;ndose por esto a todo acontecimiento presente o futuro, ya sea fen&oacute;meno de la naturaleza o no, que est&eacute; fuera del dominio de la voluntad, que no pueda preverse y que a&uacute;n previ&eacute;ndolo no se pueda evitar. Pero la parte que haga valer la imposibilidad citada, en cuanto le sea posible deber&aacute; notificar por escrito a la otra, o al t&eacute;rmino de dicha causa en forma fehaciente. En tales casos, ambas partes se reunir&aacute;n de com&uacute;n acuerdo para revisar el cumplimiento de las obligaciones pactadas, y decidir si se contin&uacute;a con la prestaci&oacute;n del servicio o se da por terminado el contrato.</p>'

			.'<h4><strong>D&Eacute;CIMA.- TERMINACI&Oacute;N DEL CONTRATO.
				<br>
				De manera Natural: </strong> </h4>'
			.'<p align="justify">a) Por haber llegado a su t&eacute;rmino el contrato.</p>'
			.'<h4><strong>De manera Anticipada:</strong> </h4>'
			.'<p align="justify">b) Por mutuo consentimiento de las partes. En cuyo caso subsistir&aacute;n las obligaciones de pago de los honorarios pactados.</p>'
			.'<p align="justify">c) Por rescisi&oacute;n si se actualiza alguna de las causas de rescisi&oacute;n establecidas en este contrato  y la misma es ejercitada por la parte a la que beneficie.</p>'
			.'<p align="justify">d) Por muerte o incapacidad del prestador de servicios, sus representantes legales o socios que hagan imposible la prestaci&oacute;n del servicio objeto y materia del presente contrato.</p>'
			.'<p align="justify">e) Por resultar imposible cumplir con el objeto del contrato por caso fortuito o fuerza mayor.</p>'

			.'<h4><strong>D&Eacute;CIMA PRIMERA.-  DURACI&Oacute;N DEL CONTRATO.</strong> </h4>'
			.'<p align="justify">El presente contrato tendr&aacute; la duraci&oacute;n que se establece en el ANEXO &quot;A&quot;, y s&oacute;lo podr&aacute; darse por terminado por rescisi&oacute;n, terminaci&oacute;n anticipada o terminaci&oacute;n natural del mismo.</p>'

			.'<h4><strong>D&Eacute;CIMA SEGUNDA.- MODIFICACIONES AL CONTRATO.</strong> </h4>'
			.'<p align="justify">El presente Contrato podr&aacute; ser modificado o adicionado de com&uacute;n acuerdo por ambas partes contratantes de conformidad con los t&eacute;rminos establecidos en la legislaci&oacute;n aplicable, y las modificaciones o adiciones s&oacute;lo ser&aacute;n v&aacute;lidas cuando hayan sido hechas por escrito y firmadas por las partes, mismas que formar&aacute;n parte integrante del contrato a&uacute;n cuando se adjunten al presente acto jur&iacute;dico como anexo.</p>'

			.'<h4><strong>D&Eacute;CIMA TERCERA.-  COMPETENCIA Y JURISDICCI&Oacute;N.</strong> </h4>'
			.'<p align="justify">En todo lo relativo a la interpretaci&oacute;n, cumplimiento o controversias judiciales del presente contrato, ambas partes pactan someterse a las Leyes y la Jurisdicci&oacute;n de los Tribunales de la Ciudad de M&eacute;xico, Distrito Federal, por lo que renuncian expresamente a cualquier otro fuero que por raz&oacute;n de sus domicilios presentes o futuros les llegara a corresponder.</p>'
			.'<p align="justify">Previa lectura y con pleno conocimiento del alcance legal del contenido del presente contrato, las partes lo suscriben, por duplicado en '
			.$direccionVH
			.' a los '
			.'<strong>'.$diaContrato.'</strong>'
			.' d&iacute;as del mes de '
			.'<strong>'.$mesContrato.'</strong>'
			.' del a&ntilde;o dos mil '
			.'<strong>'.$anioContrato.'</strong>'
			.'</p>'

			.'<table cellspacing="0" align="center" width="500" >
				<tbody>
					<tr>
  					<td width="50%" >
							<div align="center">
								<h4><strong>EL CLIENTE</strong> </h4>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<h4><strong>V&Aacute;ZQUEZ HERN&Aacute;NDEZ<br>CONTADORES, S.C.</strong> </h4>
							</div>
						</td>
					</tr>
					<tr>
  					<td width="50%" >
							<div align="center">
								<strong>_________________________</strong>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<strong>________________________</strong>
							</div>
						</td>
					</tr>
					<tr>
  					<td width="50%" >
							<div align="center">
								<h4><strong> '
								.$nombreP
								.'</strong> </h4>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<h4><strong>L.C.C. Enrique Arturo V&aacute;zquez Hern&aacute;ndez.</strong> </h4>
							</div>
						</td>
					</tr>

				</tbody
			 </table>'


			.'<br><br><br><br><br><br><br><br><br><br><br> <p align="center"><strong>ANEXO  	&quot;A&quot; <br><br>SERVICIOS DE ASESOR&Iacute;A V&Iacute;A TELEF&Oacute;NICA O V&Iacute;A INTERNET</strong></p>'



			.'<p align="justify"><strong>1. DOMINIO DE INTERNET DEL PROFESIONISTA:<br>'
			.'<strong><blockquote>'
			.$urlVHC.'</blockquote></strong>'
			.'2. TEL&Eacute;FONOS DEL PROFESIONISTA:	<blockquote>'
			.$telVHC
			.'</blockquote>'

			.'<p align="justify"><strong>3. DURACIÓN DEL CONTRATO DE ASESORÍA:<blockquote>'
			.$duracionVH
			.'</blockquote></strong>'

			.'<strong>4.- BANCO, CUENTA Y/O CLABE BANCARIA DE DEPÓSITO::<blockquote>'
			.' a) Banco: '.$bancoVHC.'<br>'
			.' b) Número de cuenta: '.$cuentaVVHC.'<br>'
			.' c) Clabe: '.$clabeVHC.'<br>'
			.' d) Nombre firma: Vázquez Hernández Contadores S. C.  '/*.$nombre.*/
			.'</blockquote></strong></p>'

			.'5.- SERVICIOS PROFESIONALES A DESEMPEÑAR:<blockquote>'
			.$servicio.', '.$tipoConsultaSt
			.'</blockquote></strong></p>'
/*MM**********/
			.'<p align="justify">Si el cliente realiza la consulta materia del presente contrato de manera telefónica, bastará con que realice una llamada telefónica al profesionista quien entablará una conversación no mayor a 15 minutos a efecto de resolver la duda o problema planteado. Si la duración de la llamada sobrepasa los 15 minutos, el tiempo excedido se registrará como una consulta adicional.</p>'
			.'<p align="justify">Cabe señalar que por cada cuestión planteada, se considerará una consulta para efecto del servicio contratado. </p>'
			.'<p align="justify">Si el cliente realiza una consulta via internet, deberá escribir de manera clara y sencilla su duda o problema, remitiendo la misma a través del sistema de correo que el profesionista habilite para tal efecto, quien asume la responsabilidad de responder a la brevedad posible las mismas, en un lapso no mayor de 48 horas. </p>'

			.'<strong>6.- HONORARIOS POR SERVICIOS DE ASESORÍA:<br><blockquote>$'
			.$precioContrato
			.'</blockquote></strong>'

			.'<br><br><br><br><br><br>'

			.'<table cellspacing="0" align="center" width="500" >
				<tbody>
					<tr>
  					<td width="50%" >
							<div align="center">
								<h4><strong>EL CLIENTE</strong> </h4>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<h4><strong>V&Aacute;ZQUEZ HERN&Aacute;NDEZ<br>CONTADORES, S.C.</strong> </h4>
							</div>
						</td>
					</tr>
					<tr>
  					<td width="50%" >
							<div align="center">
								<strong>_________________________</strong>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<strong>________________________</strong>
							</div>
						</td>
					</tr>
					<tr>
						<td width="50%" >
							<div align="center">
								<h4><strong> '
								.$nombreP
								.'</strong> </h4>
							</div>
						</td>
						<td width="50%">
							<div align="center">
								<h4><strong>L.C.C. Enrique Arturo V&aacute;zquez Hern&aacute;ndez.</strong> </h4>
							</div>
						</td>
					</tr>

				</tbody
			 </table>'
			. '</body></html>';
			$nombreArchivo="Contrato_".$folio;
			return PDF::load($html, 'letter', 'portrait')->download($nombreArchivo);
		}

		if($tipoP == 0){					/*Persona moral*/

						$html = '<html>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <body>'
						.'<p align="right"> <CODE> Folio: '.$folio.'</code></p>'

						.'<h4><p align="justify"><strong>CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES DE ASESORÍAS VÍA TELEFÓNICA O VÍA INTERNET QUE CELEBRAN POR UNA PARTE, </strong>'
						.$nombreP
						.'<strong> Y POR LA OTRA VÁZQUEZ HERNÁNDEZ CONTADORES, S.C., REPRESENTADA EN ESTE ACTO POR EL L.C.C. ENRIQUE ARTURO VÁZQUEZ HERNÁNDEZ, PARTES A LAS QUE EN LO SUCESIVO SE LES DENOMINARÁ “EL CLIENTE” Y “EL PROFESIONISTA”, RESPECTIVAMENTE, SUJETÁNDOSE LOS CONTRATANTES QUE INTERVIENEN EN ESTE ACTO JURÍDICO A LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS: </strong>'
						.'<br><h4 align="center"><strong>D E C L A R A C I O N E S:</strong></h4>'
						.'<h4><strong>I. DECLARA EL CLIENTE QUE: </strong></h4>'

						.'<p align="justify">1. Que es una persona física, de nacionalidad '
						.'<strong>'.$nacionalidad.'</strong>'
						.', mayor de edad y que con capacidad plena para celebrar este acto jurídico. '

						.'<p align="justify">2. Que tiene  su domicilio fiscal el '
						.'<strong>'.$perDCalle.', número '.$perDNumero.', col. '.$perDColonia.', '.$perDMunicipio.', '.$perDEstado.'</strong>'
						.' y que se encuentra Inscrita en el Registro Federal de Contribuyentes del Servicio de Administración Tributaria con el R.F.C. '
						.'<strong>'.$rfc.'</strong>'
						.'. </p>'

						.'<p align="justify">3. Que las principales actividades que realiza son '
						.'<strong>'.$actividad.'</strong>'
						.', siendo sus actividades lícitas y requiere que le presten los servicios de '
						.'<strong>'.$servicio.'</strong>'
						.' y que requiere que se le brinden servicios que se describirán en la cláusula correspondiente al objeto del presente contrato.</p>'

						.'<h4><strong>II. DECLARA EL PROFESIONISTA QUE: </strong></h4>'
						.'<p align="justify">1. El profesionista es una persona moral, debidamente constituida de acuerdo con las leyes mexicanas, seg&uacute;n consta en la Escritura P&uacute;blica n&uacute;mero '
						.$numeroEPVH
						.' de fecha '
						.$diaEPVH
						.' de '
						.$mesEPVH
						.' de '
						.$anioEPVH
						.' , otorgada ante la fe del Lic. '
						.$nombreNPVH
						.' , Notario P&uacute;blico N&uacute;mero '
						.$numeroNPVH
						.' en el '
						.$lugarEPVH.'</p>'

						.'<p align="justify">2. El profesionista tiene su domicilio fiscal el ubicado en  calle Huatabampo n&uacute;mero 72, Colonia Roma Sur, Delegaci&oacute;n Cuauht&eacute;moc, C&oacute;digo Postal 06760, M&eacute;xico, Distrito Federal y que se encuentra Inscrita en el Registro Federal de Contribuyentes del Servicio de Administraci&oacute;n Tributaria con el R.F.C. VHC990827VC9
						<br><br>3. Dentro de las principales actividades del objeto social del profesionista se encuentran las de '
						.''.$actividadVH.''
						.'. De igual forma cuenta con los recursos materiales,  los profesionistas y t&eacute;cnicos debidamente capacitados, acreditados y certificados con los t&iacute;tulos expedidos por autoridades competentes, quienes re&uacute;nen los conocimientos y la experiencia necesaria para cumplir con los servicios objeto de este Contrato.</p>'

						.'<p align="justify">4. El propio representante legal del profesionista manifiesta que cuenta con las facultades suficientes y el poder amplio para contratar y obligar a su representada en los t&eacute;rminos de este acto jur&iacute;dico, mismas que se desprenden de la escritura p&uacute;blica citada en el punto n&uacute;mero uno de este apartado, manifestando bajo protesta de decir verdad que sus facultades no han sido revocadas ni restringidas a la fecha de suscripci&oacute;n del presente contrato.</p>'

						.'<h4><strong>DECLARAN AMBAS PARTES:</strong></h4>
						<p align="justify">Que se reconocen mutuamente la personalidad jur&iacute;dica que ostentan y conocen perfectamente los alcances del acto jur&iacute;dico celebran ya que han sostenido pl&aacute;ticas informativas y explicativas de las necesidades del cliente y las actividades del profesionista, por lo que reconocen que el presente contrato se celebra sin vicios en el consentimiento de las partes, que no tienen incapacidad natural o legal para obligarse, siendo posible y l&iacute;cito su objeto y est&aacute;n de acuerdo en someterse a las siguientes:</p>'

						.'<br><h4 align="center"><strong>C L &Aacute; U S U L A S:</strong></h4><br>'

						.'<p align="justify"><h4><strong>PRIMERA.- OBJETO.</strong></h4>
						EL objeto del presente contrato lo constituyen los servicios profesionales que se describen detalladamente en el ANEXO &quot;A&quot;  de este documento y no otros y comprender&aacute;n las materias o campos de conocimiento que se especifican en el mismo.</p>'

						.'<br><h4><strong>SEGUNDA.- MEDIO DE PRESTACI&Oacute;N DE SERVICIOS.</strong></h4>
						<p align="justify">El profesionista prestar&aacute; los servicios materia del contrato v&iacute;a telef&oacute;nica o a trav&eacute;s del servicio de internet.<br><br>
						En ambos casos, el cliente se compromete a contratar o proveer por su cuenta y asumir los costos de los servicios de telefon&iacute;a o internet necesarios para lograr una conexi&oacute;n telef&oacute;nica o de internet a los n&uacute;meros de tel&eacute;fono del profesionista o la p&aacute;gina web del mismo en el dominio que se se&ntilde;ala en el ANEXO &quot;A&quot; del presente contrato.</p>'

						.'<h4><strong>TERCERA.- PERSONAS QUE PRESTAR&Aacute;N LOS SERVICIOS.</strong></h4>
						<p align="justify">Las partes pactan que los servicios objeto del presente contrato ser&aacute;n desarrollados por las personas f&iacute;sicas que el profesionista a trav&eacute;s de su representante legal o socios designen, dependiendo de los servicios contratados y que se detallan en el ANEXO &quot;A&quot; de este contrato.
						<br><br>
						El profesionista se compromete a que, las personas f&iacute;sicas que sean designados por el profesionista a trav&eacute;s de su representante legal o socios para ejecutar los servicios objeto del contrato, ser&aacute;n especialistas y profesionales debidamente capacitados y certificados por las autoridades competentes y con los conocimientos t&eacute;cnicos y pr&aacute;cticos necesarios  para resolver las dudas que se le presenten por el cliente.</p>'

						.'<h4><strong>CUARTA.- HORARIO Y D&Iacute;AS DE PRESTACI&Oacute;N DE SERVICIOS.</strong></h4>'
						.'<p align="justify">El horario de prestaci&oacute;n de los servicios materia de este contrato ser&aacute; el comprendido de las 09.30 a las 20:00 horas, de lunes a viernes, hora local de la Ciudad de M&eacute;xico, Distrito Federal.</p>'
						.'<p align="justify">En caso de que el cliente no respete el horario pactado, ser&aacute; facultad del profesionista elegir entre la rescisi&oacute;n del contrato o dar cumplimiento al mismo dentro del siguiente horario h&aacute;bil pactado para el cumplimiento del objeto del contrato.</p>'
						.'<p align="justify">En acatamiento a la Ley Federal del Trabajo, ambas partes acuerdan que la prestaci&oacute;n del servicio se suspender&aacute; los d&iacute;as domingo y los d&iacute;as que menciona el art&iacute;culo 74 de dicho ordenamiento, siendo los siguientes:</p>'
						.'I. El 1o. de enero;
						<br>
						II. El primer lunes de febrero en conmemoraci&oacute;n del 5 de febrero;
						<br>
						III. El tercer lunes de marzo en conmemoraci&oacute;n del 21 de marzo;
						<br>
						IV. El 1o. de mayo;
						<br>
						V. El 16 de septiembre
						<br>
						VI. El tercer lunes de noviembre en conmemoraci&oacute;n del 20 de noviembre;
						<br>
						VII. El 1o. de diciembre de cada seis a&ntilde;os, cuando corresponda a la transmisi&oacute;n del Poder Ejecutivo Federal;
						<br>
						VIII. El 25 de diciembre, y
						<br>
						IX. El que determinen las leyes federales y locales electorales, en el caso de elecciones ordinarias, para efectuar la jornada electoral.'

						.'<h4><strong>QUINTA.- PAGO DE HONORARIOS.</strong></h4>'
						.'<p align="justify">El cliente se obliga a pagar al profesionista los honorarios pactados por las partes en las fechas programadas para tal efecto, a trav&eacute;s de los m&eacute;dios electr&oacute;nicos que el profesionista ponga a disposici&oacute;n del cliente para tal efecto en su p&aacute;gina web de internet en el dominio que se le indique o mediante dep&oacute;sito en la cuenta bancaria del profesionista, de conformidad con el monto, fechas e informaci&oacute;n detallada en el ANEXO &quot;A&quot;  de este documento. El cliente podr&aacute; solicitar impresa su factura en el domicilio del profesionista o imprimir el mismo su factura desde la p&aacute;gina web y el dominio proporcionado para tal efecto.</p>'

						.'<h4><strong>SEXTA.- OBLIGACIONES DE LAS PARTES.</strong></h4>'
						.'<p align="justify">Para el cumplimiento del presente contrato, ambas partes se obligan a cumplir las siguientes acciones u omisiones y cumplir con las obligaciones que a continuaci&oacute;n se detallan:</p>'

						.'<h4><strong>OBLIGACIONES DEL CLIENTE:</strong></h4>'
						.'<p align="justify">a) Pagar los honorarios del profesionista en tiempo y forma.</p>'
						.'<p align="justify">b) El cliente  se obliga a limitar la prestaci&oacute;n de los servicios a la resoluci&oacute;n de las dudas, o problemas que plante&eacute; al profesionista dentro de la materia y alcances de los servicios que se detallan en el ANEXO &quot;A&quot;, de este contrato.</p>'
						.'<p align="justify">c) A guardar respeto de lenguaje hacia las personas f&iacute;sicas que el profesionista designe para que resuelvan sus dudas o problemas y realizar sus consultas dentro del horario pactado para tal efecto.</p>'
						.'<p align="justify">d) A someterse a las Pol&iacute;ticas de Uso de sitio Web de V&aacute;zquez Hern&aacute;ndez Contadores, S.C., mismas que se encuentran a su disposici&oacute;n para su consulta y aceptaci&oacute;n o rechazo en el sitio web del profesionista en el dominio que &eacute;ste le indique. El cliente se hace responsable del mal uso que se haga de las claves y contrase&ntilde;as que habilite para navegar en el sitio web de internet del profesionista.</p>'
						.'<p align="justify">e) A firmar su aviso de Privacidad por el servicio que se le va a brindar.</p>'
						.'<p align="justify">f) A responder por el uso en cualquiera de sus formas de la informaci&oacute;n, datos, impresiones, im&aacute;genes, audio o video que remita al profesionista haciendo uso de los servicios de este contrato, y que est&eacute;n protegidas por la Ley Federal del Derecho de Autor o la Ley de la Propiedad Industrial.</p>'
						.'<p align="justify">g) Abstenerse de sabotear los medios f&iacute;sicos o electr&oacute;nicos que el profesionista habilite para la prestaci&oacute;n de los servicios.</p>'

						.'<h4><strong>OBLIGACIONES DEL PROFESIONISTA:</strong></h4>'
						.'<p align="justify">a) Desarrollar los servicios profesionales objeto del presente contrato, apeg&aacute;ndose al las disposiciones legales aplicables en los Estados Unidos Mexicanos para la prestaci&oacute;n de los servicios que va a realizar, aplicando su experiencia, conocimientos t&eacute;cnicos, actuando con profesionalismo y responsabilidad, absteni&eacute;ndose de incurrir en negligencia, impericia o dolo.</p>'
						.'<p align="justify">b) Responder, en el momento que lo requiera el cliente y dentro del horario pactado para tal efecto, las consultas que aqu&eacute;l realice v&iacute;a telef&oacute;nica o mediante correo electr&oacute;nico sobre cualquier aspecto materia del objeto del presente contrato.</p>'
						.'<p align="justify">c) En caso de que las dudas o problemas planteados requieran un tiempo considerable para su soluci&oacute;n, el profesionista le informar&aacute; al cliente dicha situaci&oacute;n y le indicar&aacute; del tiempo que utilizar&aacute; para dar soluci&oacute;n a las mismas.</p>'

						.'<h4><strong>S&Eacute;PTIMA.- RESCISI&Oacute;N.</strong></h4>'
						.'<p align="justify">Las partes se manifiestan sabedoras del derecho que tienen derivado del art&iacute;culo 1949 del C&oacute;digo Civil en vigor en el Distrito Federal, para pedir la resoluci&oacute;n de las obligaciones o el cumplimiento de las obligaciones contra&iacute;das para el caso de que uno de los no cumpliere con lo que le incumbe, con el resarcimiento de da&ntilde;os y perjuicios. Sin embargo si alguna de las partes incumpliera sus obligaciones, ambas partes pactan que podr&aacute;n rescindir el presente contrato de manera anticipada, con la obligaci&oacute;n de pagar la pena convencional se&ntilde;alada en la cl&aacute;usula OCTAVA y por las causas se&ntilde;aladas a continuaci&oacute;n:</p>'

						.'<h4><strong>CAUSAS DE RESCISI&Oacute;N EN FAVOR DEL CLIENTE:</strong></h4>'
						.'<p align="justify">a) Si el profesionista no realiza los servicios objeto y materia del contrato en las fechas convenidas y conforme al programa de trabajo estipulado.</p>'
						.'<p align="justify">El cliente acepta que una asesor&iacute;a puede presentar diferentes enfoques, diferentes opiniones, diferentes puntos de vista o diferentes resultados, por lo que darse dicha diferencia, la misma no ser&aacute; causa de rescisi&oacute;n.</p>'
						.'<p align="justify">b) Si el profesionista  suspende injustificadamente los servicios. En caso de que se tratara de una suspensi&oacute;n por caso fortuito o fuerza mayor, no surtir&aacute; efectos esta causal de rescisi&oacute;n, previa comprobaci&oacute;n de la justificaci&oacute;n de la suspensi&oacute;n.</p>'

						.'<h4><strong>CAUSAS DE RESCISI&Oacute;N EN FAVOR DEL PROFESIONISTA:</strong> </h4>'
						.'<p align="justify">A) Si el cliente no respeta el horario pactado y los d&iacute;as pactados para la prestaci&oacute;n del servicio.</p>'
						.'<p align="justify">B) Si el cliente no formula sus dudas o plantea los problemas a resolver por escrito o v&iacute;a telef&oacute;nica en los t&eacute;rminos que fue pactado en este contrato.</p>'
						.'<p align="justify">C) Si el cliente falta el respeto a las personas que el profesionista designe a trav&eacute;s de su representante legal para la prestaci&oacute;n del servicio.</p>'
						.'<p align="justify">D) Si el cliente sabotea las v&iacute;as de comunicaci&oacute;n que el profesionista establezca para la prestaci&oacute;n del servicio o si el cliente no respeta las Pol&iacute;ticas de Uso del Sitio Web de V&aacute;zquez Hern&aacute;ndez Contadores S.C., habilitado para tal efecto.</p>'
						.'<p align="justify">Ambas partes podr&aacute;n rescindir el presente contrato dando aviso a su contraparte por escrito en el domicilio que han se&ntilde;alado en el apartado de declaraciones, con cinco d&iacute;as de anticipaci&oacute;n.</p>'

						.'<br><h4><strong>OCTAVA.- PENA CONVENCIONAL.</strong> </h4>'
						.'<p align="justify">En caso de que el profesionista no cumpla con las obligaciones materia del presente contrato y de lugar a las causales de rescisi&oacute;n pactadas en la cl&aacute;usula que antecede relativas al mismo en los incisos a) y b), deber&aacute; devolver el pago de honorarios que se le hubiera realizado y por el importe que demuestre el cliente haber cubierto, independientemente del pago de da&ntilde;os y perjuicios a que se haga acreedor por su incumplimiento.</p>'
						.'<p align="justify">En caso de que el cliente incumpla sus obligaciones y d&eacute; lugar a la rescisi&oacute;n del contrato por causas imputables a &eacute;l, en el caso de los incisos A), B) y C) si el profesionista decide rescindir el contrato deber&aacute; pagar una cantidad igual al costo del servicio contratado por los servicio materia del contrato. En caso de que la rescisi&oacute;n tenga como causal el inciso D), de la cl&aacute;usula que antecede, el cliente perder&aacute; derecho a la devoluci&oacute;n de cualquier pago que hubiera realizado al profesionista, debiendo pagar los gastos que se generen para la compostura, compra nueva de equipo o habilitaci&oacute;n de los medios de comunicaci&oacute;n que se hayan establecido para la prestaci&oacute;n del servicio. Ambas partes se manifiestan sabedoras que el pago de da&ntilde;os y perjuicios es independiente de esta cl&aacute;usula penal, por ser disposiciones de orden p&uacute;blico que se encuentran contempladas en la ley. </p>'

						.'<h4><strong>NOVENA.- CASO FORTUITO Y FUERZA MAYOR.</strong> </h4>'
						.'<p align="justify">Ambas partes pactan que estar&aacute;n exentas de toda responsabilidad civil, en caso de retraso, mora e incumplimiento total o parcial de las obligaciones que derivan del presente contrato si en ello media  causas de caso fortuito o fuerza mayor, entendi&eacute;ndose por esto a todo acontecimiento presente o futuro, ya sea fen&oacute;meno de la naturaleza o no, que est&eacute; fuera del dominio de la voluntad, que no pueda preverse y que a&uacute;n previ&eacute;ndolo no se pueda evitar. Pero la parte que haga valer la imposibilidad citada, en cuanto le sea posible deber&aacute; notificar por escrito a la otra, o al t&eacute;rmino de dicha causa en forma fehaciente. En tales casos, ambas partes se reunir&aacute;n de com&uacute;n acuerdo para revisar el cumplimiento de las obligaciones pactadas, y decidir si se contin&uacute;a con la prestaci&oacute;n del servicio o se da por terminado el contrato.</p>'

						.'<h4><strong>D&Eacute;CIMA.- TERMINACI&Oacute;N DEL CONTRATO.
							<br><br>
							De manera Natural: </strong> </h4>'
						.'<p align="justify">a) Por haber llegado a su t&eacute;rmino el contrato.</p>'
						.'<h4><strong>De manera Anticipada:</strong> </h4>'
						.'<p align="justify">b) Por mutuo consentimiento de las partes. En cuyo caso subsistir&aacute;n las obligaciones de pago de los honorarios pactados.</p>'
						.'<p align="justify">c) Por rescisi&oacute;n si se actualiza alguna de las causas de rescisi&oacute;n establecidas en este contrato  y la misma es ejercitada por la parte a la que beneficie.</p>'
						.'<p align="justify">d) Por muerte o incapacidad del prestador de servicios, sus representantes legales o socios que hagan imposible la prestaci&oacute;n del servicio objeto y materia del presente contrato.</p>'
						.'<p align="justify">e) Por resultar imposible cumplir con el objeto del contrato por caso fortuito o fuerza mayor.</p>'

						.'<h4><strong>D&Eacute;CIMA PRIMERA.-  DURACI&Oacute;N DEL CONTRATO.</strong> </h4>'
						.'<p align="justify">El presente contrato tendr&aacute; la duraci&oacute;n que se establece en el ANEXO &quot;A&quot;, y s&oacute;lo podr&aacute; darse por terminado por rescisi&oacute;n, terminaci&oacute;n anticipada o terminaci&oacute;n natural del mismo.</p>'

						.'<h4><strong>D&Eacute;CIMA SEGUNDA.- MODIFICACIONES AL CONTRATO.</strong> </h4>'
						.'<p align="justify">El presente Contrato podr&aacute; ser modificado o adicionado de com&uacute;n acuerdo por ambas partes contratantes de conformidad con los t&eacute;rminos establecidos en la legislaci&oacute;n aplicable, y las modificaciones o adiciones s&oacute;lo ser&aacute;n v&aacute;lidas cuando hayan sido hechas por escrito y firmadas por las partes, mismas que formar&aacute;n parte integrante del contrato a&uacute;n cuando se adjunten al presente acto jur&iacute;dico como anexo.</p>'

						.'<h4><strong>D&Eacute;CIMA TERCERA.-  COMPETENCIA Y JURISDICCI&Oacute;N.</strong> </h4>'
						.'<p align="justify">En todo lo relativo a la interpretaci&oacute;n, cumplimiento o controversias judiciales del presente contrato, ambas partes pactan someterse a las Leyes y la Jurisdicci&oacute;n de los Tribunales de la Ciudad de M&eacute;xico, Distrito Federal, por lo que renuncian expresamente a cualquier otro fuero que por raz&oacute;n de sus domicilios presentes o futuros les llegara a corresponder.</p>'
						.'<p align="justify">Previa lectura y con pleno conocimiento del alcance legal del contenido del presente contrato, las partes lo suscriben, por duplicado en '
						.$direccionVH
						.' a los '
						.'<strong>'.$diaContrato.'</strong>'
						.' d&iacute;as del mes de '
						.'<strong>'.$mesContrato.'</strong>'
						.' del a&ntilde;o dos mil '
						.'<strong>'.$anioContrato.'</strong>'
						.'</p>'

						.'<table cellspacing="0" align="center" width="500" >
							<tbody>
								<tr>
									<td width="50%" >
										<div align="center">
											<h4><strong>EL CLIENTE</strong> </h4>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<h4><strong>V&Aacute;ZQUEZ HERN&Aacute;NDEZ<br>CONTADORES, S.C.</strong> </h4>
										</div>
									</td>
								</tr>
								<tr>
									<td width="50%" >
										<div align="center">
											<strong>_________________________</strong>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<strong>________________________</strong>
										</div>
									</td>
								</tr>
								<tr>
									<td width="50%" >
										<div align="center">
											<h4><strong> '
											.$nombreP
											.'</strong> </h4>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<h4><strong>L.C.C. Enrique Arturo V&aacute;zquez Hern&aacute;ndez.</strong> </h4>
										</div>
									</td>
								</tr>

							</tbody
						</table>'

						.'<br><br><br><br><br><br><br><br><br><br><br> <p align="center"><strong>ANEXO  	&quot;A&quot; <br><br>SERVICIOS DE ASESOR&Iacute;A V&Iacute;A TELEF&Oacute;NICA O V&Iacute;A INTERNET</strong></p>'

						.'<p align="justify"><strong>1. DOMINIO DE INTERNET DEL PROFESIONISTA:<br>'
						.'<strong><blockquote>'
						.$urlVHC.'</blockquote></strong>'
						.'2. TEL&Eacute;FONOS DEL PROFESIONISTA:	<blockquote>'
						.$telVHC
						.'</blockquote>'

						.'<p align="justify"><strong>3. DURACIÓN DEL CONTRATO DE ASESORÍA:<blockquote>'
						.$duracionVH
						.'</blockquote></strong>'

						.'<strong>4.- BANCO, CUENTA Y/O CLABE BANCARIA DE DEPÓSITO::<blockquote>'
						.' a) Banco: '.$bancoVHC.'<br>'
						.' b) Número de cuenta: '.$cuentaVVHC.'<br>'
						.' c) Clabe: '.$clabeVHC.'<br>'
						.' d) Nombre firma: Vázquez Hernández Contadores S. C.  '/*.$nombre.*/
						.'</blockquote></strong></p>'

						.'5.- SERVICIOS PROFESIONALES A DESEMPEÑAR:<blockquote>'
						.$servicio.', '.$tipoConsultaSt
						.'</blockquote></strong></p>'
/***MM**********/
						.'<p align="justify">Si el cliente realiza la consulta materia del presente contrato de manera telefónica, bastará con que realice una llamada telefónica al profesionista quien entablará una conversación no mayor a 15 minutos a efecto de resolver la duda o problema planteado. Si la duración de la llamada sobrepasa los 15 minutos, el tiempo excedido se registrará como una consulta adicional.</p>'
						.'<p align="justify">Cabe señalar que por cada cuestión planteada, se considerará una consulta para efecto del servicio contratado. </p>'
						.'<p align="justify">Si el cliente realiza una consulta via internet, deberá escribir de manera clara y sencilla su duda o problema, remitiendo la misma a través del sistema de correo que el profesionista habilite para tal efecto, quien asume la responsabilidad de responder a la brevedad posible las mismas, en un lapso no mayor de 48 horas. </p>'

						.'<strong>6.- HONORARIOS POR SERVICIOS DE ASESORÍA:<br><blockquote>$'
						.$precioContrato
						.'</blockquote></strong>'
						.'<br><br><br><br><br>'

						.'<table cellspacing="0" align="center" width="500" >
							<tbody>
								<tr>
									<td width="50%" >
										<div align="center">
											<h4><strong>EL CLIENTE</strong> </h4>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<h4><strong>V&Aacute;ZQUEZ HERN&Aacute;NDEZ<br>CONTADORES, S.C.</strong> </h4>
										</div>
									</td>
								</tr>
								<tr>
									<td width="50%" >
										<div align="center">
											<strong>_________________________</strong>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<strong>________________________</strong>
										</div>
									</td>
								</tr>
								<tr>
									<td width="50%" >
										<div align="center">
											<h4><strong> '
											.$nombreP
											.'</strong> </h4>
										</div>
									</td>
									<td width="50%">
										<div align="center">
											<h4><strong>L.C.C. Enrique Arturo V&aacute;zquez Hern&aacute;ndez.</strong> </h4>
										</div>
									</td>
								</tr>

							</tbody
						</table>'
						. '</body></html>';
						$nombreArchivo="Contrato_".$folio;
						return PDF::load($html, 'letter', 'portrait')->download($nombreArchivo);
		}

		}

	}

public static	function mesLetra($mesNumero){
		$mes;
		switch($mesNumero){
			case 1:
				$mes="enero";
				break;
			case 2:
				$mes="febrero";
				break;
			case 3:
				$mes="marzo";
				break;
			case 4:
				$mes="abril";
				break;
			case 5:
				$mes="mayo";
				break;
			case 6:
				$mes="junio";
				break;
			case 7:
				$mes="julio";
				break;
			case 8:
				$mes="agosto";
				break;
			case 9:
				$mes="septiembre";
				break;
			case 10:
				$mes="octubre";
				break;
			case 11:
				$mes="noviembre";
				break;
			case 12:
				$mes="diciembre";
				break;
		}
		return $mes;
	}

}
