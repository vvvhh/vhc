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
  texto = "Texto Confianza";
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
