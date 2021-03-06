var tblPersonas = $('#tblPersonas'),
tbodyPersonas = $('#tbodyPersonas'),
 tblGenerales =$('#tblGenerales'),
 tbodyGenerales = $('#tbodyGenerales'),
 tblCapacitacion =$('#tblCapacitacion'),
 tbodyCapacitacion =$('#tbodyCapacitacion')
 tblSeguridad =$('#tblSeguridad'),
 tbodySeguridad =$('#tbodySeguridad');

var txtTotal = $('#txtTotal'),
txtUsuario = $('#txtUsuario'),
txtTelefono = $('#txtTelefono'),
txtCorreo = $('#txtCorreo'),
txtFecha = $('#txtFecha'),
txtAceptacion = $('#txtAceptacion');

var pnlDetalles = $('#pnlDetalles'),
btnRegresar = $('#btnRegresar');
/*txtPreregistros = $('#txtPreregistros'),
txtClientes = $('#txtClientes');*/
var preguntas0 = ["¿Está familiarizado con la LFPIORPI?",
                 "¿Realiza Actividades Vulnerables?",
                 "¿Se dio de alta en el Portal Antilavado del SAT?",
                 "¿Tiene políticas para identificar a sus clientes?",
                 "¿Elabora expedientes de identificación de sus clientes?",
                 "¿Lleva un registro de operaciones por cada cliente?",
                 "¿Cuenta con un Manual de Políticas y Procedimientos en materia de PLD?",
                 "¿Conoce las restricciones en el uso de efectivo?",
                 "¿Conoce las sanciones administrativas para quienes infrinjan la LFPIORPI?"
                 ];

/*var preguntas1 = [" ¿En el contrato individual de trabajo,  existen cláusulas relativas a la capacitación y adiestramiento del  trabajador?",
                 " ¿Sabe con precisión de donde surge la obligación del patrón por capacitar a los trabajadores?",
                 " ¿Conoce la diferencia que existe entre  la capacitación y el adiestramiento?",
                 " ¿Sabe en qué momento debe llevarse a cabo la capacitación y el adiestramiento?",
                 " ¿Conoce cuánto tiempo debe durar la capacitación y el adiestramiento en su centro de trabajo?",
                 " ¿Sabe a partir de qué número de trabajadores  el patrón tiene la obligación de conformar la Comisión Mixta de Capacitación y Adiestramiento?",
                 " ¿Conoce cómo debe estar integrada la Comisión Mixta de Capacitación y Adiestramiento?",
                 " ¿Sabe bajo qué circunstancias es posible constituir más de una Comisión Mixta de Capacitación y Adiestramiento?",
                 " ¿Conoce las  funciones prioritarias de la Comisión Mixta de Capacitación y Adiestramiento?",
                 " ¿Sabe cuáles son las finalidades y los objetivos que busca la capacitación y el adiestramiento  en los centros de trabajo?",
                 " ¿Conoce los formatos  en los que deben presentarse los planes y programas ante la autoridad laboral?",
                 " ¿Sabe cuántos formatos tiene la Secretaría del Trabajo y Previsión Social para que le reporten actividades de capacitación y adiestramiento?",
                 " ¿Conoce cuál es el plazo máximo que tiene el patrón,  para presentar los planes y programas de capacitación y adiestramiento?",
                 " ¿Sabe  cuál es el procedimiento para dar a conocer a la Secretaria del Trabajo y Previsión Social los avances y resultados de los planes y programas de capacitación y adiestramiento?",
                 " ¿Conoce  cuál  es la diferencia entre agentes capacitadores internos y agentes capacitadores  externos?",
                 " ¿Sabe  que datos deben integrarse a   las constancias de competencia o habilidades laborales?",
                 " ¿Conoce  quiénes son las personas responsables de certificar las constancias de competencia o de habilidades laborales?",
                 " ¿Sabe  en qué plazos los centros de trabajo deben hacer del conocimiento  a la autoridad laboral de las acciones realizadas conforme a los  planes y programas de capacitación?",
                 " ¿Conoce en qué consiste el programa de agentes multiplicadores que maneja la Secretaría del Trabajo y Previsión Social?",
                 " ¿Sabe en qué consiste  el Programa de Capacitación a Distancia para Trabajadores (PROCADIST) con que cuenta la Secretaria del Trabajo y Previsión Social?"
                 ];
var preguntas2 = [" ¿Cuenta con un programa de identificación de condiciones inseguras, desglosado por áreas en todo el centro de trabajo? ",
                 " ¿Existe  un programa de orden y limpieza permanente en todas  las áreas de trabajo?",
                 " ¿Tiene clasificado el  riesgo de incendio del centro de trabajo  de acuerdo a las  áreas que lo integran?",
                 " ¿Cumple con  las condiciones de prevención y protección contra incendios en el centro de trabajo?",
                 " ¿Lleva a cabo simulacros de emergencias contra incendio en el centro de trabajo?",
                 " ¿Conoce las  características que deben de cumplir las tarjetas de aviso utilizadas en la reparación y mantenimiento de maquinaria y equipo?",
                 " ¿Sabe cuáles son los procedimientos para la instalación de la maquinaria empleada en el manejo y almacenamiento de materiales en los centros de trabajo?",
                 " ¿Cuenta con un procedimiento general para la atención a emergencias en el manejo y almacenamiento de materiales?",
                 " ¿Conoce cómo se lleva a cabo el procedimiento para  la asignación del  Equipo de protección personal (EPP) que deben utilizar los trabajadores en función de los riesgos de trabajo a los que están expuestos?",
                 " ¿Proporciona a los trabajadores la capacitación y el adiestramiento para el uso, revisión, reposición, limpieza, limitaciones, mantenimiento, resguardo y disposición final del Equipo de Protección Personal, con base en las indicaciones, instrucciones o procedimientos que elabore el fabricante?",
                 " ¿Tiene constituida e integrada al menos una Comisión Mixta de Seguridad e Higiene en el centro de trabajo",
                 " ¿Conoce que datos debe de contener el acta constitutiva de la Comisión Mixta de Seguridad e Higiene?",
                 " ¿Sabe cuáles son  las  funciones específicas que  llevan a cabo los integrantes de la Comisión Mixta de Seguridad e Higiene?",
                 " ¿Da aviso de los riesgos de trabajo ocurridos  a la STPS directamente o a las delegaciones federales del trabajo, o al  inspector del trabajo o a la junta de conciliación permanente dentro de las setenta y dos horas siguientes a su realización en caso de accidente o de su detección en caso de enfermedad de trabajo?",
                 " ¿Conoce que datos debe de llevar el informe de accidentes y/o enfermedades de trabajo, que se entrega a la STPS?",
                " ¿Cuenta con un informe de resultados de la evaluación de los niveles de iluminación de las áreas o actividades o puestos de trabajo?",
                 " ¿Conoce que aspectos se deben de considerar para el mantenimiento de luminarias en el centro de trabajo?",
                " ¿Sabe  que  formas geométricas se utilizan para las señales de seguridad e higiene y su significado en el centro de trabajo?",
                " ¿Conoce  acerca de  que situaciones advierten las señales de seguridad en el centro de trabajo?",
                " ¿Está enterado de  cuál es el procedimiento de seguridad cuando se lleva a cabo el  mantenimiento a las instalaciones eléctricas en el centro de trabajo?"
              ];*/


function getPersonasCPLD(){
      var datos = $.ajax({
        url: 'getPersonasCPLD',
        type: 'get',
            dataType:'json',
            async:false
        }).error(function(e){
            alert('Ocurrio un error, intente de nuevo');
        }).responseText;

        var res;
        try{
            res = JSON.parse(datos);
        }catch (e){
            alert('Error JSON ' + e);
        }

        if ( res.status === 'OK' ){
          tbodyPersonas.html('');
           var i = 1;
           var pre = 0, iclientes = 0;

          $.each(res.data, function(k,o){

            if(o.clabTipoPersona == 1)
              tipoPersonas = "moral";
            else tipoPersonas = "física";

            tbodyPersonas.append(
              '<tr>'+
                '<td class="text-center">'+o.cpldId+'</td>'+
                '<td class="text-left">'+o.cpldNombre+'</td>'+
                '<td class="text-center">'+tipoPersonas+'</td>'+
                '<td class="text-center">'+o.cpldTelefono+'</td>'+
                '<td class="text-left">'+o.cpldCorreo+'</td>'+
                /*'<td class="text-center">'+o.clabCompleto+'</td>'+*/
                '<td class="text-center">'+o.cpldFecha+'</td>'+
                '<td class="text-center">'+
                  '<span class="glyphicon glyphicon-list text-primary" id="'+o.cpldId+'" '+
                  'style="cursor:pointer" title="Ver detalles"></span>'+
                '</td>'+
              '</tr>'
          );
          i++;
          });
          txtTotal.val(i-1);
        }else{
          tbodyPersonas.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        pnlDetalles.addClass('hidden');
        tblPersonas.removeClass('hidden');

}

function getrespuestasPLD(){
  var personaId = $(this).attr('id');
  limpiar();
  getPersonaPLD(personaId);
  /*getCGeneral(personaId);
  getCCapacitacion(personaId);
  getCSeguridad(personaId);*/

  var datos = $.ajax({
    url: 'getrespuestasPLD',
    data: {
      perId: personaId
    },
    type: 'post',
        dataType:'json',
        async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
       tbodyGenerales.html('');
       var i = 0;
       var pre = 0, iclientes = 0;

      $.each(res.data, function(k,o){

        if(o.clabTipoPersona == 1)
          tipoPersonas = "moral";
        else tipoPersonas = "física";

        num = 1+i;
        var respuesta;
        var colorF;
        if (res.data[i] == 1) {
          respuesta = '<i class="fa fa-check text-success"></i>';
          colorF = '';
        }
        else {
          respuesta = '<i class="fa fa-times text-danger"></i>';
          colorF = 'danger';
        }
         tbodyGenerales.append(
          '<tr class="'+colorF+'">'+
            '<td class="text-center">'+num+'</td>'+
            '<td class="">'+preguntas0[i]+'</td>'+
            '<td class="text-center">'+respuesta+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
       tbodyGenerales.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }


  pnlDetalles.removeClass('hidden');
  tblPersonas.addClass('hidden');
}

/*function getCGeneral( personaId){
  var datos = $.ajax({
    url: 'getrespuestasPLD',
    data: {
      perId: personaId
    },
    type: 'post',
        dataType:'json',
        async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
       tbodyGenerales.html('');
       var i = 0;
       var pre = 0, iclientes = 0;

      $.each(res.data, function(k,o){

        if(o.clabTipoPersona == 1)
          tipoPersonas = "moral";
        else tipoPersonas = "física";

        num = 1+i;
        var respuesta;
        var colorF;
        if (res.data[i] == 1) {
          respuesta = '<i class="fa fa-check text-success"></i>';
          colorF = '';
        }
        else {
          respuesta = '<i class="fa fa-times text-danger"></i>';
          colorF = 'danger';
        }
         tbodyGenerales.append(
          '<tr class="'+colorF+'">'+
            '<td class="text-center">'+num+'</td>'+
            '<td class="">'+preguntas0[i]+'</td>'+
            '<td class="text-center">'+respuesta+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
       tbodyGenerales.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function getCCapacitacion( personaId){
  var datos = $.ajax({
    url: 'getCCapacitacion',
    data: {
      perId: personaId
    },
    type: 'post',
        dataType:'json',
        async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
       tbodyCapacitacion.html('');
       var i = 0;
       var pre = 0, iclientes = 0;

      $.each(res.data, function(k,o){

        if(o.clabTipoPersona == 1)
          tipoPersonas = "moral";
        else tipoPersonas = "física";

        num = 1+i;
        var respuesta;
        var colorF;
        if (res.data[i] == 1) {
          respuesta = '<i class="fa fa-check text-success"></i>';
          colorF = '';
        }
        else {
          respuesta = '<i class="fa fa-times text-danger"></i>';
          colorF = 'danger';
        }
         tbodyCapacitacion.append(
          '<tr class="'+colorF+'">'+
            '<td class="text-center">'+num+'</td>'+
            '<td class="">'+preguntas1[i]+'</td>'+
            '<td class="text-center">'+respuesta+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
       tbodyCapacitacion.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function getCSeguridad( personaId){
  var datos = $.ajax({
    url: 'getCSeguridad',
    data: {
      perId: personaId
    },
    type: 'post',
        dataType:'json',
        async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
       tbodySeguridad.html('');
       var i = 0;
       var pre = 0, iclientes = 0;

      $.each(res.data, function(k,o){

        if(o.clabTipoPersona == 1)
          tipoPersonas = "moral";
        else tipoPersonas = "física";

        num = 1+i;
        var respuesta;
        var colorF;
        if (res.data[i] == 1) {
          respuesta = '<i class="fa fa-check text-success"></i>';
          colorF = '';
        }
        else {
          respuesta = '<i class="fa fa-times text-danger"></i>';
          colorF = 'danger';
        }
         tbodySeguridad.append(
          '<tr class="'+colorF+'">'+
            '<td class="text-center">'+num+'</td>'+
            '<td class="">'+preguntas2[i]+'</td>'+
            '<td class="text-center">'+respuesta+'</td>'+
          '</tr>'
      );
      i++;
      });
    }else{
       tbodySeguridad.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}*/


function getPersonaPLD(personaId){
  var datos = $.ajax({
    url: 'getPersonaPLD',
    data: {
      perId: personaId
    },
    type: 'post',
        dataType:'json',
        async:false
    }).error(function(e){
        alert('Ocurrio un error, intente de nuevo');
    }).responseText;

    var res;
    try{
        res = JSON.parse(datos);
    }catch (e){
        alert('Error JSON ' + e);
    }

    if ( res.status === 'OK' ){
      $.each(res.data, function(k,o){
        txtUsuario.val(o.cpldNombre);
        txtTelefono.val(o.cpldTelefono);
        txtCorreo.val(o.cpldCorreo);
        txtFecha.val(o.cpldFecha);
        txtAceptacion.val(o.cpldCondicion);

      });
    }else{
       tbodySeguridad.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

function limpiar(){
  txtUsuario.val('');
  txtTelefono.val('');
  txtCorreo.val('');
  txtFecha.val('');
  txtAceptacion.val('');
}
function regresar(){
  limpiar();
  tblPersonas.removeClass('hidden');
  pnlDetalles.addClass('hidden');
}

$(document).on('ready', function(){
  getPersonasCPLD();
});
tblPersonas.delegate('.glyphicon-list', 'click', getrespuestasPLD);
btnRegresar.on('click',regresar);
