var btnBuscar   = $('#btnBuscar'),
    btnVerTodos = $('#btnVerTodos'),
    txtBuscar   = $('#txtBuscar');
var tbodyConsultaR = $('#tbodyConsultaR'),
    tblConsultaR = $('#tblConsultaR');
var formConsulta = $('#formConsulta');
var formConsulta = $('#formConsulta'),
    txtNombreC = $('#txtNombreC'),
    txtRFC     = $('#txtRFC'),
    txtRegistro    = $('#txtRegistro'),
    txtTipoPersona = $('#txtTipoPersona'),
    txtRepresentante = $('#txtRepresentante'),
    txtTelefono = $('#txtTelefono'),
    txtServicio = $('#txtServicio'),
    txtCtoId    = $('#txtCtoId'),
    txtEstado   = $('#txtEstado'),
    txtNContratadas = $('#txtNContratadas'),
    txtNRealizadas  = $('#txtNRealizadas'),
    txtNRestantes   = $('#txtNRestantes'),
    txtFecha  = $('#txtFecha'),
    txtTitulo = $('#txtTitulo'),
    txtContenido = $('#txtContenido');
var btnCancelar  = $('#btnCancelar'),
    btnResponder = $('#btnResponder');
var pnlResponder = $('#pnlResponder'),
    txtCorreo = $('#txtCorreo'),
    txtRespuesta = $('#txtRespuesta'),
    slctAsesor   = $('#slctAsesor'),
    btnEnviarRespuesta = $('#btnEnviarRespuesta');
var idConsulta,
btnRegresar = $('#btnRegresar');
var RegExPattern=/^([\w\s\n\-\¿\?\(\).,:áéíóúÁÉÍÓÚñÑ])+$/;

  function verConsultasGratis(){
      var datos = $.ajax({
        url: 'verConsultasGratis',
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
        tbodyConsultaR.html('');
        if ( res.status === 'OK' ){
           var i = 1;
          $.each(res.data, function(k,o){
            if (o.perCliente == 1) {
              estado="Cliente";
            }
            else estado="Pre-registro";
            tbodyConsultaR.append(
              '<tr>'+
                '<td>'+o.cgrTitulo+'</td>'+
                '<td class="text-center">'+o.perNombre+'</td>'+
                '<td class="text-center">'+estado+'</td>'+
                '<td class="text-center">'+o.perNumeroPreregistro+'</td>'+
                '<td class="text-center">'+o.cgrFechaEnvio+'</td>'+
                '<td class="text-center">'+
                  '<span class="glyphicon glyphicon-edit text-primary" id="'+o.cgrId+'" '+ /*Id para usar despues al dar clic*/
                  'style="cursor:pointer" title="Ver consulta"></span>'+
                '</td>'+
              '</tr>'
          );
          i++;
          });
        }else{
          tblConsultaR.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');
        }
        tblConsultaR.removeClass('hidden');
    }

    function verGratisEspecifica(){
      id = $(this).attr('id');

        var datos = $.ajax({
          url: 'verGratisEspecifica',
          data: {
            id: id
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
              if(o.perTipoPersona==1) persona="moral";
              else persona="física";
              if (o.perCliente==1) estado="Cliente";
              else estado="Pre-registro";

              idConsulta=id;
              txtNombreC.val(o.perNombre);
              txtRFC.val(o.perRFC);
              txtRegistro.val(o.perNumeroPreregistro);
              txtTipoPersona.val(persona);
              txtTelefono.val(o.perTelefono);
              txtFecha.val(o.cgrFechaEnvio);
              txtEstado.val(estado);
              txtTitulo.val(o.cgrTitulo);
              txtContenido.val(o.cgrContenido);
              formConsulta.removeClass('hidden');
              tblConsultaR.addClass('hidden');

              btnResponder.val(o.ccAtendido);
              txtRespuesta.val(o.ccRespuesta);
              txtCorreo.val(o.perCorreo);

            });
          }else{
            /*tblConsultaR.html('<tr><td colspan="8" class="center"><h3>'+ res.message +'</h3></td></tr>');*/
          }
      }

function responder(){
  pnlResponder.removeClass('hidden');
  if(btnResponder.val() == 1){
    btnEnviarRespuesta.addClass('hidden');
  }
  else{
    txtRespuesta.val("");
    btnEnviarRespuesta.removeClass('hidden');

    var datos = $.ajax({
      url: 'getAsesoresActivo',
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
      slctAsesor.html('');
      slctAsesor.append(
          '<option value="0">-</option>'
        );
      if ( res.status === 'OK' ){

         var i = 1;
        $.each(res.data, function(k,o){
          slctAsesor.append(
              '<option value="'+o.asesId+'">'+o.asesNombre+' '+o.asesPrimerApe+' '+o.asesSegundoApe+'</option>'
        );
        i++;
        });
      }else{
        slctAsesor.append(
            '<option>'+res.message+'</option>'
          );
      }
  }
}

function limpiar(){
  txtRespuesta.val("");
  txtCorreo.val("");
  btnEnviarRespuesta.removeClass('hidden');
  verConsultasGratis();
  formConsulta.addClass('hidden');
  pnlResponder.addClass('hidden');
  tblConsultaR.removeClass('hidden');
}

function responderGratis(){
  if ( !validar() )
    return false;

  var datos = $.ajax({
    url: 'responderGratis',
    data: {
      idConsulta: idConsulta,
      respuesta: txtRespuesta.val(),
      correo: txtCorreo.val(),
      ase:slctAsesor.val()
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
      swal(res.message,"","success");
      limpiar();
    }else{
      swal(res.message,"","warning");
    }
}

function validar(){
  if (slctAsesor.val() == 0) {
    swal("Debe seleccionar el asesor que atendio la consulta.","","warning");
    slctAsesor.focus();
    return false;
  }
  return true;
}
function comprobarRespuesta(e){
  var elem = e.target;
  if (elem.value.match(RegExPattern)) {
    document.getElementById('spnRespuesta').innerHTML = "";
    elem.style.background='#FFFFFF';
  }
  else {
    elem.style.background='#FFDDDD';
    document.getElementById('spnRespuesta').innerHTML = '<i class="fa fa-exclamation-circle"></i> Solo caracteres alfanumericos y . - , : ¿ ?';
  }
}
tblConsultaR.delegate('.glyphicon-edit', 'click', verGratisEspecifica);
btnCancelar.on('click', limpiar);
btnResponder.on('click', responder);
btnEnviarRespuesta.on('click',responderGratis);
btnRegresar.on('click',limpiar);
$(document).on('ready', function(){
  limpiar();
  intConsulta = document.getElementById("txtRespuesta");
  intConsulta.addEventListener("input", comprobarRespuesta);
});
$('#liactivarRecividas').addClass('active');
$('#collapseConsulta').addClass('in');
