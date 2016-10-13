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


        <!--    <iframe height="500" width="99%" src="https://www.youtube.com/embed/iY5DRLEZb_Y?loop=1" frameborder="0" allowfullscreen></iframe>

-->

<!--    <iframe width="480" height="270" src="https://www.youtube.com/embed/nZjiQPEQ1mA" frameborder="0" allowfullscreen></iframe>
-->
  <iframe height="500" width="99%" src="https://www.youtube.com/embed/nZjiQPEQ1mA?controls=1&rel=0" frameborder="0" allowfullscreen></iframe>





          <!--  <video height="500" width="99%" controls>
          <source src="{{URL::asset('video/enajenaciondebienes.mp4')}}"  type="video/mp4">
          </video>
        -->



<!--
        <div id="ytplayer"></div>

        <script>
          // Load the IFrame Player API code asynchronously.
          var tag = document.createElement('script');
         tag.src = "https://www.youtube.com/player_api";
         //tag.src = "https://www.youtube.com/player_api";

          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // Replace the 'ytplayer' element with an <iframe> and
          // YouTube player after the API code downloads.
          var player;
          function onYouTubePlayerAPIReady() {
            player = new YT.Player('ytplayer', {
              height: '500',
              width: '99%',
              videoId: 'iY5DRLEZb_Y'


            });
          }
    </script>
-->

        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="texto3d grisObscuro"> Discrepancia Fiscal
          </h3>
        </div>
      </div>
    </div> <!-- /well -->
@stop

@section('javascript')
  <script>
    $('#ulVideosTem1').addClass('in');
    $('#liVideo2').addClass('activoBorde');
  </script>
@stop
