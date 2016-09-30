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
    li7Resolucion9=$('#li7Resolucion9');
  var li8Comercio1=$('#li8Comercio1'),
      li8Comercio2=$('#li8Comercio2'),
      li8Comercio3=$('#li8Comercio3'),
      li8Comercio4=$('#li8Comercio4'),
      li8Comercio5=$('#li8Comercio5'),
      li7Resolucion10=$('#li7Resolucion10');
  var li9Res1=$('#li9Res1'),
      li9Res2=$('#li9Res2');
var liTesis=$('#liTesis');
var li10Revision=$('#li10Revision');
var liTrat1=$('#liTrat1'),
    liTrat2=$('#liTrat2');

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
  getLegislaciones(tipo)
}
function getCodigo(){
  tipo = 2;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getLeyes(){
  tipo = 3;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getReglamentos(){
  tipo = 4;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getEstatutos(){
  tipo = 5;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getOtras(){
  tipo = 6;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getEstatal(){
  tipo = 7;
  ocultarOtras();
  getLegislaciones(tipo)
}
function getNom(){
  tipo = 8;
  ocultarOtras();
  getLegislaciones(tipo)
}


function getCriNormativo(){
  tipo = 9;
  getLegislaciones(tipo)
  mostrarOtras();
//  $('#liCriNormativoli').addClass('activoBorde');
}
function getCriAplicacion(){
  tipo = 10;
  getLegislaciones(tipo)
  mostrarOtras();
//  $('#liCriAplicacionli').addClass('activoBorde');
}
function getCriVinculativos(){
  tipo = 11;
  getLegislaciones(tipo)
  mostrarOtras();
//  $('#liCriVinculativosli').addClass('activoBorde');
}
function getCriProcedimientos(){
  tipo = 12;
  getLegislaciones(tipo)
  mostrarOtras();
//  $('#liCriProcedimientosli').addClass('activoBorde');
}
function getCriCPR(){
  tipo = 13;
  getLegislaciones(tipo)
  mostrarOtras();
//  $('#liCriCPRli').addClass('activoBorde');      
}

function get2Codigo(){
  tipo = 14;
  getLegislaciones(tipo)
  mostrarOtras();

}
function get2Impue(){
  tipo = 15;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Ieps(){
  tipo = 16;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Isan(){
  tipo = 17;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Iva(){
  tipo = 18;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Istuv(){
  tipo = 19;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Hidroc(){
  tipo = 20;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Ide(){
  tipo = 21;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Org(){
  tipo = 22;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Hojas(){
  tipo = 23;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get2Comercio(){
  tipo = 24;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get3Instructivo(){
  tipo = 25;
  getLegislaciones(tipo)
  mostrarOtras();
}

function get4leyes(){
  tipo = 26;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get5manual(){
  tipo = 27;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get6Mod(){
  tipo = 28;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get6Otras(){
  tipo = 29;
  getLegislaciones(tipo)
  mostrarOtras();
}

function get7Resolucion(){
  tipo = 30;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion2(){
  tipo = 31;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion3(){
  tipo = 32;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion4() {
  tipo = 33;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion5(){
  tipo = 34;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion6(){
  tipo = 35;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion7(){
  tipo = 36;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion8(){
  tipo = 37;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get8Comercio1(){
  tipo = 38;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get8Comercio2(){
  tipo = 39;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get8Comercio3(){
  tipo = 40;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get8Comercio4(){
  tipo = 41;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get8Comercio5(){
  tipo = 42;
  getLegislaciones(tipo)
  mostrarOtras();
}

function get7Resolucion9(){
  tipo = 43;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get7Resolucion10(){
  tipo = 44;
  getLegislaciones(tipo)
  mostrarOtras();
}

function get9Res1(){
  tipo = 45;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get9Res2(){
  tipo = 46;
  getLegislaciones(tipo)
  mostrarOtras();
}
function get10Revision(){
  tipo = 47;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getTesis(){
  tipo = 48;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getTrat1(){
  tipo = 49;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getTrat2(){
  tipo = 50;
  getLegislaciones(tipo)
  mostrarOtras();
}


function mostrarOtras(){
  menuLegislacion.removeClass('hidden');
  divContenido.removeClass('col-md-12');
  divContenido.addClass('col-md-10');
}
function tituloOtras(){
  tbodyLeyes.html('');
  mostrarOtras();
}

function ocultarOtras(){
  menuLegislacion.addClass('hidden');
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

btnBuscar.on('click',buscarLegislacion);

titConstitucion.on('click', getConstitucion);
titCodigo.on('click',getCodigo);
titLeyes.on('click',getLeyes);
titReglamentos.on('click',getReglamentos);
titEstatutos.on('click',getEstatutos);
titOtras.on('click',tituloOtras);
titEstatal.on('click', getEstatal);
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

li9Res1.on('click',get9Res1);
li9Res2.on('click',get9Res2);

li10Revision.on('click',get10Revision);

liTesis.on('click',getTesis);
liTrat1.on('click',getTrat1);
liTrat2.on('click',getTrat2);
