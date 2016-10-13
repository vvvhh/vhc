@extends('layout')

@section('head')
@stop

@section('title')
  Aviso de Privacidad Proveedores | ContadoresVH
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div class="fondo paddingTexto" style="background-image:url('../../img/piePagina/490457535.jpg ');">
  <div class="container"> <!-- Container -->

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-file-text"></i> Aviso de privacidad. </h1>
      </div>
    </div>

    <div class="well transparenteClaroTxt animacionContenido">

      <div class="row text-justify">
        <div class="col-md-12"> <!-- Columna12 -->

          <h4 class="grisObscuro text-center"><strong>AVISO DE PRIVACIDAD.</strong></h4>
          <strong>  <i>Identidad y domicilio del responsable.. </i> </strong>
          <p>
            <strong>VÁZQUEZ HERNÁNDEZ CONTADORES, S.C. (VHC)</strong>
            extiende el presente aviso de privacidad en su carácter de
Responsable cuya vigilancia y cumplimiento estará a cargo de nuestro Oficial de Privacidad la Lic. Bibiana Núñez Aguilar,
con domicilio en Calle Huatabampo No. 72-1, Col. Roma Sur, Del. Cuauhtémoc, C.P. 06760, México, Distrito Federal, con
motivo de los datos personales que recabe o llegue a recabar como consecuencia de la relación comercial que podremos
llegar a sostener o la que se tenga con usted en carácter de proveedor. Para lo anterior los Datos Personales que recabaremos
son:
          </p>
          <p>
            Nombre Completo, Domicilio Fiscal, Domicilio personal, R.F.C., C.U.R.P., Escolaridad, Historial laboral, Correo Electrónico
            Laboral, Correo Electrónico Personal, Teléfono particular, Firma Autógrafa, Dirección de Página Web empresarial o
            personal y datos de cuenta bancaria.
          </p>
                <strong><u>Finalidades</u>  </strong>
          <p>
            Con motivo de la relación comercial que podremos llegar a sostener o la que ya se tenga con usted en carácter de proveedor,
            podremos recabar sus datos personales para las siguientes finalidades:
          </p>
          <div class="row">
            <div class="col-md-6">
              a) Evaluación de productos y servicios <br>
              b) Evaluación de calidad  <br>
              c) Facturación  <br>
              d) Pago de productos o servicio <br>

              <!-- i) Facturación; <br>  -->
            </div>
            <div class="col-md-6">
              e) Establecer quejas y/o reclamacione <br>
              f) Actualización de datos <br>
              g) Seguridad <br>
              h) Para fines mercadotécnicos, publicitarios o de prospección
              comercial.     <br>
            </div>
          </div>
          <p>
            <br>
            Es importante mencionarle que nos comprometemos a guardar debida confidencialidad respecto de sus datos personales.
          </p>
          <strong>  <u>Finalidades secundarias </u> </strong>
          <p>
            En caso de que no desee que sus datos personales sean tratados para los fines descritos en el inciso h) anterior usted puede
            comunicarlo a nuestro Oficial de Privacidad al correo electrónico
            <a href="mailto:avisodeprivacidad@contadoresvh.com">avisodeprivacidad@contadoresvh.com</a>
            a fin de limitar el
            uso de sus datos para esta finalidad, la cual no es necesaria para la relación jurídica que sostenemos o podremos sostener
            con usted, para lo cual tendrá un plazo de 5-cinco días hábiles a partir del momento en que tenga conocimiento del presente
            Aviso de Privacidad, si no se manifiesta esta negativa, se entenderá que ha otorgado su consentimiento para el tratamiento
            de sus datos para dicha finalidad.
          </p>
          <p>
            Usted puede consultar nuestro Aviso de Privacidad Integral en nuestra página de internet mediante la siguiente dirección
electrónica:  <a href="http://www.contadoresvh.com/" target=blanck>www.contadoresvh.com</a>
          </p>

          <p>
            Se entenderá que usted consiente tácitamente el tratamiento de sus datos personales en términos del presente aviso de
            privacidad de no manifestar oposición al mismo.
          </p>

          <div class="row">
            <div class="col-md-12 text-center">
              Atentamente,<br><br><br><br>
              ________________________________ <br>
              Oficial de Privacidad de VHC
            </div>
          </div>
          <p class="text-right">
            <small> <i>Fecha de última actualización: 28 de marzo de 2014</i> </small>
          </p>

        </div>

      </div>  <!-- row -->

    </div>  <!-- WEll -->
    <div class="row">
      <div class="col-md-2">
        <br>
        <!--   <a class="btn btn-md btn-primary btn-block" href="{{ asset('doc/AVISO_DE_PRIVACIDAD_CLIENTES_VHC.pdf') }}" download><i class="fa fa-file-pdf-o"></i><span class="network-name"> Imprimir</span></a>   -->
        <a class="btn btn-md btn-primary btn-block" href="{{ asset('doc/AP_SIMPL_PROV_VHC.pdf') }}" download><i class="fa fa-file-pdf-o"></i><span class="network-name"> Imprimir</span></a>
        <!--  <a class="btn btn-lg btn-default btn-block" href="{{ URL::to('publicos/integrate/aspirantePDF')}}"><i class="fa fa-file-pdf-o"></i><span class="network-name"> Imprimir</span></a>-->
      </div>
      <div class="col-md-2 col-md-offset-8">
        <br>
        <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar</span></a>
      </div>
    </div>
  </div>  <!-- ./Container -->
</div>
@stop
