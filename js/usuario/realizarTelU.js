var idU = $('#idU'), idC,
    nombreU = $('#nombreU'),
    regU = $('#regU');
var btnRegresar = $('#btnRegresar');

var txtFolioC = $('#txtFolioC'),
txtServicioRC   = $('#txtServicioRC'),
txtTipoC       = $('#txtTipoC'),
txtNContratado = $('#txtNContratado'),
txtNRealizadas = $('#txtNRealizadas'),
txtNRestantes  = $('#txtNRestantes'),
txtServicioC = $('#txtServicioC'),
tbodyContenidoC = $('#tbodyContenidoC');

var tblContenidoC = $('#tblContenidoC'),
seleccionarServ= $('#seleccionarServ');
var tbodyConsultas = $('#tbodyConsultas'),
    tblConsultas = $('#tblConsultas');

    function consultasRealizadas(){
      var idC = $(this).attr('id');
      //alert(idC);
      var datos = $.ajax({
        url:'nConsultasServ',
        data: {
          idCto: idC
        },
        type:'post',
        dataType:'json',
        async:false
      }).error(function(e){
          alert('Ocurrio un error, intente de nuevo');
      }).responseText;

      var tituloAlert="",textoAlert="",estadoAlert="";
      var res;
      try{
          res = JSON.parse(datos);
      }catch (e){
          alert('Error JSON ' + e);
      }


      if ( res.status === 'OK' ){
        var coRealizadas = res.data;
        var datosContrato = res.contratado[0];
        var consultasContratadas = datosContrato.solNConsultas;

        txtNContratado.val(consultasContratadas);
        txtNRealizadas.val(coRealizadas);
        txtNRestantes.val(consultasContratadas-coRealizadas);

        txtFolioC.val(datosContrato.ctoId);
        txtServicioC.val(datosContrato.serNombre);

        var tipoCo="";
        if(datosContrato.solTipoConsulta==1) tipoCo="En Línea";
        else tipoCo="Telefónica";
        txtTipoC.val(tipoCo);

        getContenidoConsultas(idC);
        if (txtNRestantes.val() == 0) {
            swal({
              title: "Usted utilizó todas las consultas para el presente contrato.",
              text: "Le invitamos a contratar más paquetes de consultas.",

              showCancelButton: true,
              type: "warning",
              cancelButtonText: "Cerrar",
              confirmButtonText: "Contratar",

              closeOnConfirm: true,
              closeOnCancel: true,
              },
              function(){
              location.href ="contratarU";
            });
        }
        if ((txtNRestantes.val() > 0)&&(txtNRestantes.val() < 3)) {
          swal({
            title: "Le restan menos de 3 consultas.",
            text: "Le invitamos a contratar más paquetes de consultas.",

            showCancelButton: true,
            type: "warning",
            cancelButtonText: "Cerrar",
            confirmButtonText: "Contratar",

            closeOnConfirm: true,
            closeOnCancel: true,
            },
            function(){
            location.href ="contratarU";
          });
        }

      }else{
        tituloAlert = "Error al cargar datos.";
        textoAlert = res.message;
        estdoAlert = "error";
        swal(tituloAlert, textoAlert, estdoAlert);
      }

    }


    function getContenidoConsultas(idC1){
      tblContenidoC.removeClass('hidden');
      seleccionarServ.addClass('hidden');
      tbodyContenidoC.html('');
        var datos = $.ajax({
          url: 'getContenidoConsultas',
          data: {
            idC: idC1
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

          if ( res.status == 'OK' ){
             var i = 1;

            $.each(res.data, function(k,o){

              var hora = o.ccHora;
              var min = o.ccMinuto;
              var duracion;

              if(min != null){
                  duracion= hora+':'+min;
              }
              else
                duracion="no aplica";

              fecha = o.ccFechaEnvio.split(" ",1);
              tbodyContenidoC.append(
                '<tr>'+
                '<td>'+o.ccTitulo+'</td>'+
                  '<td><textarea rows="4" cols="75" readonly>'+o.ccContenido+'</textarea></td>'+
                  '<td class="text-center">'+duracion+'</td>'+
                  '<td class="text-center">'+fecha+'</td>'+
                '</tr>'
            );
            i++;
            });
          }else{
            tituloAlert = "";
            textoAlert = "Aún no realiza consultas para el presente contrato";
            estdoAlert = "info";
            swal(tituloAlert, textoAlert, estdoAlert);
          }
      }


function getSolPerPagoTel(){
  idUs = idU.val();
/*alert(regU.val());*/
  var datos = $.ajax({
    url:'getSolPerPagoTel',
    data: {
      regU: regU.val()
    },
    type:'post',
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

  //var tituloA="",textoA="",estadoA="";
  if ( res.status === 'OK' ){
      var dataUsuario = res.data;
      tbodyConsultas.html('');

      $.each(res.data, function(k,o){
        var $idCto = o.ctoId;
        var consultasRealizadas;
        var consultasContratadas;
        /*******************/
        var datos = $.ajax({
          url:'nConsultas',
          data: {
            idCto: $idCto
          },
          type:'post',
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
           consultasRealizadas = res.data;
           consultasContratadas = res.contratado;
           consultasPorRealizar = consultasContratadas - consultasRealizadas;
        }else{
          tituloAlert = "Error al cargar datos.";
          textoAlert = res.message;
          estdoAlert = "error";
          swal(tituloAlert, textoAlert, estdoAlert);
        }
        /**************************/

        /*var contraMas="";
        if(consultasPorRealizar===0){
          contraMas ='<a id="comprarMas" class="btn btn-warning" href="{{ URL::to("usuario/contratarU") }}"><i class="fa fa-plus-circle"></i> Contratar más paquetes</a>';
        }*/
        fecha = o.solFecha.split(" ",1);
        tbodyConsultas.append(
          '<tr>'+
            '<td>'+$idCto+'</td>'+
            '<td>'+o.serNombre+'</td>'+
            '<td class="text-center">'+fecha+'</td>'+
            '<td class="text-center">'+consultasContratadas+'</td>'+
            '<td class="text-center">'+consultasRealizadas+'</td>'+
            '<td class="text-center">'+consultasPorRealizar+'</td>'+
            '<td class="text-center"><button class="btn btn-success btn-block" id="'+o.ctoId+'"><i class="fa fa-clock-o"></i> Historial</button></td>'+
          '</tr>'
          );

      });
  }else{
    seleccionarServ.addClass('hidden');
    textoA = res.message;
    //alert(textoA);
    swal("Aun no solicita consultas teléfonicas,",textoA,"warning");
  }
}

function consultaRedactar(){  /*************************************/
  //nConsulta.removeClass('hidden');
  seleccionarServ.addClass('hidden');
  idC = $(this).attr('id');

  var datos = $.ajax({
    url:'nConsultas',
    data: {
      idCto: idC
    },
    type:'post',
    dataType:'json',
    async:false
  }).error(function(e){
      alert('Ocurrio un error, intente de nuevo');
  }).responseText;

  var tituloAlert="",textoAlert="",estadoAlert="";
  var res;
  try{
      res = JSON.parse(datos);
  }catch (e){
      alert('Error JSON ' + e);
  }


  if ( res.status === 'OK' ){
    var consultasRealizadas = res.data;
    var consultasContratadas = res.contratado;
    txtNRealizadas.val(consultasRealizadas);
    txtNContratadas.val(consultasContratadas);

    if(consultasRealizadas == consultasContratadas){
      consulta.addClass('hidden');
      pnlContratarMas.removeClass('hidden');
    }
    else{
      consulta.removeClass('hidden');
      pnlContratarMas.addClass('hidden');
    }

  }else{
    tituloAlert = "Error al cargar datos.";
    textoAlert = res.message;
    estdoAlert = "error";
    swal(tituloAlert, textoAlert, estdoAlert);
  }
}

function limpiar(){
  //nConsulta.addClass('hidden');
  tblContenidoC.addClass('hidden');
  seleccionarServ.removeClass('hidden');
}

$('#collapseConsulta').addClass('in');
tblConsultas.delegate('.btn-success', 'click', consultasRealizadas);
btnRegresar.on('click',limpiar);
