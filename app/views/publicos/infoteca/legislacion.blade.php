@extends('layout')

@section('head')
@stop

@section('title')
  Legislación Mexicana | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
{{ HTML::style('css/inicio.css') }}
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/infoteca/467228677.jpg');"class="fondo paddingLegislacion">
  <div class="">

  <!-- Tabla Sitios Interes -->
  <div class="row">
    <div class="col-lg-12">
      <br>
      <h1 class="tituloEntrada tamTitulo grisClaro texto3D"><i class="fa fa-gavel"></i> Legislación</h1>
    </div>

    <div class="row transladarIzquierda">
   <div class="col-md-5 col-md-offset-7">

     <div id="divBuscar" class="row">
         <div class="form-group">
           <div class="col-md-6">
             <input type="te1xt" class="form-control input-sm" id="txtBuscar" name="txtBuscar" pattern="[\d\w\áéíóúÁÉÍÓÚÑñ\s]+" placeholder="Ingrese palabra clave" maxlength="40" required>
             <p class="text-danger formatoTexto14" id="spnBuscar"> </p>
           </div>
           <div class="col-md-2">
             <button  class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
           </div>
         </div>
       </div>
       <div class="row hidden bordeRedondo transladarIzquierda" id="tblResultados">
         <div class="table-responsive" >
           <table class="table table-striped table-hover">
             <thead>
               <tr>
                 <th class="col-md-2 text-center">Resultados:</th>
               </tr>
             </thead>
             <tbody id="tbodyResultados"></tbody>
           </table>
         </div>
       </div>

      </div>
    </div>
    <br><br>



    <div class="row well transparenteObscuro">
      <div class="row">
        <div class="col-md-12   transladarDerecha" >
          <button id="titConstitucion" class="btn btn-primary col-md-2"><i class="fa fa-book"></i> Constituciones Políticas</button>
          <button id="titCodigo"      class="btn btn-primary col-md-1"><i class="fa fa-book"></i> Códigos</button>
          <button id="titLeyes"       class="btn btn-primary col-md-2"><i class="fa fa-book"></i> Legislación federal</button>
          <button id="titReglamentos" class="btn btn-primary col-md-2"><i class="fa fa-book"></i> Reglamentos</button>
          <!--    <button id="titEstatutos"   class="btn btn-primary col-md-2"><i class="fa fa-book"></i> Estatutos</button>-->
          <button id="titEstatal"   class="btn btn-primary col-md-2"><i class="fa fa-book"></i> Legislación estatal</button>
          <button id="titOtras"       class="btn btn-primary col-md-1"><i class="fa fa-book"></i> Otras</button>
          <button id="titNOM"       class="btn btn-primary col-md-2"><i class="fa fa-book"></i> NOM STPS</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 hidden" id="menuLegislacion">
                @include('seccionesVista.menuLegislacionSat')
        </div>

        <div class="col-md-2 hidden" id="menuLegEstatal">
                @include('seccionesVista.menuLegislacionEstatal')
        </div>

      <div class="col-md-12" id="divContenido">
        <div class="table-responsive tamTab" id="tblLeyes">
          <table class="table table-striped table-bordered table-hover">
            <tbody id="tbodyLeyes" class=""></tbody>
          </table>
        </div>  <!-- responsive -->
      </div>
      </div>


    </div> <!-- /Tabla de clientes -->

      <!-- ./well contenedor general -->


  <div class="row animacionContenido" >
    <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
      <a class="btn btn-md btn-primary btn-block" href="{{ URL::to('publicos/infoteca')}}"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar Infoteca</span></a>
    </div>
  </div>

</div>

</div>

</div>
@stop

@section('javascript')
<script>
	$('#navInfoteca').addClass('activoLi');
</script>
@stop

@section('js')
  {{HTML::script('js/publicos/infoteca/legislacion.js')}}
@stop
