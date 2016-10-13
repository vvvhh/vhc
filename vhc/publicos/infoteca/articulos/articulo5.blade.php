@extends('layoutArticulo')

@section('head')
@stop


@section('title')
Artículos | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div class="well transparenteClaroMTxt">  <!-- Well Articulo1 -->
  <div class="row">
    <div class="col-md-12">

      <h3 class=" grisObscuro">
        Protección de datos personales
        <br>
        ¿Sabes con quién compartes tus datos personales?
      </h3>

      <br>
      <div class="row">
        <div class="col-md-12">
          <h4>
            ¿Qué es un dato personal?
          </h4>
        <p class="text-justify">
          Comenzaremos por decir, que un dato personal es cualquier información relacionada con una persona. De esta forma, son datos personales: tu nombre, tu apodo, domicilio, teléfono, estado civil, estado físico, huellas dactilares, situación patrimonial, situación financiera, etcétera, así como cualquier otro dato que permita identificarte. Existen diferentes categorías de datos personales, por ejemplo, de identificación, laborales, patrimoniales, financieros, académicas, ideológicos, de salud, características físicas, preferencias sexuales, entre otros. Éstos permiten relacionarnos con otros individuos y organizaciones, ya sea para fines personales, laborales, comerciales, e incluso para cumplir con lo que disponen ciertas leyes.
        </p>

        <br>
        <h4>
          ¿Por qué es importante protegerlos?
        </h4>
        <p class="text-justify">
          Como habrás observado de la lectura del párrafo anterior, los datos personales <strong>permiten identificarnos</strong>, es decir, <strong> permiten saber a las demás personas quiénes somos </strong>, y de cierta forma, <strong>lo que tenemos </strong>, por lo que éstos deben guardar confidencialidad como protección a la privacidad de las personas que los comparten. De ahí su importancia, ya que en los últimos años, debido a la tecnología y a la falta de leyes que protegieran el uso de nuestros datos personales, éstos han sido utilizados para fines distintos para los que originalmente fueron obtenidos, por ejemplo la venta de bases de datos de clientes.
        </p>

        <p class="text-justify">
          Así, en el menor de los casos, cuantas veces no te han llamado para ofrecerte una tarjeta de crédito o una invitación para un evento de una agencia de viajes, cuanto tú no lo has solicitado y mucho menos recuerdas haber compartido tus datos con estas empresas; o en el mayor de los casos, ¿has recibido alguna llamada de extorsión? ¿Has sido víctima del robo de identidad?
        </p>

        <br>
        <h4>
          ¿Quién protege nuestros datos personales y cómo lo hace?
        </h4>
        <p class="text-justify">
          Por razones de seguridad y con la finalidad de evitar que nuestros datos personales sean utilizados para fines distintos para los cuales los habíamos proporcionado, se crea la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, cuyo objeto es precisamente la protección de nuestros datos contra el mal uso, uso indebido e ilícito, a efecto de garantizar la privacidad de las personas y por supuesto, su seguridad.
        </p>

        <p class="text-justify">
          Seguramente has escuchado en la radio y otros medios la frase “sobre aviso no hay engaño”, pues es precisamente la campaña publicitaria que a últimas fechas han difundido las autoridades para la protección de datos personales. También, muy probablemente has leído lo siguiente: ¿Tú o tu empresa, ya cuentan con su Aviso de Privacidad? y, ¿qué es el Aviso de Privacidad?
        </p>

        <p class="text-justify">
            El Aviso de Privacidad es el documento mediante el cual la persona o empresa con la cual compartes tus datos personales, ya sea porque te prestará un servicio, por una relación laboral, por la venta de algún bien, etc., te informa respecto al tratamiento que dará a los mismos, es decir si sólo los utilizará para emitirte tu factura, porque son necesarios para prestarte el servicio, para efectos estadísticos o para promoción comercial, etc. <strong>El aviso de privacidad te da el control de tus datos personales y te da seguridad respecto a con quién los compartes.</strong>
        </p>

        <p class="text-justify">
          Es obligación de todo aquél que obtiene datos personales, sin importar la actividad que realice, contar con su aviso privacidad y ponerlo a disposición. Por ejemplo, un contador o un abogado están obligados a contar con su aviso de privacidad, también lo están las empresas sin importar su tamaño. Al tratarse de una obligación por ley existen sanciones por no contar con el aviso mencionado.
        </p>

        <p class="text-justify">
          Ahora ya conoces qué es un dato personal y las formas establecidas por las autoridades correspondientes para protegerlos, y con ello proteger nuestra identidad y privacidad, sin embargo es nuestro deber comentar que la protección de datos personales debe comenzar con nosotros. Aunque no nos demos cuenta, en muchas ocasiones ponemos en riesgo nuestros datos personales y con ello nuestra seguridad, ¿cómo?, tal es el caso del uso inadecuado de las redes sociales, en las que compartimos bastantes información personal, como nuestro nombre, estado civil, fotografía, nombres de familiares, domicilios, entre otros. De esta forma, aunque existan leyes y avisos que protejan nuestra privacidad, nos colocaremos en un estado de vulnerabilidad.
        </p>

        <p class="text-justify">
          Así que ya sabes, no compartas tus datos vía internet, así como no los compartirías con extraños y siempre que compartas tus datos personales solicita revisar el Aviso de Privacidad para por lo menos conocer la finalidad y el tratamiento que darán a tus datos.
        </p>

        </div>
      </div> <!-- /row -->


    </div>
  </div>
  <small>Autora: L.C. Bibiana I. Nuñez Aguilar</small>
</div>  <!-- /Well Articulo1 -->

@stop

@section('js')
@stop

@section('javascript')
  <script>
    $('#ulArtTem1').addClass('in');
    $('#liArt5').addClass('activoBorde');
  </script>
@stop
