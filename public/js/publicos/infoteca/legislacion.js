var btnBuscar = $('#btnBuscar'),
txtBuscar = $('#txtBuscar');

var tblResultados = $('#tblResultados'),
tbodyResultados = $('#tbodyResultados');

var tblLeyes = $('#tblLeyes'),
tbodyLeyes = $('#tbodyLeyes');

var btnBuscar = $('#btnBuscar');

var titConstitucion = $('#titConstitucion'),
titCodigo = $('#titCodigo'),
titLeyes = $('#titLeyes'),
titReglamentos = $('#titReglamentos'),
titEstatutos = $('#titEstatutos'),
titOtras = $('#titOtras'),
titEstatal = $('#titEstatal')
titNOM =$('#titNOM');

var menuLegislacion=$('#menuLegislacion'),
    menuLegEstatal=$('#menuLegEstatal'),
    divContenido=$('#divContenido');
var liCriNormativo=$('#liCriNormativo'),
    liCriAplicacion=$('#liCriAplicacion');
    liCriVinculativos=$('#liCriVinculativos');
    liCriProcedimientos=$('#liCriProcedimientos');
    liCriCPR=$('#liCriCPR');
var li2Codigo=$('#li2Codigo');
    li2Impue=$('#li2Impue');
    li2Ieps=$('#li2Ieps');
    li2Isan=$('#li2Isan');
    li2Iva=$('#li2Iva');
    li2Istuv=$('#li2Istuv');
    li2Hidroc=$('#li2Hidroc');
    li2Ide=$('#li2Ide');
    li2Org=$('#li2Org');
    li2Hojas=$('#li2Hojas');
    li2Comercio=$('#li2Comercio');
var li3Instructivo=$('#li3Instructivo');
var li4leyes=$('#li4leyes');
var li5manual=$('#li5manual');
var li6Mod=$('#li6Mod');
var li6Otras=$('#li6Otras');
var li7Resolucion=$('#li7Resolucion'),
    li7Resolucion2=$('#li7Resolucion2'),
    li7Resolucion3=$('#li7Resolucion3'),
    li7Resolucion4=$('#li7Resolucion4'),
    li7Resolucion5=$('#li7Resolucion5'),
    li7Resolucion6=$('#li7Resolucion6'),
    li7Resolucion7=$('#li7Resolucion7'),
    li7Resolucion8=$('#li7Resolucion8'),
    li7Resolucion9=$('#li7Resolucion9'),
    li7Resolucion10=$('#li7Resolucion10'),
    li7Resolucion11=$('#li7Resolucion11'),
    li7Resolucion12=$('#li7Resolucion12');
  var li8Comercio1=$('#li8Comercio1'),
      li8Comercio2=$('#li8Comercio2'),
      li8Comercio3=$('#li8Comercio3'),
      li8Comercio4=$('#li8Comercio4'),
      li8Comercio5=$('#li8Comercio5');
  var li9Res1=$('#li9Res1'),
      li9Res2=$('#li9Res2');
var liTesis=$('#liTesis'),
    liTesis2=$('#liTesis2');
var li10Revision=$('#li10Revision');
var liTrat1=$('#liTrat1'),
    liTrat2=$('#liTrat2');
var liPld1=$('#liPld1'),
    liPld2=$('#liPld2'),
    liPld3=$('#liPld3');
var liDec1=$('#liDec1'),
    liDec2=$('#liDec2'),
    liDec3=$('#liDec3');

function buscarLegislacion(){
  tblResultados.removeClass('hidden');
        var datos = $.ajax({
          url: 'getLegislacion',
          data: {
            bsc: txtBuscar.val()
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
            tbodyResultados.html('');
             var i = 1;
            $.each(res.data, function(k,o){

              tbodyResultados.append(
                '<tr>'+
                  '<td class="text-left"> <a target="blank" class="enlaceSimple" href="'+o.legLink+'" >'+o.legNombre+' </a></td>'+
                '</tr>'
            );
            i++;
            });
          }else{
            tbodyResultados.html('<tr><td colspan="8" class="text-center"><h3>'+ res.message +'</h3></td></tr>');
          }
          tbodyResultados.removeClass('hidden');
}

function comprobar(e){
  var elem = e.target;
  if (elem.validity.valid) {
    document.getElementById('spnBuscar').innerHTML = "";
    elem.style.background='#FFFFFF';
    btnBuscar.prop( "disabled", false );
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnBuscar').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanuméricos.';
    btnBuscar.prop( "disabled", true );
  }
}

function limpiar(){
  txtBuscar.val('');
}

function getConstitucion(){
  tipo = 1;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getCodigo(){
  tipo = 2;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getLeyes(){
  tipo = 3;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getReglamentos(){
  tipo = 4;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getEstatutos(){
  tipo = 5;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getOtras(){
  tipo = 6;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getEstatal(){
  tipo = 7;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}
function getNom(){
  tipo = 8;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}


function getCriNormativo(){
  tipo = 9;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriNormativoli').addClass('activoBorde');
}
function getCriAplicacion(){
  tipo = 10;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriAplicacionli').addClass('activoBorde');
}
function getCriVinculativos(){
  tipo = 11;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriVinculativosli').addClass('activoBorde');
}
function getCriProcedimientos(){
  tipo = 12;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriProcedimientosli').addClass('activoBorde');
}
function getCriCPR(){
  tipo = 13;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriCPRli').addClass('activoBorde');
}

function get2Codigo(){
  tipo = 14;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Codigoli').addClass('activoBorde');
}
function get2Impue(){
  tipo = 15;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Impueli').addClass('activoBorde');
}
function get2Ieps(){
  tipo = 16;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Iepsli').addClass('activoBorde');
}
function get2Isan(){
  tipo = 17;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Isanli').addClass('activoBorde');

}
function get2Iva(){
  tipo = 18;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Ivali').addClass('activoBorde');

}
function get2Istuv(){
  tipo = 19;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Istuvli').addClass('activoBorde');

}
function get2Hidroc(){
  tipo = 20;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Hidrocli').addClass('activoBorde');
}
function get2Ide(){
  tipo = 21;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Ideli').addClass('activoBorde');
}
function get2Org(){
  tipo = 22;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Orgli').addClass('activoBorde');
}
function get2Hojas(){
  tipo = 23;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Hojasli').addClass('activoBorde');
}
function get2Comercio(){
  tipo = 24;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#li2Comercioli').addClass('activoBorde');

}

function get3Instructivo(){
  tipo = 25;
  getLegislaciones(tipo)
  mostrarOtras();
  limiarMenuNivel1();
  limpiarTratados();
   limpiarCriterio();
   limpiarResolucion();
   limpiarReglas();
   limpiarPld();
   resolucionFacilidades();
   limpiarTesis();
   limpiarTratados();
   $('#li3Instructivoli').addClass('activoBorde');
}

function get4leyes(){
  tipo = 26;
  getLegislaciones(tipo)
  mostrarOtras();
  limiarMenuNivel1();
  limpiarTratados();
  limpiarCriterio();
  limpiarResolucion();
  limpiarReglas();
  limpiarPld();
  resolucionFacilidades();
  limpiarTesis();
  limpiarTratados();
  $('#li4leyesli').addClass('activoBorde');
}
function get5manual(){
  tipo = 27;
  getLegislaciones(tipo)
  mostrarOtras();
  limiarMenuNivel1();
  limpiarTratados();
  limpiarCriterio();
  limpiarResolucion();
  limpiarReglas();
  limpiarPld();
  resolucionFacilidades();
  limpiarTesis();
  limpiarTratados();
  $('#li5manualli').addClass('activoBorde');
}
function get6Mod(){
  tipo = 28;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
   limpiarCriterio();
   limpiarResolucion();
   limpiarReglas();
   limpiarPld();
   resolucionFacilidades();
   limpiarTesis();
   limpiarTratados();
   $('#li6Modli').addClass('activoBorde');
}
function get6Otras(){
  tipo = 29;
  getLegislaciones(tipo)
  mostrarOtras();
  limiarMenuNivel1();
  limpiarTratados();
  limpiarCriterio();
  limpiarResolucion();
  limpiarReglas();
  limpiarPld();
  resolucionFacilidades();
  limpiarTesis();
  limpiarTratados();
  $('#li6Otrasli').addClass('activoBorde');
}

function get7Resolucion(){
  tipo = 30;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucionli').addClass('activoBorde');
}

function get7Resolucion2(){
  tipo = 31;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion2li').addClass('activoBorde');
}
function get7Resolucion3(){
  tipo = 32;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion3li').addClass('activoBorde');
}
function get7Resolucion4() {
  tipo = 33;
  getLegislaciones(tipo)
  mostrarOtras();
  $('#li7Resolucion4li').addClass('activoBorde');
  limpiarResolucion();
}
function get7Resolucion5(){
  tipo = 34;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion5li').addClass('activoBorde');
}
function get7Resolucion6(){
  tipo = 35;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion6li').addClass('activoBorde');
}
function get7Resolucion7(){
  tipo = 36;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion7li').addClass('activoBorde');
}
function get7Resolucion8(){
  tipo = 37;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion8li').addClass('activoBorde');
}
function get7Resolucion9(){
  tipo = 43;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion9li').addClass('activoBorde');
}
function get7Resolucion10(){
  tipo = 44;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion10li').addClass('activoBorde');
}
function get7Resolucion11(){
  tipo = 51;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion11li').addClass('activoBorde');
}
function get7Resolucion12(){
  tipo = 52;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion12li').addClass('activoBorde');
}

function get8Comercio1(){
  tipo = 38;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio1li').addClass('activoBorde');
}
function get8Comercio2(){
  tipo = 39;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio2li').addClass('activoBorde');
}
function get8Comercio3(){
  tipo = 40;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio3li').addClass('activoBorde');
}
function get8Comercio4(){
  tipo = 41;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio4li').addClass('activoBorde');
}
function get8Comercio5(){
  tipo = 42;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio5li').addClass('activoBorde');
}


function get9Res1(){
  tipo = 45;
  getLegislaciones(tipo)
  mostrarOtras();
  resolucionFacilidades();
  $('#li9Res1li').addClass('activoBorde');
}
function get9Res2(){
  tipo = 46;
  getLegislaciones(tipo)
  mostrarOtras();
  resolucionFacilidades();
  $('#li9Res2').addClass('activoBorde');
}
function get10Revision(){
  tipo = 47;
  getLegislaciones(tipo)
  mostrarOtras();
  limiarMenuNivel1();
  limpiarTratados();
  limpiarCriterio();
  limpiarResolucion();
  limpiarReglas();
  limpiarPld();
  resolucionFacilidades();
  limpiarTesis();
  limpiarTratados();
  $('#li10Revisionli').addClass('activoBorde');
}

function getTesis(){
  tipo = 48;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTesis();
  $('#liTesisli').addClass('activoBorde');
}
function getTesis2(){
  tipo = 53;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTesis();
  $('#liTesis2li').addClass('activoBorde');
}

function getTrat1(){
  tipo = 49;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#liTrat1li').addClass('activoBorde');
}
function getTrat2(){
  tipo = 50;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#liTrat2li').addClass('activoBorde');
}
function getPld1(){
  tipo = 54;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarPld();
  $('#liPld1li').addClass('activoBorde');
}
function getPld2(){
  tipo = 55;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarPld();
  $('#liPld2li').addClass('activoBorde');
}
function getPld3(){
  tipo = 56;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarPld();
  $('#liPld3li').addClass('activoBorde');
}

function getDec1(){
  tipo = 57;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarOtross();
  $('#liDec1li').addClass('activoBorde');
}
function getDec2(){
  tipo = 58;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarOtross();
  $('#liDec2li').addClass('activoBorde');
}
function getDec3(){
  tipo = 59;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarOtross();
  $('#liDec3li').addClass('activoBorde');
}

function mostrarOtras(){
  menuLegislacion.removeClass('hidden');
  divContenido.removeClass('col-md-12');
  divContenido.addClass('col-md-10');
}
function ocultarOtras(){
  menuLegislacion.addClass('hidden');
  divContenido.removeClass('col-md-10');
  divContenido.addClass('col-md-12');
}
function tituloOtras(){
  tbodyLeyes.html('');
  mostrarOtras();
  ocultarLegEstatal();
}
function tituloLegEstatal(){
  tbodyLeyes.html('');
  mostrarLegEstatal();
}

function mostrarLegEstatal(){
  menuLegEstatal.removeClass('hidden');
  divContenido.removeClass('col-md-12');
  divContenido.addClass('col-md-10');
  ocultarOtras();
}

function ocultarLegEstatal(){
  menuLegEstatal.addClass('hidden');
  divContenido.removeClass('col-md-10');
  divContenido.addClass('col-md-12');
}


function getLegislaciones(tipo){
  var datos = $.ajax({
    url: 'getLegislaciones',
    data: {
      tp: tipo
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
        tbodyLeyes.html('');
         var i = 1;
        $.each(res.data, function(k,o){

          var tipoFil = '';
          mod = i % 2;
          if (mod != 0) {
            var tipoFil = 'trasparenteClaroPlus';
          }
          tbodyLeyes.append(
            '<a href="'+o.legLink+'"  target="_blank" class="list-group-item '+
            tipoFil+'"> <div class="row"> <div class="col-md-11">  <i class="fa fa-external-link"></i> '+
            o.legNombre+
                 '</div> </div>  </a> '
        );
        i++;
        });

    }else{
      tbodyLeyes.html('<tr><td colspan="8" class="text-center"><h3>'+ res.message +'</h3></td></tr>');
    }
}

$(document).on('ready', function(){
  limpiar();
  getConstitucion();
  intActual = document.querySelector("input[name='txtBuscar']");
  intActual.addEventListener("input", comprobar);
});

$( "a.aMenuLeg" ).on( "click", function() {
    limiarMenuNivel1();
});

function limpiarCriterio(){
  $('#liCriNormativoli').removeClass('activoBorde');
  $('#liCriAplicacionli').removeClass('activoBorde');
  $('#liCriVinculativosli').removeClass('activoBorde');
  $('#liCriProcedimientosli').removeClass('activoBorde');
  $('#liCriCPRli').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarResolucion(){
  $('#li7Resolucionli').removeClass('activoBorde');
  $('#li7Resolucion2li').removeClass('activoBorde');
  $('#li7Resolucion3li').removeClass('activoBorde');
  $('#li7Resolucion4li').removeClass('activoBorde');
  $('#li7Resolucion5li').removeClass('activoBorde');
  $('#li7Resolucion6li').removeClass('activoBorde');
  $('#li7Resolucion7li').removeClass('activoBorde');
  $('#li7Resolucion8li').removeClass('activoBorde');
  $('#li7Resolucion9li').removeClass('activoBorde');
  $('#li7Resolucion10li').removeClass('activoBorde');
  $('#li7Resolucion11li').removeClass('activoBorde');
  $('#li7Resolucion12li').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarReglas(){
  $('#li8Comercio1li').removeClass('activoBorde');
  $('#li8Comercio2li').removeClass('activoBorde');
  $('#li8Comercio3li').removeClass('activoBorde');
  $('#li8Comercio4li').removeClass('activoBorde');
  $('#li8Comercio5li').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarPld(){
  $('#liPld1li').removeClass('activoBorde');
  $('#liPld2li').removeClass('activoBorde');
  $('#liPld3li').removeClass('activoBorde');
  limiarMenuNivel1();
}
function resolucionFacilidades(){
  $('#li9Res1li').removeClass('activoBorde');
  $('#li9Res2').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarTesis(){
  $('#liTesisli').removeClass('activoBorde');
  $('#liTesis2li').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarTratados(){
  $('#liTrat1li').removeClass('activoBorde');
  $('#liTrat2li').removeClass('activoBorde');
  $('#li2Codigoli').removeClass('activoBorde');
  $('#li2Impueli').removeClass('activoBorde');
  $('#li2Iepsli').removeClass('activoBorde');
  $('#li2Isanli').removeClass('activoBorde');
  $('#li2Ivali').removeClass('activoBorde');
  $('#li2Istuvli').removeClass('activoBorde');
  $('#li2Hidrocli').removeClass('activoBorde');
  $('#li2Ideli').removeClass('activoBorde');
  $('#li2Orgli').removeClass('activoBorde');
  $('#li2Hojasli').removeClass('activoBorde');
  $('#li2Comercioli').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limiarMenuNivel1(){
  $('#li6Modli').removeClass('activoBorde');
  $('#li6Otrasli').removeClass('activoBorde');
  $('#li4leyesli').removeClass('activoBorde');
  $('#li10Revisionli').removeClass('activoBorde');
  $('#li5manualli').removeClass('activoBorde');
  $('#li3Instructivoli').removeClass('activoBorde');
}
function limpiarOtross(){
  $('#liDec1li').removeClass('activoBorde');
  $('#liDec2li').removeClass('activoBorde');
  $('#liDec3li').removeClass('activoBorde');

}

btnBuscar.on('click',buscarLegislacion);

titConstitucion.on('click', getConstitucion);
titCodigo.on('click',getCodigo);
titLeyes.on('click',getLeyes);
titReglamentos.on('click',getReglamentos);
titEstatutos.on('click',getEstatutos);
titOtras.on('click',tituloOtras);
//titEstatal.on('click', getEstatal);
titEstatal.on('click', mostrarLegEstatal);
titNOM.on('click',getNom);

liCriNormativo.on('click',getCriNormativo);
liCriAplicacion.on('click',getCriAplicacion);
liCriVinculativos.on('click',getCriVinculativos);
liCriProcedimientos.on('click',getCriProcedimientos);
liCriCPR.on('click',getCriCPR);
//liInfoteca.on('click',getInfoteca);

li2Codigo.on('click',get2Codigo);
li2Impue.on('click',get2Impue);
li2Ieps.on('click',get2Ieps);
li2Isan.on('click',get2Isan);
li2Iva.on('click',get2Iva);
li2Istuv.on('click',get2Istuv);
li2Hidroc.on('click',get2Hidroc);
li2Ide.on('click',get2Ide);
li2Org.on('click',get2Org);
li2Hojas.on('click',get2Hojas);
li2Comercio.on('click',get2Comercio);

li3Instructivo.on('click',get3Instructivo);
li4leyes.on('click',get4leyes);
li5manual.on('click',get5manual);
li6Mod.on('click',get6Mod);
li6Otras.on('click',get6Otras);

li7Resolucion.on('click',get7Resolucion);
li7Resolucion2.on('click',get7Resolucion2);
li7Resolucion3.on('click',get7Resolucion3);
li7Resolucion4.on('click',get7Resolucion4);
li7Resolucion5.on('click',get7Resolucion5);
li7Resolucion6.on('click',get7Resolucion6);
li7Resolucion7.on('click',get7Resolucion7);
li7Resolucion8.on('click',get7Resolucion8);

li8Comercio1.on('click',get8Comercio1);
li8Comercio2.on('click',get8Comercio2);
li8Comercio3.on('click',get8Comercio3);
li8Comercio4.on('click',get8Comercio4);
li8Comercio5.on('click',get8Comercio5);
li7Resolucion9.on('click',get7Resolucion9);
li7Resolucion10.on('click',get7Resolucion10);
li7Resolucion11.on('click',get7Resolucion11);
li7Resolucion12.on('click',get7Resolucion12);

li9Res1.on('click',get9Res1);
li9Res2.on('click',get9Res2);

li10Revision.on('click',get10Revision);

liTesis.on('click',getTesis);
liTesis2.on('click',getTesis2);
liTrat1.on('click',getTrat1);
liTrat2.on('click',getTrat2);

liPld1.on('click',getPld1);
liPld2.on('click',getPld2);
liPld3.on('click',getPld3);

liDec1.on('click',getDec1);
liDec2.on('click',getDec2);
liDec3.on('click',getDec3);
