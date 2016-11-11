
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(document).on('ready', function(){
    var tipoDue = getParameterByName('tipoDue');
    console.log("swd"+tipoDue);
    if (tipoDue == 1) {
      $('#dueEstrategico').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 2) {
      $('#dueOperativo').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 3) {
      $('#dueFinanciero').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 4) {
      $('#dueLegal').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 5) {
      $('#dueFiscal').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 6) {
      $('#dueRecursos').addClass('text-primary');
      console.log(tipoDue);
    }
    if (tipoDue == 7) {
      $('#duePld').addClass('text-primary');
      console.log(tipoDue);
    }
});
