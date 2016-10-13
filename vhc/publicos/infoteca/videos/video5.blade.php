@extends('layoutVideo')

@section('head')
@stop

@section('title')
  Videos | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
    <div class="well trasparenteClaroPlus">  <!-- Well -->
      <div class="row">
        <div class="col-md-12">

          <iframe height="500" width="99%" src="https://www.youtube.com/embed/XTJEi5d4zfg?rel=0" frameborder="0" allowfullscreen></iframe>
          <!--  <iframe height="500" width="99%" src="https://www.youtube.com/embed/0TnGff6CfLM&feature" frameborder="0" allowfullscreen></iframe>-->

          </video>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="texto3d grisObscuro"> Enajenación de bienes
          </h3>
        </div>
      </div>
    </div> <!-- /well -->
@stop

@section('javascript')
  <script>
    $('#ulVideosTem1').addClass('in');
    $('#liVideo4').addClass('activoBorde');
  </script>
@stop
