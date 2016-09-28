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
}
function getCriAplicacion(){
  tipo = 10;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getCriVinculativos(){
  tipo = 11;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getCriProcedimientos(){
  tipo = 12;
  getLegislaciones(tipo)
  mostrarOtras();
}
function getCriCPR(){
  tipo = 13;
  getLegislaciones(tipo)
  mostrarOtras();
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
titOtras.on('click',mostrarOtras);
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
