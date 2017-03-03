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
    liCriAplicacion=$('#liCriAplicacion'),
    liCriVinculativos=$('#liCriVinculativos'),
    liCriProcedimientos=$('#liCriProcedimientos'),
    liCriCPR=$('#liCriCPR'),
    liCriterio6=$('#liCriterio6'),
    liCriterio7=$('#liCriterio7');
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
    li7Resolucion12=$('#li7Resolucion12'),
    li7Resolucion13=$('#li7Resolucion13'),
    li7Resolucion14=$('#li7Resolucion14'),
    li7Resolucion15=$('#li7Resolucion15'),
    li7Resolucion16=$('#li7Resolucion16'),
    li7Resolucion17=$('#li7Resolucion17'),
    li7Resolucion18=$('#li7Resolucion18'),
    li7Resolucion19=$('#li7Resolucion19'),
    li7Resolucion20=$('#li7Resolucion20'),
    li7Resolucion21=$('#li7Resolucion21'),
    li7Resolucion22=$('#li7Resolucion22'),
    li7Resolucion23=$('#li7Resolucion23'),
    li7Resolucion24=$('#li7Resolucion24'),
    li7Resolucion25=$('#li7Resolucion25'),
    li7Resolucion26=$('#li7Resolucion26'),
    li7Resolucion27=$('#li7Resolucion27'),
    li7Resolucion28=$('#li7Resolucion28'),
    li7Resolucion29=$('#li7Resolucion29');
    li7Resolucion30=$('#li7Resolucion30');
    li7Resolucion31=$('#li7Resolucion31');
    li7Resolucion32=$('#li7Resolucion32');
    li7Resolucion33=$('#li7Resolucion33');
    li7Resolucion34=$('#li7Resolucion34');
    li7Resolucion35=$('#li7Resolucion35');
    li7Resolucion36=$('#li7Resolucion36');
  var li8Comercio1=$('#li8Comercio1'),
      li8Comercio2=$('#li8Comercio2'),
      li8Comercio3=$('#li8Comercio3'),
      li8Comercio4=$('#li8Comercio4'),
      li8Comercio5=$('#li8Comercio5'),
      li8Comercio6=$('#li8Comercio6'),
      li8Comercio7=$('#li8Comercio7'),
      li8Comercio8=$('#li8Comercio8'),
      li8Comercio9=$('#li8Comercio9'),
      li8Comercio10=$('#li8Comercio10'),
      li8Comercio11=$('#li8Comercio11'),
      li8Comercio12=$('#li8Comercio12');
      li8Comercio13=$('#li8Comercio13');
      li8Comercio14=$('#li8Comercio14');
      li8Comercio15=$('#li8Comercio15');
  var li9Res1=$('#li9Res1'),
      li9Res2=$('#li9Res2'),
      li9Res3=$('#li9Res3');
var liTesis=$('#liTesis'),
    liTesis2=$('#liTesis2'),
    liTesis3=$('#liTesis3');
var li10Revision=$('#li10Revision');
var liTrat1=$('#liTrat1'),
    liTrat2=$('#liTrat2'),
    liTrat3=$('#liTrat3');
var liPld1=$('#liPld1'),
    liPld2=$('#liPld2'),
    liPld3=$('#liPld3');
var liDec1=$('#liDec1'),
    liDec2=$('#liDec2'),
    liDec3=$('#liDec3');
var liLegEs1=$('#liLegEs1'),
    liLegEs2=$('#liLegEs2'),
    liLegEs1li=$('#liLegEs1li'),
    liLegEs2li=$('#liLegEs2li');

function buscarLegislacion(){
  tblResultados.removeClass('hidden');
        var datos = $.ajax({
          url: '../../php/legislacionLink/getLegislacion.php',
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

function getNom(){
  tipo = 8;
  ocultarOtras();
  ocultarLegEstatal();
  getLegislaciones(tipo)
}

function getEstatal(){
  tipo = 7;
  ocultarOtras();
  //ocultarLegEstatal();
  getLegislaciones(tipo)
  mostrarLegEstatal();
  limpiarLegislacion();
  liLegEs1li.addClass('activoBorde');
}
function getLegEs2(){
  tipo = 60;
  ocultarOtras();
  //ocultarLegEstatal();
  getLegislaciones(tipo)
  mostrarLegEstatal();
  limpiarLegislacion();
  liLegEs2li.addClass('activoBorde');
}

function getCriNormativo(){
  tipo = 9;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriNormativoli').addClass('activoBorde');
}
function getCriterio6(){
  tipo = 88;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriterio6li').addClass('activoBorde');
}
function getCriterio7(){
  tipo = 89;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarCriterio();
  $('#liCriterio7li').addClass('activoBorde');
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
function get7Resolucion13(){
  tipo = 62;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion13li').addClass('activoBorde');
}
function get7Resolucion14(){
  tipo = 63;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion14li').addClass('activoBorde');
}
function get7Resolucion15(){
  tipo = 64;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion15li').addClass('activoBorde');
}
function get7Resolucion16(){
  tipo = 65;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion16li').addClass('activoBorde');
}
function get7Resolucion17(){
  tipo = 66;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion17li').addClass('activoBorde');
}
function get7Resolucion18(){
  tipo = 72;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion18li').addClass('activoBorde');
}
function get7Resolucion19(){
  tipo = 73;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion19li').addClass('activoBorde');
}
function get7Resolucion20(){
  tipo = 75;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion20li').addClass('activoBorde');
}
function get7Resolucion21(){
  tipo = 74;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion21li').addClass('activoBorde');
}
function get7Resolucion22(){
  tipo = 76;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion22li').addClass('activoBorde');
}
function get7Resolucion23(){
  tipo = 77;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion23li').addClass('activoBorde');
}
function get7Resolucion24(){
  tipo = 78;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion24li').addClass('activoBorde');
}
function get7Resolucion25(){
  tipo = 79;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion25li').addClass('activoBorde');
}
function get7Resolucion26(){
  tipo = 80;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion26li').addClass('activoBorde');
}
function get7Resolucion27(){
  tipo = 81;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion27li').addClass('activoBorde');
}
function get7Resolucion28(){
  tipo = 82;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion28li').addClass('activoBorde');
}
function get7Resolucion29(){
  tipo = 83;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion29li').addClass('activoBorde');
}
function get7Resolucion30(){
  tipo = 93;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion30li').addClass('activoBorde');
}
function get7Resolucion31(){
  tipo = 94;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion31li').addClass('activoBorde');
}
function get7Resolucion32(){
  tipo = 95;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion32li').addClass('activoBorde');
}

function get7Resolucion33(){
  tipo = 96;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion33li').addClass('activoBorde');
}
function get7Resolucion34(){
  tipo = 97;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion34li').addClass('activoBorde');
}
function get7Resolucion35(){
  tipo = 98;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion35li').addClass('activoBorde');
}
function get7Resolucion36(){
  tipo = 99;
  getLegislaciones(tipo);
  mostrarOtras();
  limpiarResolucion();
  $('#li7Resolucion36li').addClass('activoBorde');
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
function get8Comercio6(){
  tipo = 67;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio6li').addClass('activoBorde');
}
function get8Comercio7(){
  tipo = 68;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio7li').addClass('activoBorde');
}
function get8Comercio8(){
  tipo = 69;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio8li').addClass('activoBorde');
}
function get8Comercio9(){
  tipo = 70;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio9li').addClass('activoBorde');
}
function get8Comercio10(){
  tipo = 71;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio10li').addClass('activoBorde');
}
function get8Comercio11(){
  tipo = 84;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio11li').addClass('activoBorde');
}
function get8Comercio12(){
  tipo = 85;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio12li').addClass('activoBorde');
}
function get8Comercio13(){
  tipo = 86;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio13li').addClass('activoBorde');
}
function get8Comercio14(){
  tipo = 91;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio14li').addClass('activoBorde');
}
function get8Comercio15(){
  tipo = 92;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarReglas();
  $('#li8Comercio15li').addClass('activoBorde');
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
function get9Res3(){
  tipo = 87;
  getLegislaciones(tipo)
  mostrarOtras();
  resolucionFacilidades();
  $('#li9Res3li').addClass('activoBorde');
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
function getTesis3(){
  tipo = 90;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTesis();
  $('#liTesis3li').addClass('activoBorde');
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
function getTrat3(){
  tipo = 61;
  getLegislaciones(tipo)
  mostrarOtras();
  limpiarTratados();
  $('#liTrat3li').addClass('activoBorde');
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
  ocultarOtras();
  mostrarLegEstatal();
}

function mostrarLegEstatal(){
  menuLegEstatal.removeClass('hidden');
  divContenido.removeClass('col-md-12');
  divContenido.addClass('col-md-10');
}

function ocultarLegEstatal(){
  menuLegEstatal.addClass('hidden');
  divContenido.removeClass('col-md-10');
  divContenido.addClass('col-md-12');
}


function getLegislaciones(tipo){
  var datos = $.ajax({
    url: '../../php/legislacionLink/getLegislaciones.php',
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
  $('#liCriterio6li').removeClass('activoBorde');
  $('#liCriterio7li').removeClass('activoBorde');
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
  $('#li7Resolucion13li').removeClass('activoBorde');
  $('#li7Resolucion14li').removeClass('activoBorde');
  $('#li7Resolucion15li').removeClass('activoBorde');
  $('#li7Resolucion16li').removeClass('activoBorde');
  $('#li7Resolucion17li').removeClass('activoBorde');
  $('#li7Resolucion18li').removeClass('activoBorde');
  $('#li7Resolucion19li').removeClass('activoBorde');
  $('#li7Resolucion20li').removeClass('activoBorde');
  $('#li7Resolucion21li').removeClass('activoBorde');
  $('#li7Resolucion22li').removeClass('activoBorde');
  $('#li7Resolucion23li').removeClass('activoBorde');
  $('#li7Resolucion24li').removeClass('activoBorde');
  $('#li7Resolucion25li').removeClass('activoBorde');
  $('#li7Resolucion26li').removeClass('activoBorde');
  $('#li7Resolucion27li').removeClass('activoBorde');
  $('#li7Resolucion28li').removeClass('activoBorde');
  $('#li7Resolucion29li').removeClass('activoBorde');
  $('#li7Resolucion30li').removeClass('activoBorde');
  $('#li7Resolucion31li').removeClass('activoBorde');
  $('#li7Resolucion32li').removeClass('activoBorde');
  $('#li7Resolucion33li').removeClass('activoBorde');
  $('#li7Resolucion34li').removeClass('activoBorde');
  $('#li7Resolucion35li').removeClass('activoBorde');
  $('#li7Resolucion36li').removeClass('activoBorde');

  limiarMenuNivel1();
}
function limpiarReglas(){
  $('#li8Comercio1li').removeClass('activoBorde');
  $('#li8Comercio2li').removeClass('activoBorde');
  $('#li8Comercio3li').removeClass('activoBorde');
  $('#li8Comercio4li').removeClass('activoBorde');
  $('#li8Comercio5li').removeClass('activoBorde');
  $('#li8Comercio6li').removeClass('activoBorde');
  $('#li8Comercio7li').removeClass('activoBorde');
  $('#li8Comercio8li').removeClass('activoBorde');
  $('#li8Comercio9li').removeClass('activoBorde');
  $('#li8Comercio10li').removeClass('activoBorde');
  $('#li8Comercio11li').removeClass('activoBorde');
  $('#li8Comercio12li').removeClass('activoBorde');
  $('#li8Comercio13li').removeClass('activoBorde');
  $('#li8Comercio14li').removeClass('activoBorde');
  $('#li8Comercio15li').removeClass('activoBorde');

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
  $('#li9Res3').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarTesis(){
  $('#liTesisli').removeClass('activoBorde');
  $('#liTesis2li').removeClass('activoBorde');
  $('#liTesis3li').removeClass('activoBorde');
  limiarMenuNivel1();
}
function limpiarTratados(){
  $('#liTrat1li').removeClass('activoBorde');
  $('#liTrat2li').removeClass('activoBorde');
  $('#liTrat3li').removeClass('activoBorde');
/*  $('#li2Codigoli').removeClass('activoBorde');
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
  */
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
function limpiarLegislacion(){
  liLegEs1li.removeClass('activoBorde');
  liLegEs2li.removeClass('activoBorde');
}

btnBuscar.on('click',buscarLegislacion);

titConstitucion.on('click', getConstitucion);
titCodigo.on('click',getCodigo);
titLeyes.on('click',getLeyes);
titReglamentos.on('click',getReglamentos);
titEstatutos.on('click',getEstatutos);
titOtras.on('click',tituloOtras);
//titEstatal.on('click', getEstatal);
titEstatal.on('click', tituloLegEstatal);
titNOM.on('click',getNom);

liCriNormativo.on('click',getCriNormativo);
liCriAplicacion.on('click',getCriAplicacion);
liCriVinculativos.on('click',getCriVinculativos);
liCriProcedimientos.on('click',getCriProcedimientos);
liCriCPR.on('click',getCriCPR);
liCriterio6.on('click',getCriterio6);
liCriterio7.on('click',getCriterio7);
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
li8Comercio6.on('click',get8Comercio6);
li8Comercio7.on('click',get8Comercio7);
li8Comercio8.on('click',get8Comercio8);
li8Comercio9.on('click',get8Comercio9);
li8Comercio10.on('click',get8Comercio10);
li8Comercio11.on('click',get8Comercio11);
li8Comercio12.on('click',get8Comercio12);
li8Comercio13.on('click',get8Comercio13);
li8Comercio14.on('click',get8Comercio14);
li8Comercio15.on('click',get8Comercio15);

li7Resolucion9.on('click',get7Resolucion9);
li7Resolucion10.on('click',get7Resolucion10);
li7Resolucion11.on('click',get7Resolucion11);
li7Resolucion12.on('click',get7Resolucion12);
li7Resolucion13.on('click',get7Resolucion13);
li7Resolucion14.on('click',get7Resolucion14),
li7Resolucion15.on('click',get7Resolucion15),
li7Resolucion16.on('click',get7Resolucion16),
li7Resolucion17.on('click',get7Resolucion17);
li7Resolucion18.on('click',get7Resolucion18);
li7Resolucion19.on('click',get7Resolucion19);
li7Resolucion20.on('click',get7Resolucion20);
li7Resolucion21.on('click',get7Resolucion21);
li7Resolucion22.on('click',get7Resolucion22);
li7Resolucion23.on('click',get7Resolucion23);
li7Resolucion24.on('click',get7Resolucion24);
li7Resolucion25.on('click',get7Resolucion25);
li7Resolucion26.on('click',get7Resolucion26);
li7Resolucion27.on('click',get7Resolucion27);
li7Resolucion28.on('click',get7Resolucion28);
li7Resolucion29.on('click',get7Resolucion29);
li7Resolucion30.on('click',get7Resolucion30);
li7Resolucion31.on('click',get7Resolucion31);
li7Resolucion32.on('click',get7Resolucion32);
li7Resolucion33.on('click',get7Resolucion33);
li7Resolucion34.on('click',get7Resolucion34);
li7Resolucion35.on('click',get7Resolucion35);
li7Resolucion36.on('click',get7Resolucion36);

li9Res1.on('click',get9Res1);
li9Res2.on('click',get9Res2);
li9Res3.on('click',get9Res3);

li10Revision.on('click',get10Revision);

liTesis.on('click',getTesis);
liTesis2.on('click',getTesis2);
liTesis3.on('click',getTesis3);
liTrat1.on('click',getTrat1);
liTrat2.on('click',getTrat2);
liTrat3.on('click',getTrat3);

liPld1.on('click',getPld1);
liPld2.on('click',getPld2);
liPld3.on('click',getPld3);

liDec1.on('click',getDec1);
liDec2.on('click',getDec2);
liDec3.on('click',getDec3);

liLegEs1.on('click',getEstatal);
liLegEs2.on('click',getLegEs2);
