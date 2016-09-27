/*
vacantes VHC
  0 Senior contable
  1 Semi senior contable
  2 asistente contable


  3 Senior consultor
  4 -
  5 Asistente consultor

  6 Senior auditor
  7 -
  8 Asistente auditor
*/

var vacantes= [
  [
    "Senior",       //Puesto    0*---------------------------------------------------------------------------------------------------
    "1",                          //Número de Plazas:
    "Contrato",                   //Tipo de Contrato:
    "Coordinación de proyectos ",        //Actividades Relacionadas con el Puesto:		3
    "$10,000-15,000",              //Sueldo
    " Huatabampo  No. 72-1, Roma Sur, Cuauhtemoc, 6760, México, D.F., Distrito Federal ",                      //Lugar de Trabajo
    "Completo",   //Tipo de Horario de Trabajo
    "8:00 - 18:00",  // Horario de Trabajo
    "Sí",   //Disponibilidad para viajar:
    "No",   //Cambio de residencia
    "Licenciatura en Contaduría", // Estudios
    "Títulado",    //Nivel académico
    "indistinto", //Estado Civil
    "20",      //Edad Mínima
    "-",      //edad Maxima
    "Indistinto", //Sexo
    "3 años  de experiencia en contabilidad e impuestos",  //Experiencia Requerida
    " - ", //Idiomas
    "Adaptibilidad, comunicación, confianza, conocimientos técnicos profesionales.", //Habilidades
    "Contable"  //area
  ],
  [
    "Semi_senior ",           //PUESTO 1
    "Experiencia 2",
    "Actividades2",
    "Sueldo 2",
    "otras caracterisitcas 2",
    "Contable"  //area
  ],
  [
    "Asistente",       //Puesto    2--------------------------------------------------------------------------------------------------
    "3",                          //Número de Plazas:
    "Planta",                   //Tipo de Contrato:
    "Revisión, clasificación y captura de información contable,  generar reportes especializados. ",        //Actividades Relacionadas con el Puesto:		3
    "$4,500",              //Sueldo
    " Huatabampo  No. 72-1, Roma Sur, Cuauhtemoc, 6760, México, D.F., Distrito Federal ",                      //Lugar de Trabajo
    "Completo",   //Tipo de Horario de Trabajo
    "8:00 - 18:00",  // Horario de Trabajo
    "Sí",   //Disponibilidad para viajar:
    "No",   //Cambio de residencia
    "Licenciatura en Contaduría", // Estudios
    "Pasante",    //Nivel académico
    "indistinto", //Estado Civil
    "20",      //Edad Mínima
    "30",      //edad Maxima
    "Indistinto", //Sexo
    "Requerida",  //Experiencia Requerida
    " - ", //Idiomas
    "Confianza, conocimientos técnicos profesionales.", //Habilidades
    "Contable"  //area
  ],

  [
    "Senior",   // 3------------------------------------------------------------------
    "Experiencia Asesorias",
    "Actividades Asesorias",
    "Sueldo Asesorias ",
    "otras caracterisitcas Asesorias",
    "Consultoria"
  ],
  [
    "Asesorias",     // 4------------------------------------------------------------------
    "Experiencia Asesorias",
    "Actividades Asesorias",
    "Sueldo Asesorias",
    "otras caracterisitcas Asesorias"
  ],
  [
    "Asistente",     //5----------------------------------------------------------------------
    "Experiencia3 Asesorias",
    "Actividades3 Asesorias",
    "Sueldo 3 Asesorias",
    "otras caracterisitcas 3",
    "Consultoria"
  ],


  [
    "Senior",       //Puesto    6--------------------------------------------------------------------------------------------------
    "13",                          //Número de Plazas:
    "Contrato",                   //Tipo de Contrato:
    "Todas las inherentes para la realización de auditorías",        //Actividades Relacionadas con el Puesto:		3
    "$10,000",              //Sueldo
    " Huatabampo  No. 72-1, Roma Sur, Cuauhtemoc, 6760, México, D.F., Distrito Federal ",                      //Lugar de Trabajo
    "Completo",   //Tipo de Horario de Trabajo
    "8:00 - 18:00",  // Horario de Trabajo
    "Sí",   //Disponibilidad para viajar:
    "No",   //Cambio de residencia
    "Licenciatura en Contaduría", // Estudios
    "Títulado",    //Nivel académico
    "indistinto", //Estado Civil
    "30",      //Edad Mínima
    "-",      //edad Maxima
    "Indistinto", //Sexo
    "4 años de experiencia",  //Experiencia Requerida
    " - ", //Idiomas
    "Confianza, conocimientos técnicos profesionales.", //Habilidades
    "Auditoria"
  ],
  [
    "Supervisor Auditor",     // 7------------------------------------------------------------
    "Experiencia Auditor",
    "Actividades Auditor",
    "Sueldo Auditor",
    "otras caracterisitcas Auditor",
    "Auditoria"
  ],
  [
    "Asistente",       //Puesto    8--------------------------------------------------------------------------------------------------
    "13",                          //Número de Plazas:
    "Contrato",                   //Tipo de Contrato:
    "Todas las inherentes para la realización de auditoría y contabilidad",        //Actividades Relacionadas con el Puesto:		3
    "$4,800",              //Sueldo
    " Huatabampo  No. 72-1, Roma Sur, Cuauhtemoc, 6760, México, D.F., Distrito Federal ",                      //Lugar de Trabajo
    "Completo",   //Tipo de Horario de Trabajo
    "8:00 - 18:00",  // Horario de Trabajo
    "Sí",   //Disponibilidad para viajar:
    "No",   //Cambio de residencia
    "Licenciatura en Contaduría", // Estudios
    "Títulado",    //Nivel académico
    "indistinto", //Estado Civil
    "25",      //Edad Mínima
    "-",      //edad Maxima
    "Indistinto", //Sexo
    "Requierida",  //Experiencia Requerida
    " - ", //Idiomas
    "Confianza, conocimientos técnicos profesionales.", //Habilidades
    "Auditoria"
  ],


];



var empresa= [
  [
    "Senior",       //Puesto    0--------------------------------------------------------------------------------------------------
    "Comercializadora",                          //Número de Plazas:
    "Ciudad de México",                   //Tipo de Contrato:
    "Revisión, clasificación y captura de información contable,  generar reportes especializados. ",        //Actividades Relacionadas con el Puesto:		3
    "2",   //Tipo de Horario de Trabajo
    "8:00 - 18:00",  // Horario de Trabajo

    "Licenciatura en Contaduría", // Estudios
    "Pasante",    //Nivel académico
    "indistinto", //Estado Civil
    "20",      //Edad Mínima
    "30",      //edad Maxima
    "Indistinto", //Sexo
    "Requerida",  //Experiencia Requerida
    " - ", //Idiomas
    "Confianza, conocimientos técnicos profesionales.", //Habilidades
    "Contable"
  ],
  [
    "Semi_senior",
    "Experiencia 2",
    "Actividades2",
    "Tipo empresa 2",
    "otras caracterisitcas 2",
    "Contable"
  ],
  [
    "Asistente",
    "Experiencia3",
    "Actividades3",
    "Tipo empresa 3",
    "otras caracterisitcas 3",
    "Contable"
  ],

  [
    "Senior",
    "Experiencia Asesorias",
    "Actividades Asesorias",
    "Tipo empresa Asesorias ",
    "otras caracterisitcas Asesorias",
    "Consultoria"
  ],
  [
    "Semi_senior",
    "Experiencia Asesorias",
    "Actividades Asesorias",
    "Tipo empresa Asesorias",
    "otras caracterisitcas Asesorias",
    "Consultoria"
  ],
  [
    "Asistente",
    "Experiencia3 Asesorias",
    "Actividades3 Asesorias",
    "Tipo empresa 3 Asesorias",
    "otras caracterisitcas 3",
    "Consultoria"
  ],


  [
    "Senior",
    "Experiencia Auditor",
    "Actividades Auditor",
    "Tipo empresa Auditor ",
    "otras caracterisitcas Auditor",
    "Auditoria"
  ],
  [
    "Supervisor Auditor",
    "Experiencia Auditor",
    "Actividades Auditor",
    "Tipo empresa Auditor",
    "otras caracterisitcas Auditor",
    "Auditoria"
  ],
  [
    "Asistente",
    "Experiencia3 Auditor",
    "Actividades3 Auditor",
    "Tipo empresa 3 Auditor",
    "otras caracterisitcas 3",
    "Auditoria"
  ],

];

function  clicElemento(){
  vacSelect=$(this).attr('id');

  bootbox.dialog({
    title:'<div align="center"><strong>'+vacantes[vacSelect][19]+': '+vacantes[vacSelect][0]+'</strong></div>',
    message: '<div align="left"> <h4><strong>Número de Plazas: </strong> '+vacantes[vacSelect][1]+
            ' </h4> <h4><strong>Tipo de Contrato: </strong> '+vacantes[vacSelect][2]+
            ' </h4>  <h4><strong>Actividades Relacionadas con el Puesto: </strong> '+vacantes[vacSelect][3]+
            ' </h4>  <h4><strong>Sueldo: </strong> '+vacantes[vacSelect][4]+
            ' </h4>  <h4><strong>Lugar de Trabajo: </strong> '+vacantes[vacSelect][5]+
            ' </h4>  <h4><strong>Tipo de Horario de Trabajo: </strong> '+vacantes[vacSelect][6]+
            ' </h4>  <h4><strong>Horario de Trabajo: </strong> '+vacantes[vacSelect][7]+
            ' </h4>  <h4><strong>Disponibilidad para viajar: </strong> '+vacantes[vacSelect][8]+
            ' </h4>  <h4><strong>Cambio de residencia: </strong> '+vacantes[vacSelect][9]+
            '<hr><p align=center> <strong>Aspirante</strong></p>'+
            ' </h4>  <h4><strong>Estudios: </strong> '+vacantes[vacSelect][10]+
            ' </h4>  <h4><strong>Nivel académico: </strong> '+vacantes[vacSelect][11]+
            ' </h4>  <h4><strong>Estado Civil: </strong> '+vacantes[vacSelect][12]+
            ' </h4>  <h4><strong>Edad Mínima: </strong> '+vacantes[vacSelect][13]+
            ' </h4>  <h4><strong>Edad Máxima: </strong> '+vacantes[vacSelect][14]+
            ' </h4>  <h4><strong>Sexo: </strong> '+vacantes[vacSelect][15]+
            ' </h4>  <h4><strong>Experiencia Requerida: </strong> '+vacantes[vacSelect][16]+
            ' </h4>  <h4><strong>Idiomas: </strong> '+vacantes[vacSelect][17]+
            ' </h4>  <h4><strong>Habilidades: </strong> '+vacantes[vacSelect][18]+
            ' </h4></div>',
    //closeButton: false,
    animate: true,
    className: "medium",
    buttons: {
       success: {
        label: "Postularse",
        className: "btn-primary",
        callback: function() {
            location.href="integratePostulate?vac="+vacantes[vacSelect][0]+"&emp=VHC"+"&area="+vacantes[vacSelect][19] ;
        }
      },
      danger: {
      label: "Cerrar",
      className: "btn-default",
      /*callback: function() {

      }*/
    },
    }
  });

}

function clicSinVacante(){
  vacSelect=$(this).attr('id');
  bootbox.dialog({
    title:'<div align="center"><strong>'+vacantes[vacSelect][5]+': '+vacantes[vacSelect][0]+'</strong></div>',
    message: '<div align="left"> <h4><strong>Por el momento no hay vacantes</strong>, pero puedes enviarnos tu información para futuras oportunidades dando clic en el botón "Postularse". '+
            ' </h4></div>',
    //closeButton: false,
    animate: true,
    buttons: {
       success: {
        label: "Postularse",
        className: "btn-primary",
        callback: function() {
            location.href="integratePostulate?vac="+vacantes[vacSelect][0]+"&emp=VHC"+"&area="+vacantes[vacSelect][5];
        }
      },
      danger: {
      label: "Cerrar",
      className: "btn-default",
      /*callback: function() {

      }*/
    },
    }
  });
}


function  clicEmpresa(){
  vacSelect=$(this).attr('id');

  bootbox.dialog({
    title:'<div align="center"><strong>'+empresa[vacSelect][15]+': '+empresa[vacSelect][0]+'</strong></div>',
    message: '<div align="left"> <h4><strong>Tipo de empresa: </strong> '+empresa[vacSelect][1]+
              ' </h4> <h4><strong>Lugar de Trabajo: </strong> '+empresa[vacSelect][2]+
              ' </h4>  <h4><strong>Actividades Relacionadas con el Puesto: </strong> '+empresa[vacSelect][3]+
              ' </h4>  <h4><strong>Horario: </strong> '+empresa[vacSelect][5]+

              '<hr><p align=center> <strong>Aspirante</strong></p>'+
              ' </h4>  <h4><strong>Estudios: </strong> '+empresa[vacSelect][6]+
              ' </h4>  <h4><strong>Nivel académico: </strong> '+empresa[vacSelect][7]+
              ' </h4>  <h4><strong>Estado Civil: </strong> '+empresa[vacSelect][8]+
              ' </h4>  <h4><strong>Edad Mínima: </strong> '+empresa[vacSelect][9]+
              ' </h4>  <h4><strong>Edad Máxima: </strong> '+empresa[vacSelect][10]+
              ' </h4>  <h4><strong>Sexo: </strong> '+empresa[vacSelect][11]+
              ' </h4>  <h4><strong>Experiencia Requerida: </strong> '+empresa[vacSelect][12]+
              ' </h4>  <h4><strong>Idiomas: </strong> '+empresa[vacSelect][13]+
              ' </h4>  <h4><strong>Habilidades: </strong> '+empresa[vacSelect][14]+

            ' </h4></div>',
    //closeButton: false,
    animate: true,
    buttons: {
       success: {
        label: "Postularse",
        className: "btn-primary",
        callback: function() {
            location.href="integratePostulate?vac="+empresa[vacSelect][0]+"&emp=Empresa_Privada"+"&area="+empresa[vacSelect][15];
        }
      },
      danger: {
      label: "Cerrar",
      className: "btn-default",
      /*callback: function() {

      }*/
    },
    }
  });

}


$(".vacDetalle").click(clicElemento);
$(".vacEmpresa").click(clicEmpresa);
$(".sinVacante").click(clicSinVacante);
