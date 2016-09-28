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
