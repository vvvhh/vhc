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
        message: '<div align="left"> '+texto+
                ' </div>',
        //closeButton: false,
        animate: true,
        onEscape: true,
        backdrop: true,
        buttons: {
          danger: {
          label: "Cerrar",
          className: "btn-default",
        },
        }
      });
    }


    $(".modal-wide").on("show.bs.modal", function() {
      var height = $(window).height() - 200;
      $(this).find(".modal-body").css("max-height", height);
    });



$( document ).ready(function() {
    menuCodigoConducta.addClass('hidden');
});

/*liConfianza.on('click',confianza);
liCompromiso.on('click',compromiso);
liPerseverancia.on('click',perseverancia);
liRespeto.on('click',respeto);
liEtica.on('click',etica);
liTrabajo.on('click',trabajo);
liExelencia.on('click',exelencia);
liLiderazgo.on('click',liderazgo);
liEntusiasmo.on('click',entusiasmo);
*/
