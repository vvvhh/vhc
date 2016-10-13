@extends('layoutTutorial')

@section('head')
@stop

@section('title')
  Tutoriales | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
    <div class="well trasparenteClaroPlus">  <!-- Well -->
<!--
      <div class="row">
        <div class="col-md-12">
          <iframe height="500" width="99%"
            src="https://www.youtube.com/embed/bbG-draj6gI">
          </iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="texto3d grisObscuro">Tutorial 1</h3>
        </div>
      </div>
-->
<!--   <video height="400" width="100%" controls>
  <source src="{{URL::asset('video/SpotVHC.mp4')}}">
</video>
-->
  <video height="400" width="100%" controls preload>
      <source src="{{URL::asset('video/infoteca/tutoriales/consultaCurp.mp4')}}" >
    <!--
     <source src="{{URL::asset('video/infoteca/tutoriales/CFDI - Master.mp4')}}"  type="video/mp4">
-->
</video>

<h3 class="text-center">
  Consulta tu CURP por internet
</h3>

    </div> <!-- /well -->
@stop

@section('js')
@stop

@section('javascript')
  <script>
    $('#ulTutorialTem1').addClass('in');
    $('#liTutorial3').addClass('activoBorde');
  </script>
@stop
