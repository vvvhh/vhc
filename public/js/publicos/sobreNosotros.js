var liConfianza = $('#liConfianza'),
    liCompromiso = $('#liCompromiso'),
    liPerseverancia = $('#liPerseverancia'),
    liRespeto = $('#liRespeto'),
    liEtica = $('#liEtica'),
    liTrabajo = $('#liTrabajo'),
    liExelencia = $('#liExelencia'),
    liLiderazgo = $('#liLiderazgo'),
    liEntusiasmo = $('#liEntusiasmo');
var menuCodigoConducta=$('#menuCodigoConducta');

    function mostrarTexto(valor, texto){
      vacSelect=$(this).attr('id');
      bootbox.dialog({
        title:'<div align="center"><strong>'+valor+'</strong></div>',
        message: '<div align="left">" '+texto+
                ' </div>',
        //closeButton: false,
        animate: true,
        buttons: {
          danger: {
          label: "Cerrar",
          className: "btn-default",
        },
        }
      });
    }

function confianza(){
  titulo = "Confianza";
  texto = "La confianza en sí mismo es el primer secreto del éxito. Emerson <br>"+
  "Cuando alguien te da su confianza, siempre te quedas en deuda con él. T. Capote. <br>"+
  "Si uno quiere despertar conf|ianza, debe ser digno de confianza. S. Covey.<br>"+
"La confianza viene de la disciplina y del entrenamiento. R. Kiyosaki.<br>"+
"Si no tienes confianza, siempre encontrarás una forma de no ganar. C. Lewis.<br>"+
"La confianza… prospera en la honestidad, el honor, en el carácter sagrado de las obligaciones, sobre la protección, y la fidelidad desinteresada en el rendimiento. Sin ellos no puedes vivir. F.D. Roosevelt <br>";
  mostrarTexto(titulo, texto)
}

function compromiso(){
  titulo = "Compromiso";
  texto = "Texto Compromiso";
  mostrarTexto(titulo, texto)
}
function perseverancia(){
  titulo = "Perseverancia";
  texto = "Texto perseverancia";
  mostrarTexto(titulo, texto)
}
function respeto(){
  titulo = "Respeto";
  texto = "Texto Respeto";
  mostrarTexto(titulo, texto)
}
function etica(){
  titulo = "Ética Profesional";
  texto = "Texto Ética";
  mostrarTexto(titulo, texto)
}
function trabajo(){
  titulo = "Trabajo en Equipo";
  texto = "Texto Trabajo";
  mostrarTexto(titulo, texto)
}
function exelencia(){
  titulo = "Exelencia";
  texto = "Texto Exelencia";
  mostrarTexto(titulo, texto)
}
function liderazgo(){
  titulo = "Liderazgo";
  texto = "Texto Liderazgo";
  mostrarTexto(titulo, texto)
}
function entusiasmo(){
  titulo = "Confianza";
  texto = "Texto Confianza";
  mostrarTexto(titulo, texto)
}

$( document ).ready(function() {
    menuCodigoConducta.addClass('hidden');
});

liConfianza.on('click',confianza);
liCompromiso.on('click',compromiso);
liPerseverancia.on('click',perseverancia);
liRespeto.on('click',respeto);
liEtica.on('click',etica);
liTrabajo.on('click',trabajo);
liExelencia.on('click',exelencia);
liLiderazgo.on('click',liderazgo);
liEntusiasmo.on('click',entusiasmo);
