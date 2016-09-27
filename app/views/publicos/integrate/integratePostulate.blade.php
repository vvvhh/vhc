@extends('layoutIntegrate')

@section('head')
  <meta name="description" content="Envia tu Curriculum Vitae y tus datos curriculares para futuras oportunidades">
  <meta name="keywords" content="postulate, curriculum vitae, desarrollo profesional, desarrollo personal" />
@stop

@section('title')
  Postulate | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
    {{ HTML::style('css/inicio.css') }}
@stop

@section('body')
@stop

@section('content')
<!--
<div class="well trasparenteClaroPlus animacionContenido">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="grisObscuro"><strong> Postulate</strong></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 text-center">
          <h4 ><i class="fa fa-envelope"></i> Envianos tu currículum</h4>
          <p class="text-justify">Envía tu CV y tus datos curriculares generales para futuras oportunidades, al siguiente correo electrónico:
          </p>
          <p class="text-justify">
            Al hacer uso de este servicio estás aceptando el <a href="{{ URL::to('publicos/integrate/integrateAvisoP')}}" class="enlaceSimple">Aviso de privacidad para aspirantes.</a>
          </p>
          <br>
          <h4>  <strong>  <a href="mailto:reclutamiento@contadoresvh.com?subject=Postulación">reclutamiento&#64contadoresvh.com</a></strong></h4>
          <br><br>


        </div>
        <div class="col-md-6">
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/integrate/163651460.jpg')}}"/>
        </div>
      </div>

      <div>
        <input type="hidden" name="integrateh" id="integrateh" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      </div>

    </div>
    -->
    <!-- Well -->





      <div class="well transparenteClaroTxt animacionContenido">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="grisObscuro"><strong> Postúlate</strong></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 text-center">
          <h4 ><i class="fa fa-envelope"></i> Envíanos tu currículum</h4>
          <p class="text-justify">
            ¿Te interesa pertenecer a nuestra firma?, envíanos tu Currículum Vitae y tus datos de contacto, te tomaremos en cuenta para futuras oportunidades:
          </p>
          <br>
<!--  action="{{URL::to('publicos/integrate/enviarCurriculum')}}" -->
          <form accept-charset="utf-8" method="post"  class="trabaja" enctype="multipart/form-data" id="formPostulate" method="post">

               <div class="control-group form-group">

                 <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                     <input id="inpNombre" name="_nombre" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Nombre" maxlength="50" required >
                 </div>
                 <br>

                 <div class="control-group form-group">
                   <div class="input-group">
                     <span class="input-group-addon glyphicon"><i class="fa fa-at"></i></span>
                     <input id="inpEmail" name="_correo" type="email" class="form-control grisObscuro"  placeholder="*Correo Electrónico" maxlength="50">
                     <p class="text-danger" id="spnCorreo"> </p>
                   </div>
                 </div>

                 <div class="control-group form-group">
                   Seleccionar Empresa:
                   <div class="input-group">
                     <span class="input-group-addon glyphicon"><i class="fa fa-building" aria-hidden="true"></i></span>

                     <select id="inpEmpresa" class="form-control" name="_empresa">
                          <option value="VHC" selected>Vázquez Hernández Contadores, S.C. </option>
                          <option value="Empresa_Privada">Empresa privada</option>
                     </select>
                     <!-- <input id="inpEmpresa" name="_empresa" type="email" class="form-control grisObscuro"  placeholder="Empresa" maxlength="50">
 -->


                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6">
                     <div class="control-group form-group">
                       Seleccionar área:
                       <div class="input-group">
                         <span class="input-group-addon glyphicon"><i class="fa fa-users" aria-hidden="true"></i></span>

                         <select id="inpArea" class="form-control" name="_inpArea">
                              <option value="Contable" selected>Contable</option>
                              <option value="Consultoria">Consultoría</option>
                              <option value="Auditoria">Auditoría</option>

                         </select>
                         <!-- <input id="inpEmpresa" name="_empresa" type="email" class="form-control grisObscuro"  placeholder="Empresa" maxlength="50">
     -->


                       </div>
                     </div>
                   </div>

              <!--      <div class="col-md-6">
                     <div class="control-group form-group">
                       Seleccionar puesto:
                       <div class="input-group">
                         <span class="input-group-addon glyphicon"><i class="fa fa-users" aria-hidden="true"></i></span>

                         <select id="inpPostula" class="form-control" name="_inpPuesto">
                              <option value="Senior" selected>Senior </option>
                              <option value="Semi_senior" id="optionSemiS">Semi senior </option>
                              <option value="Asistente">Asistente </option>
                         </select>

                       </div>
                     </div>

                   </div>
-->

                 </div>


                 <!-- <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                     <input id="inpPostula" name="_postula" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Ingrese vacante al que se postula" maxlength="50" >
                 </div>
 -->
              <!--     <div class="input-group text-left">
                   {{ Form::label('postu', 'Nombre: ')}}<br />
                   {{ Form::text('_postula', Input::old('_nombre'),
                       array('placeholder' => 'Nombre completo', 'class' => 'form-control', 'maxlength' => '50', 'required')); }}
                       <br>
                       @if( $errors->has('postula') )
                         @foreach($errors->get('postula') as $error )
                           <br /><div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> {{ $error }}</div>
                         @endforeach
                       @endif
                 </div> -->


              <!--      <div class="input-group">
                    {{ Form::label('postu', 'Indique a que puesto se postula: ')}}<br />
                    {{ Form::text('_postula', Input::old('_postula'),
                        array('placeholder' => 'Puesto al que se postula', 'class' => 'form-control', 'maxlength' => '50', 'required')); }}
                        <br>
                        @if( $errors->has('postula') )
                          @foreach($errors->get('postula') as $error )
                            <br /><div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> {{ $error }}</div>
                          @endforeach
                        @endif
                  </div> -->
                </div>
                <br>

                <div class="control-group form-group">
                  <div class="input-group">
                    {{ Form::label('arch', 'Seleccione su Currículum Vitae desde un archivo (.pdf, .doc, .docx): ')}}<br />
                    {{ Form::file('_archivo', Input::old('_archivo'),
                     array('class' => 'form-control',  'required'));
                    }}
                    <br>
                    @if( $errors->has('archivo') )
                      @foreach($errors->get('archivo') as $error )
                        <br /><div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> {{ $error }}</div>
                      @endforeach
                    @endif
                  </div>
                </div>



                <div class="control-group form-group">
                  <div class="input-group" id="aceptoCheck">
                    <input type="checkbox" id="chkAcepto" name="chkAcepto" />
                      Acepto haber leído y estar de acuerdo con la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">"Política de uso y privacidad del sitio web"</a> y el <a href="{{  URL::to('publicos/integrate/integrateAvisoP')}}" >"Aviso de privacidad para aspirantes"</a> de Vázquez Hernández Contadores, S.C.
                  </div>
                <!--    <p>
                    *Al hacer clic en el botón, usted confirma haber leído y reconoce la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a> y el <a href="{{ URL::to('publicos/integrate/integrateAvisoP')}}" >Aviso de privacidad para aspirantes</a>.
                  </p> -->
                </div>

                <input id="btnEnviar" value="Enviar" class="btn btn-primary btn-block"/>
                <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                <br>
                <div class="hidden" id="procesoEnviar">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    Enviando...
                </div>



              </form>




          <br>
        </div>
        <div class="col-md-6">
          <br><br><br><br>
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/integrate/137830602.jpg')}}"/>
        </div>
      </div>

      <div>
        <input type="hidden" name="integrateh" id="integrateh" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      </div>

    </div> <!-- Well -->

@stop

@section('js')
  {{ HTML::script('js/publicos/integrate/integratePostulate.js')}}
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
@stop

@section('javascript')
  <script charset="utf-8">
    $('#liPostulate').addClass('activoBorde');
  </script>
@stop
