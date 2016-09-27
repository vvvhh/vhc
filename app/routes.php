<?php

Route::get('/', array('uses' => 'RssController@rssInicio'));
Route::post('/login', array('uses' => 'UsuarioController@login'));



/*INFOTECA*/
Route::group(array('prefix' => 'publicos/infoteca'), function(){

	/*VIDEOS*/
	Route::get('videos/video1', function(){
		return View::make('publicos.infoteca.videos.video1');
	});
	Route::get('videos/video2', function(){
		return View::make('publicos.infoteca.videos.video2');
	});
	Route::get('videos/video3', function(){
		return View::make('publicos.infoteca.videos.video3');
	});
	Route::get('videos/video4', function(){
		return View::make('publicos.infoteca.videos.video4');
	});

	/*PODCAST*/
	Route::get('podcast', function(){
		return View::make('publicos.infoteca.podcast');
	});
		/*ARTICULOS*/
	Route::get('articulos/articulo1', function(){
		return View::make('publicos.infoteca.articulos.articulo2');
	});
	Route::get('articulos/articulo2', function(){
		return View::make('publicos.infoteca.articulos.articulo2');
	});
	Route::get('articulos/articulo3', function(){
		return View::make('publicos.infoteca.articulos.articulo3');
	});
	Route::get('articulos/articulo4', function(){
		return View::make('publicos.infoteca.articulos.articulo4');
	});
	Route::get('articulos/articulo5', function(){
		return View::make('publicos.infoteca.articulos.articulo5');
	});
	Route::get('articulos/articulo6', function(){
		return View::make('publicos.infoteca.articulos.articulo6');
	});
	Route::get('articulos/articulo7', function(){
		return View::make('publicos.infoteca.articulos.articulo7');
	});

	/*RESENAS*/
	Route::get('resenas/resena1', function(){
		return View::make('publicos.infoteca.resenas.resena1');
	});
	Route::get('resenas/resena2', function(){
		return View::make('publicos.infoteca.resenas.resena2');
	});
	/*TUTORIALES*/
	Route::get('tutoriales/tutorial1', function(){
		return View::make('publicos.infoteca.tutoriales.tutorial1');
	});
	Route::get('tutoriales/tutorial2', function(){
		return View::make('publicos.infoteca.tutoriales.tutorial2');
	});
	Route::get('tutoriales/tutorial3', function(){
		return View::make('publicos.infoteca.tutoriales.tutorial3');
	});

	/*INDICADORES FISCALES*/
	Route::get('indicadoresF/seguridadS/ssCuotasImss', function(){
		return View::make('publicos.infoteca.indicadoresF.seguridadS.ssCuotasImss');
	});
	Route::get('indicadoresF/seguridadS/ssCalendario', function(){
		return View::make('publicos.infoteca.indicadoresF.seguridadS.ssCalendario');
	});
	Route::get('indicadoresF/seguridadS/ssSancion', function(){
		return View::make('publicos.infoteca.indicadoresF.seguridadS.ssSancion');
	});

	Route::get('indicadoresF/lavadoD/ldLimite', function(){
		return View::make('publicos.infoteca.indicadoresF.lavadoD.ldLimite');
	});

	Route::get('indicadoresF/laboral/laSalario', function(){
		return View::make('publicos.infoteca.indicadoresF.laboral.laSalario');
	});
	Route::get('indicadoresF/laboral/laSalarioProfecionales', function(){
		return View::make('publicos.infoteca.indicadoresF.laboral.laSalarioProfecionales');
	});

	Route::get('indicadoresF/comercioE/coMultasLeyAduanera', function(){
		return View::make('publicos.infoteca.indicadoresF.comercioE.coMultasLeyAduanera');
	});
	Route::get('indicadoresF/comercioE/coMultasC', function(){
		return View::make('publicos.infoteca.indicadoresF.comercioE.coMultasC');
	});
	Route::get('indicadoresF/comercioE/coLey', function(){
		return View::make('publicos.infoteca.indicadoresF.comercioE.coLey');
	});

	Route::get('indicadoresF/financiero/fiUdis', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiUdis');
	});
	Route::get('indicadoresF/financiero/fiEquivalenciaDolar', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiEquivalenciaDolar');
	});
	Route::get('indicadoresF/financiero/fiEquivalenciaO', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiEquivalenciaO');
	});
	Route::get('indicadoresF/financiero/fiCetes', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiCetes');
	});
	Route::get('indicadoresF/financiero/fiCppc', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiCppc');
	});
	Route::get('indicadoresF/financiero/fiTiie', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiTiie');
	});
	Route::get('indicadoresF/financiero/fiIncp', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiIncp');
	});
	Route::get('indicadoresF/financiero/fiInflacion', function(){
		return View::make('publicos.infoteca.indicadoresF.financiero.fiInflacion');
	});


	Route::get('indicadoresF/impuestosF/ifTasasRecargo', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTasasRecargo');
	});
	Route::get('indicadoresF/impuestosF/ifCantidadesCFF', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifCantidadesCFF');
	});
	Route::get('indicadoresF/impuestosF/ifCantidadesLIF', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifCantidadesLIF');
	});
	Route::get('indicadoresF/impuestosF/ifIsr-pp', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifIsr-pp');
	});
	Route::get('indicadoresF/impuestosF/ifIsr-da', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifIsr-da');
	});
	Route::get('indicadoresF/impuestosF/ifReincos', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifReincos');
	});
	Route::get('indicadoresF/impuestosF/ifTSemestralesPrimario', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTSemestralesPrimario');
	});
	Route::get('indicadoresF/impuestosF/ifTSueldosSalarios', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTSueldosSalarios');
	});
	Route::get('indicadoresF/impuestosF/ifTArrendamientoTrimestral', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTArrendamientoTrimestral');
	});
	Route::get('indicadoresF/impuestosF/ifTMensualActividad', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTMensualActividad');
	});
	Route::get('indicadoresF/impuestosF/ifCalendarioObligaciones', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifCalendarioObligaciones');
	});
	Route::get('indicadoresF/impuestosF/ifInstitucionesCredito', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifInstitucionesCredito');
	});
	Route::get('indicadoresF/impuestosF/ifTasasRecargo2', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifTasasRecargo2');
	});
	Route::get('indicadoresF/impuestosF/ifDirectorioSat', function(){
		return View::make('publicos.infoteca.indicadoresF.impuestosF.ifDirectorioSat');
	});



		/*LEGISLACION*/
		Route::get('legislacion', function(){
			return View::make('publicos.infoteca.legislacion');
		});
});

	/*ADMINISTRADOR*/
Route::group(array('prefix' => 'admin', 'before' => 'admin'), function()
	{
		Route::get('/', function(){
			return View::make('admin.principalA');
		});
		Route::get('logout', array('uses' => 'UsuarioController@logout'));

		Route::get('/cambioCA', function(){
			return View::make('admin.cambioCA');
		});
		Route::post('cambiarCA', array('uses'    => 'AdmController@cambiarCA'));

		Route::get('/cambioAsesores', function(){
			return View::make('admin.cambioAsesores');
		});
		Route::get('getUsuAsesor', array('uses'      => 'AsesorController@getUsuAsesor'));
		Route::post('cambiarCAsesores', array('uses' => 'AsesorController@cambiarCAsesores'));


		Route::get('/asesorAgrEditA', function(){
			return View::make('admin.asesorAgrEdiA');
		});
		Route::get('getAsesores', array('uses' => 'AsesoresController@getAsesores'));
		Route::post('agregarAsesor', array('uses' => 'AsesoresController@agregarAsesor'));
		Route::post('bajaAsesor', array('uses' => 'AsesoresController@bajaAsesor'));
		Route::post('seleccionarAsesor', array('uses' => 'AsesoresController@seleccionarAsesor'));
		Route::post('editarAsesor', array('uses' => 'AsesoresController@editarAsesor'));

		Route::get('getAsesoresActivo', array('uses' => 'AsesoresController@getAsesoresActivo'));

		Route::get('/servAgregarA', function(){
			return View::make('admin.servAgregarA');
		});
		Route::get('/servEditarA', function(){
			return View::make('admin.servEditarA');
		});

		Route::get('/actualizarA', function(){
			return View::make('admin.actualizarA');
		});
		Route::get('/clienteAgregarA', function(){
			return View::make('admin.clienteAgregarA');
		});
		Route::get('/clienteA', function(){
			return View::make('admin.clienteA');
		});
		Route::get('/consultasA', function(){
			return View::make('admin.consultasA');
		});
		Route::get('/consultaActivarA', function(){
			return View::make('admin.consultaActivarA');
		});
		Route::get('/consultaRecibidaA', function(){
			return View::make('admin.consultaRecibidaA');
		});
		Route::get('/consultaTelA', function(){
			return View::make('admin.consultaTelA');
		});
		Route::get('/consultaGratisA', function(){
			return View::make('admin.consultaGratisA');
		});
		Route::get('verConsultasGratis', array('uses' => 'ConsultasGratisController@verConsultasGratis'));	/*consultas de clientes*/
		Route::post('verGratisEspecifica', array('uses' => 'ConsultasGratisController@verGratisEspecifica'));
		Route::post('responderGratis', array('uses' => 'ConsultasGratisController@responderGratis'));

		Route::get('/elnaceLegislacion', function(){
			return View::make('admin.elnaceLegislacion');
		});

		Route::get('/preciosTelefonoA', function(){
			return View::make('admin.preciosTelefonoA');
		});
		Route::get('/preciosLineaA', function(){
			return View::make('admin.preciosLineaA');
		});

		Route::get('/precioTipoA', function(){
			return View::make('admin.precioTipoA');
		});

		Route::get('/preregistroA', function(){
			return View::make('admin.preregistroA');
		});

		Route::get('/reporteInscritosA', function(){
			return View::make('admin.reporteInscritosA');
		});
		Route::get('/reportePagosA', function(){
			return View::make('admin.reportePagosA');
		});
		Route::get('/reportePagadosA', function(){
			return View::make('admin.reportePagadosA');
		});
		Route::get('/reporteSinPagarA', function(){
			return View::make('admin.reporteSinPagarA');
		});
		Route::get('/reporteConsultasA', function(){
			return View::make('admin.reporteConsultasA');
		});
		Route::get('/reporteContratosA', function(){
			return View::make('admin.reporteContratosA');
		});

		Route::get('/reporteCLaboral', function(){
			return View::make('admin.reporteCLaboral');
		});
		Route::get('getPersonasCLaboral', array('uses'  => 'AutodiagnosticoController@getPersonasCLaboral'));
		Route::post('getCGeneral', array('uses'      => 'AutodiagnosticoController@getCGeneral'));
		Route::post('getCCapacitacion', array('uses' => 'AutodiagnosticoController@getCCapacitacion'));
		Route::post('getCSeguridad', array('uses'    => 'AutodiagnosticoController@getCSeguridad'));
		Route::post('getPersonaLaboral', array('uses'=> 'AutodiagnosticoController@getPersonaLaboral'));

		Route::get('/reporteCPLD', function(){
			return View::make('admin.reporteCPLD');
		});
		Route::get('getPersonasCPLD', array('uses'  => 'AutodiagnosticoPLDController@getPersonasCPLD'));
		Route::post('getrespuestasPLD', array('uses'=> 'AutodiagnosticoPLDController@getrespuestasPLD'));
		Route::post('getPersonaPLD', array('uses'=> 'AutodiagnosticoPLDController@getPersonaPLD'));

		Route::get('/msjContactos', function(){
			return View::make('admin.msjContactos');
		});
		Route::get('getMContacto', array('uses' => 'ContactoController@getMContacto'));

		Route::post('getServicios', array('uses'    => 'ServiciosController@getServicios'));/*servicios actuales*/
		Route::post('ingresoServicio', array('uses' => 'ServiciosController@ingresoServicio'));
		Route::post('buscarServicio', array('uses'  => 'ServiciosController@buscarServicio'));
		Route::post('getTodosServicios', array('uses'  => 'ServiciosController@getTodosServicios'));
		Route::post('getServicio', array('uses'     => 'ServiciosController@getServicio'));
		Route::post('editarServicio', array('uses'  => 'ServiciosController@editarServicio'));
		Route::post('darBajaServicio', array('uses'  => 'ServiciosController@darBajaServicio'));

		Route::post('activarCliente', array('uses' => 'PersonasController@activarCliente'));	/*Preregistros*/
		Route::post('ingresoPerMoralAdm', array('uses' => 'PersonasController@ingresoPerMoralAdm'));
		Route::post('ingresoPerFisicaAdm', array('uses' => 'PersonasController@ingresoPerFisicaAdm'));

		Route::post('getPreregistros', array('uses' => 'PersonasController@getPreregistros'));	/*Preregistros*/
		Route::post('getPreregistro', array('uses' => 'PersonasController@getPreregistro'));
		Route::get('pdfInfoPre', array('uses' => 'ReportesPDFController@pdfInfoPre'));

		Route::post('getSolicitudesPersona', array('uses' => 'SolicitudesController@getSolicitudesPersona'));
		Route::get('getSolicitudesPersonaDes', array('uses' => 'SolicitudesController@getSolicitudesPersonaDes'));	/*Activar */
		Route::post('getPrecioPaquete', array('uses' => 'PreciosTipoController@getPrecioPaquete'));
		Route::get('getTodosPrecioTipo', array('uses' => 'PreciosTipoController@getTodosPrecioTipo'));
		Route::post('agregarPrecioTipo', array('uses' => 'PreciosTipoController@agregarPrecioTipo'));
		Route::post('getPrecioTipo', array('uses' => 'PreciosTipoController@getPrecioTipo'));
		Route::post('editarPrecioTipo', array('uses' => 'PreciosTipoController@editarPrecioTipo'));
		Route::post('darBajaPrecioTipo', array('uses' => 'PreciosTipoController@darBajaPrecioTipo'));

		Route::get('getTodosPrecioTelefono', array('uses' => 'PreciosTelefonoController@getTodosPrecioTelefono'));
		Route::get('getPrecioTipoActivo', array('uses' => 'PreciosTipoController@getPrecioTipoActivo'));
		Route::post('agregarPrecioTelefono', array('uses' => 'PreciosTelefonoController@agregarPrecioTelefono'));
		Route::post('seleccionarPrecioTelefono', array('uses' => 'PreciosTelefonoController@seleccionarPrecioTelefono'));
		Route::post('editarPTelefonico', array('uses' => 'PreciosTelefonoController@editarPTelefonico'));
		Route::post('bajaPrecioTelefono', array('uses' => 'PreciosTelefonoController@bajaPrecioTelefono'));

		Route::get('getTodosPrecioLinea', array('uses' => 'PreciosLineaController@getTodosPrecioLinea'));
		Route::post('agregarPrecioLinea', array('uses' => 'PreciosLineaController@agregarPrecioLinea'));
		Route::post('seleccionarPrecioLinea', array('uses' => 'PreciosLineaController@seleccionarPrecioLinea'));
		Route::post('editarPLinea', array('uses' => 'PreciosLineaController@editarPLinea'));
		Route::post('bajaPrecioLinea', array('uses' => 'PreciosLineaController@bajaPrecioLinea'));

		Route::post('editarPago', array('uses' => 'SolicitudesController@editarPago'));

		Route::post('verConsultasClientes', array('uses' => 'ConsultaClienteController@verConsultasClientes'));	/*Ver consultas de clientes*/
		Route::post('verConsultaEspecifica', array('uses' => 'ConsultaClienteController@verConsultaEspecifica'));
		Route::post('responderConsulta', array('uses' => 'ConsultaClienteController@responderConsulta'));
		Route::get('getClientesTel', array('uses' => 'SolicitudesController@getClientesTel'));
		Route::post('getClienteTel', array('uses' => 'SolicitudesController@getClienteTel'));
		Route::post('getSolPerPagoTel', array('uses' => 'SolicitudesController@getSolPerPagoTel'));
		Route::post('nConsultasServ', array('uses' => 'ContratoController@nConsultasServ'));
		Route::post('ingresarConsultaTel', array('uses' => 'ConsultaClienteController@ingresarConsultaTel'));

		Route::get('getClientes', array('uses' => 'PersonasController@getClientes'));
		Route::post('getCliente', array('uses' => 'PersonasController@getCliente'));

		Route::post('getPersona', array('uses' => 'PersonasController@getPersona'));
		Route::post('bajaPersona', array('uses' => 'PersonasController@bajaPersona'));
		Route::get('getPrecioTelActivo', array('uses' => 'PreciosTelefonoController@getPrecioTelActivo'));
		Route::get('getPrecioLinActivo', array('uses' => 'PreciosLineaController@getPrecioLinActivo'));
		Route::post('cambiarPrecioP', array('uses' => 'PersonasController@cambiarPrecioP'));

		Route::get('pdfRegistro', array('uses' => 'PersonaRegPDFController@pdfRegistro'));

		Route::post('getPersonas', array('uses' => 'PersonasController@getPersonas'));	/*Reporte inscritos*/
		Route::get('pdfInscritos', array('uses' => 'ReportesPDFController@pdfInscritos'));

		Route::post('getSolicitudes', array('uses' => 'SolicitudesController@getSolicitudes'));/*Reporte pagos*/
		Route::get('pdfReportePago', array('uses' => 'ReportesPDFController@pdfReportePago'));

		Route::post('getSolicitudesPagados', array('uses' => 'SolicitudesController@getSolicitudesPagados'));/*Reporte pagados*/
		Route::get('pdfReportePagados', array('uses' => 'ReportesPDFController@pdfReportePagados'));

		Route::post('getSolicitudesSinPagar', array('uses' => 'SolicitudesController@getSolicitudesSinPagar'));/*Reporte sin pagados*/
		Route::get('pdfReporteSinPagar', array('uses' => 'ReportesPDFController@pdfReporteSinPagar'));

		Route::post('getContratoPersona', array('uses' => 'ContratoController@getContratoPersona'));/*Reporte Contratos Consultas*/
		Route::post('nConsultas', array('uses' => 'ContratoController@nConsultas'));
		Route::post('getContenidoConsultas', array('uses' => 'ConsultaClienteController@getContenidoConsultas'));/*contenido de consultas*/
		Route::get('pdfReporteContenidoC', array('uses' => 'ReportesPDFController@pdfReporteContenidoC'));
		Route::get('pdfReporteServicioC', array('uses' => 'ReportesPDFController@pdfReporteServicioC'));

		Route::get('getContratos', array('uses' => 'ContratoController@getContratos'));
		Route::get('pdfReporteContratos', array('uses' => 'ReportesPDFController@pdfReporteContratos'));

		Route::post('editarPersona', array('uses' => 'PersonasController@editarPersona'));/*Editar Datos persona*/

		Route::get('getContratoMoral', array('uses' => 'ContratoPDFController@getContratoMoral'));/*mostrarContrato*/

		Route::get('pdfServCliente', array('uses' => 'ReportesPDFController@pdfServCliente'));/*mostrarContrato*/

		Route::post('restaurarContra', array('uses' => 'PersonasController@restaurarContra'));

		Route::get('/getLegTodos', array('uses' => 'LegislacionLinkController@getLegTodos'));
		Route::post('/getLegislacion', array('uses' => 'LegislacionLinkController@getLegislacion'));
		Route::post('/getLegEspecifico', array('uses' => 'LegislacionLinkController@getLegEspecifico'));
		Route::post('/editarELegislacion', array('uses' => 'LegislacionLinkController@editarELegislacion'));
		Route::post('/eliminarEnlaceLeg', array('uses' => 'LegislacionLinkController@eliminarEnlaceLeg'));
		Route::post('/agregarEnlace', array('uses' => 'LegislacionLinkController@agregarEnlace'));

	});

	/*RUTAS PARA ASESORES*/
Route::group(array('prefix' => 'asesor', 'before' => 'asesor'), function()
{
	Route::get('logout', array('uses' => 'UsuarioController@logout'));

	Route::get('/', function(){
		return View::make('asesor.principalAs');
	});

	Route::get('/consultaRecibidaAs', function(){
		return View::make('asesor.consultaRecibidaAs');
	});
	Route::post('verConsultasClientes', array('uses' => 'ConsultaClienteController@verConsultasClientes'));	/*Consultas de clientes*/
	Route::post('verConsultaEspecifica', array('uses' => 'ConsultaClienteController@verConsultaEspecifica'));
	Route::post('responderConsulta', array('uses' => 'ConsultaClienteController@responderConsulta'));

	Route::get('/consultaTelAs', function(){
		return View::make('asesor.consultaTelAs');
	});
	Route::get('getClientesTel', array('uses' => 'SolicitudesController@getClientesTel'));
	Route::post('getClienteTel', array('uses' => 'SolicitudesController@getClienteTel'));
	Route::post('getSolPerPagoTel', array('uses' => 'SolicitudesController@getSolPerPagoTel'));
	Route::post('nConsultasServ', array('uses' => 'ContratoController@nConsultasServ'));
	Route::post('ingresarConsultaTel', array('uses' => 'ConsultaClienteController@ingresarConsultaTel'));
	Route::post('nConsultas', array('uses' => 'ContratoController@nConsultas'));

	Route::get('getAsesoresActivo', array('uses' => 'AsesoresController@getAsesoresActivo'));

	Route::get('/consultaGratisAs', function(){
		return View::make('asesor.consultaGratisAs');
	});
	Route::get('verConsultasGratis', array('uses' => 'ConsultasGratisController@verConsultasGratis'));	/*Ver consultas de clientes*/
	Route::post('verGratisEspecifica', array('uses' => 'ConsultasGratisController@verGratisEspecifica'));
	Route::post('responderGratis', array('uses' => 'ConsultasGratisController@responderGratis'));

	Route::get('/reporteInscritosAs', function(){
		return View::make('asesor.reporteInscritosAs');
	});
	Route::post('getPersonas', array('uses' => 'PersonasController@getPersonas'));	/*Reporte inscritos*/
	Route::get('pdfInscritos', array('uses' => 'ReportesPDFController@pdfInscritos'));

	Route::get('/reportePagosAs', function(){
		return View::make('asesor.reportePagosAs');
	});
	Route::post('getSolicitudes', array('uses' => 'SolicitudesController@getSolicitudes'));/*Reporte pagos*/
	Route::get('pdfReportePago', array('uses' => 'ReportesPDFController@pdfReportePago'));

	Route::get('/reportePagadosAs', function(){
		return View::make('asesor.reportePagadosAs');
	});
	Route::post('getSolicitudesPagados', array('uses' => 'SolicitudesController@getSolicitudesPagados'));/*Reporte pagados*/
	Route::get('pdfReportePagados', array('uses' => 'ReportesPDFController@pdfReportePagados'));

	Route::get('/reporteSinPagarAs', function(){
		return View::make('asesor.reporteSinPagarAs');
	});
	Route::post('getSolicitudesSinPagar', array('uses' => 'SolicitudesController@getSolicitudesSinPagar'));/*Reporte sin pagados*/
	Route::get('pdfReporteSinPagar', array('uses' => 'ReportesPDFController@pdfReporteSinPagar'));

	Route::get('/reporteContratosAs', function(){
		return View::make('asesor.reporteContratosAs');
	});
	Route::get('getContratos', array('uses' => 'ContratoController@getContratos'));
	Route::post('getPrecioPaquete', array('uses' => 'PreciosTipoController@getPrecioPaquete'));
	Route::get('pdfReporteContratos', array('uses' => 'ReportesPDFController@pdfReporteContratos'));

	Route::get('/reporteConsultasAs', function(){
		return View::make('asesor.reporteConsultasAs');
	});
	Route::get('getClientes', array('uses' => 'PersonasController@getClientes'));
	Route::post('getCliente', array('uses' => 'PersonasController@getCliente'));
	Route::post('getContratoPersona', array('uses' => 'ContratoController@getContratoPersona'));/*Reporte Contratos Consultas*/
	Route::post('getContenidoConsultas', array('uses' => 'ConsultaClienteController@getContenidoConsultas'));
	Route::get('pdfReporteContenidoC', array('uses' => 'ReportesPDFController@pdfReporteContenidoC'));
	Route::get('pdfReporteServicioC', array('uses' => 'ReportesPDFController@pdfReporteServicioC'));

	Route::get('getContratoMoral', array('uses' => 'ContratoPDFController@getContratoMoral'));/*mostrarContrato*/

	Route::get('/consultasAs', function(){
		return View::make('asesor.consultasAs');
	});
	Route::post('getSolicitudesPersona', array('uses' => 'SolicitudesController@getSolicitudesPersona'));	/*realizar pago*/
	Route::get('pdfServCliente', array('uses' => 'ReportesPDFController@pdfServCliente'));

	Route::get('/busquedaAs', function(){
		return View::make('asesor.busquedaAs');
	});
	Route::post('getBusquedaConsulta', array('uses' => 'ConsultaClienteController@getBusquedaConsulta'));
});

	/*RUTAS SOLO PARA USUARIOS*/
Route::group(array('prefix' => 'usuario', 'before' => 'usuario'), function()
	{
		Route::get('/', function(){
			return View::make('usuario.principalU');
		});
		Route::get('logout', array('uses' => 'UsuarioController@logout'));

		Route::get('/principalU', function(){
			return View::make('usuario.principalU');
		});

		Route::get('/cambioCU', function(){
			return View::make('usuario.cambioCU');
		});
		Route::post('cambiarContra', array('uses' => 'PersonasController@cambiarContra'));

		Route::get('/contratarU', function(){
			return View::make('usuario.contratarU');
		});
		Route::get('/pagarContratoU', function(){
			return View::make('usuario.pagarContratoU');
		});
		Route::get('/payPalU', function(){
			return View::make('usuario.payPalU');
		});
		Route::get('/payPalTelU', function(){
			return View::make('usuario.payPalTelU');
		});
		Route::get('/realizarConsultaU', function(){
			return View::make('usuario.realizarConsultaU');
		});
		Route::get('/realizarTelU', function(){
			return View::make('usuario.realizarTelU');
		});
		Route::post('nConsultas', array('uses' => 'ContratoController@nConsultas'));
		Route::post('getSolPerPagoLin', array('uses' => 'SolicitudesController@getSolPerPagoLin'));
		Route::post('getSolPerPagoTel', array('uses' => 'SolicitudesController@getSolPerPagoTel'));

		Route::post('nConsultasServ', array('uses' => 'ContratoController@nConsultasServ'));
		Route::post('ingresarConsulta', array('uses' => 'ConsultaClienteController@ingresarConsulta'));
		Route::post('getContenidoConsultas', array('uses' => 'ConsultaClienteController@getContenidoConsultas'));

		Route::get('/informacionU', function(){
			return View::make('usuario.informacionU');
		});
		Route::post('getPersona', array('uses' => 'PersonasController@getPersona'));
		Route::post('precioTelCliente', array('uses' => 'PreciosTelefonoController@precioTelCliente'));
		Route::post('precioLinCliente', array('uses' => 'PreciosLineaController@precioLinCliente'));
    Route::post('getPrecioPaquete', array('uses' => 'PreciosTipoController@getPrecioPaquete'));

		Route::post('getServicios', array('uses' => 'ServiciosController@getServicios'));/*realizar contrato*/
		Route::post('agregarSolicitud', array('uses' => 'SolicitudesController@agregarSolicitud'));

		Route::post('getSolicitudesPersona', array('uses' => 'SolicitudesController@getSolicitudesPersona'));	/*realizar pago*/

		Route::get('/piePagina/avisoPrivacidadClientes', function(){
			return View::make('usuario.piePagina.avisoPrivacidadClientes');
		});
		Route::get('/piePagina/avisoPrivacidadProveedores', function(){
			return View::make('usuario.piePagina.avisoPrivacidadProveedores');
		});
		Route::get('/piePagina/politicaUso', function(){
			return View::make('usuario.piePagina.politicaUso');
		});
		Route::get('/piePagina/propiedadIntelectual', function(){
			return View::make('usuario.piePagina.propiedadIntelectual');
		});

		Route::get('getContratoMoral', array('uses' => 'ContratoPDFController@getContratoMoral'));/*mostrarContrato*/

		Route::post('verificarGratis', array('uses' => 'ConsultasGratisController@verificarGratis'));/*varificaSi tiene gratis*/
		Route::post('ingresarConsultaGratis', array('uses' => 'ConsultasGratisController@ingresarConsultaGratis'));/*Enviar gratis*/
		Route::post('getRespuestaGratis', array('uses' => 'ConsultasGratisController@getRespuestaGratis'));
		Route::post('leidoResGratis', array('uses' => 'ConsultasGratisController@leidoResGratis'));

		Route::post('/solicitudFactura', array('uses' => 'ContratoController@solicitudFactura'));/*Solicitar factura*/

		Route::post('editarPersona', array('uses' => 'PersonasController@editarPersona'));/*Editar informacion*/

		Route::get('/ayudaContratar', function(){
			return View::make('usuario.ayudaContratar');
		});
		Route::get('/ayudaConsulta', function(){
			return View::make('usuario.ayudaConsulta');
		});
		Route::get('/ayudaConsultaT', function(){
			return View::make('usuario.ayudaConsultaT');
		});
		Route::get('/ayudaPagos', function(){
			return View::make('usuario.ayudaPagos');
		});
		Route::get('/ayudaActualizar', function(){
			return View::make('usuario.ayudaActualizar');
		});
		Route::get('/ayudaLeerConsulta', function(){
			return View::make('usuario.ayudaLeerConsulta');
		});
	});


	/*BARRA DE NAVEGACION*/
Route::group(array('prefix' => 'publicos'), function(){ /*publicos/contratoMoral*/

	Route::get('rss', array('uses' => 'RssController@leerRss'));

	Route::get('contacto', function(){
		return View::make('publicos.contacto');
	});
	Route::post('enviarContacto', array('uses' => 'ContactoController@enviarCorreo'));

	Route::get('sobreNosotros', function(){
		return View::make('publicos.sobreNosotros');
	});

	Route::get('sobreNosotrosCCconduta', function(){
		return View::make('publicos.sobreNosotrosCCconduta');
	});

	Route::get('servicios', function(){
		return View::make('publicos.servicios1');
	});


	Route::get('infoteca', function(){
		return View::make('publicos.infoteca');
	});
	Route::post('infoteca/getLegislacion', array('uses' => 'LegislacionLinkController@getLegislacion'));
	Route::post('infoteca/getLegislaciones', array('uses' => 'LegislacionLinkController@getLegislaciones'));

	Route::get('integrate', function(){
		return View::make('publicos.integrate');
	});
	Route::post('integrate/enviarCurriculum', array('uses' => 'IntegrateController@enviarCurriculum'));

	Route::get('portafolio', function(){
		return View::make('publicos.portafolio');
	});
	Route::get('sInteres', function(){
		return View::make('publicos.sInteres');
	});
});

		/*PIE PAGINA*/
Route::group(array('prefix' => 'publicos/piePagina'), function(){
	Route::get('mapaSitio', function(){
		return View::make('publicos.piePagina.mapaSitio');
	});
	Route::get('avisoPrivacidadClientes', function(){
		return View::make('publicos.piePagina.avisoPrivacidadClientes');
	});
	Route::get('avisoPrivacidadProveedores', function(){
			return View::make('publicos.piePagina.avisoPrivacidadProveedores');
		});

		Route::get('avisoPrivacidadEmpleados', function(){
				return View::make('publicos.piePagina.avisoPrivacidadEmpleados');
			});
	Route::get('politicaUso', function(){
		return View::make('publicos.piePagina.politicaUso');
	});
	Route::get('propiedadIntelectual', function(){
		return View::make('publicos.piePagina.propiedadIntelectual');
	});
});

		/*SERVICIOS*/
Route::group(array('prefix' => 'publicos/servicios'), function(){
	Route::get('obtenerAsesoria', function(){
		return View::make('publicos.servicios.obtenerAsesoria');
	});
	Route::get('contratarServicio', function(){
		return View::make('publicos.servicios.contratarServicio');
	});
	Route::get('auditoria', function(){
		return View::make('publicos.servicios.auditoria');
	});
	Route::get('contables', function(){
		return View::make('publicos.servicios.contables');
	});
	Route::get('fiscal', function(){
		return View::make('publicos.servicios.fiscal');
	});
	Route::get('pLavado', function(){
		return View::make('publicos.servicios.pLavado');
	});
	Route::get('otros', function(){
		return View::make('publicos.servicios.otros');
	});
	Route::get('juridico', function(){
		return View::make('publicos.servicios.juridico');
	});
	Route::get('asesoria', function(){
		return View::make('publicos.servicios.asesoria');
	});
	Route::get('laborales', function(){
		return View::make('publicos.servicios.laborales');
	});
	Route::get('autodiagnostico', function(){
		return View::make('publicos.servicios.autodiagnostico');
	});
	Route::get('autodiagnosticoCompleto', function(){
		return View::make('publicos.servicios.autodiagnosticoCompleto');
	});
	Route::post('enviarAutodiagnostico', array('uses' => 'AutodiagnosticoController@enviarCorreo'));
	Route::get('laboral2', function(){
		return View::make('publicos.servicios.laboral2');
	});
	Route::get('autodiagnosticoPLD', function(){
		return View::make('publicos.servicios.autodiagnosticoPLD');
	});
	Route::post('enviarAutodiagnosticoPLD', array('uses' => 'AutodiagnosticoPLDController@enviarCorreo'));
	Route::get('auditoriaG', function(){
		return View::make('publicos.servicios.auditoriaG');
	});
});

	/*ASESORIAS*/
Route::group(array('prefix' => 'publicos/servicios/asesoriaServ'), function(){
	Route::get('consultaAsesoria', function(){
		return View::make('publicos.servicios.asesoriaServ.consultaAsesoria');
	});
	Route::post('enviarConsulta', array('uses' => 'ConsultaController@enviarConsulta'));


	Route::get('loginCliente', function(){
		return View::make('publicos.servicios.asesoriaServ.loginCliente');
	});
	Route::get('registroContratar', function(){
		return View::make('publicos.servicios.asesoriaServ.registroContratar');
	});
	Route::post('ingresoPersonaFisica', array('uses' => 'PersonasController@ingresoPersonaFisica'));
	Route::post('ingresoPersonaMoral', array('uses' => 'PersonasController@ingresoPersonaMoral'));

});

/*INTEGRATE*/
Route::group(array('prefix' => 'publicos/integrate'), function(){
	Route::get('integratePostulate', function(){
		return View::make('publicos.integrate.integratePostulate');
	});
	Route::get('integratePElegir', function(){
		return View::make('publicos.integrate.integratePElegir');
	});
	Route::get('eCConducta', function(){
		return View::make('publicos.integrate.eCConducta');
	});
	Route::get('integrateDesarrollo', function(){
		return View::make('publicos.integrate.integrateDesarrollo');
	});
	Route::get('integrateRol', function(){
		return View::make('publicos.integrate.integrateRol');
	});
	Route::get('integrateVacantes', function(){
		return View::make('publicos.integrate.integrateVacantes');
	});
	Route::get('integrateAvisoP', function(){
		return View::make('publicos.integrate.integrateAvisoP');
	});

});
