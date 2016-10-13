var menuCodigoConducta=$('#menuCodigoConducta');

$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});


$( document ).ready(function() {
    $("#myModal2").modal({show: true});
    $("#myModal").modal({show: true});

    menuCodigoConducta.removeClass('hidden');

});
