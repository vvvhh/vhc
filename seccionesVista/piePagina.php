<footer id="piePrincipal"  class="text-center">
  <div class="footer-above">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-4 col-sm-4">
          <h4>Ciudad de México</h4>
          <p class="formatoTexto14">Huatabampo 72 Int. 1, 2<br>Col. Roma Sur, Cuauhtémoc, Cd. Méx., México  <br> C.P. 06760</p>
          <p class="formatoTexto14">
            55 74 41 91 - 55 74 27 95 <br> 55 64 38 07 - 55 84 26 12
          </p>
          <p class="formatoTexto14">
            <i class="fa fa-whatsapp" aria-hidden="true"></i> 55 55 08 52 13
          </p>
        </div>
        <div class="footer-col col-md-4 col-sm-4">
          <h4>Cancún</h4>
        <!--    <p class="formatoTexto14">Av. Nichupte Mza. 2 Lt. 20 <br>Piso 4 Int. 415 SM. 19<br> Plaza Atrium, <br> Cancún, Quintana Roo.</p>
        -->
          <p class="formatoTexto14">Av. Xpuhil sur <br>Mza. 2, Lote 23, Despacho 201, 208 <br> Supermanzana 19, <br> Benito Juárez, Quintana Roo. <br> C.P. 77505</p>
          <p clas="formatoTexto14">
            (998) 868 30 55
          </p>

        </div>
      <!--    <div class="footer-col col-md-3 col-sm-4">
          <h4>Mérida</h4>
          <p class="formatoTexto14"> Calle 33 No. 618A<br>Col. Pedregales de Ciudad Caucel,<br>Mérida, Yucatán.</p>
        </div>

        -->
        <div class="footer-col col-md-4 col-sm-12">
          <h4>En la red</h4>
          <ul class="list-inline center-block">
            <li>
              <a href="https://www.facebook.com/VazquezHernandezContadoresSC" target="blanck" class="btn-outline btn-social facebook"><i class="fa fa-facebook fa-2x"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/contadoresvhc" target="blanck" class="btn-outline btn-social twitter"><i class="fa fa-twitter fa-2x"></i></a>
            </li>
            <li>
              <a href="https://plus.google.com/107251096834858671720/posts" target="blanck" class="btn-outline btn-social google"><i class="fa fa-google-plus fa-2x"></i></a>
            </li>
	          <li>
              <a href="https://es.pinterest.com/ContadoresVH/" target="blanck" class="btn-outline btn-social pinterest"><i class="fa fa-pinterest fa-2x"></i></a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UC1RJyIURezwLVA9bAH6dirQ" target="blanck" class="btn-outline btn-social youtube"><i class="fa fa-youtube-play fa-2x"></i></a>
            <!--   <a href="https://www.youtube.com/channel/UCHjetGxn3e85F-p02bbCytQ" target="blanck" class="btn-outline btn-social youtube"><i class="fa fa-youtube-play fa-2x"></i></a>
             -->
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-below">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 colorTxtPieBajo">
          <a href="#" id="condicion">&copy; VHC 2016</a>
          |
          <a href="#" id="aPrivacidad" class="enlacePie">Aviso privacidad</a>
          |
    <!--        <a href="publicos/piePagina/avisoPrivacidadProveedores.php" id="condicion">Aviso privacidad proveedores</a>
          |
          <a href="publicos/piePagina/avisoPrivacidadEmpleados.php" id="condicion">Aviso privacidad empleados</a>
          |-->
          <a href="#" id="aPolitica" class="enlacePie">Política de uso y privacidad del sitio web</a>
          |
          <a href="#" id="aMapa" class="enlacePie">Mapa del sitio</a>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  var condicion=document.getElementById('condicion'),
      aPrivacidad=document.getElementById('aPrivacidad'),
      aPolitica=document.getElementById('aPolitica'),
      aMapa=document.getElementById('aMapa');

function verificarAceptadoAvisoPie(){
  //var valor=sessionStorage.getItem("visita");
  var valor=1;
      var dominio=window.location.host;
      //var absoluta="/vhc/";
      var absoluta="/";
      var rCondicion="publicos/piePagina/propiedadIntelectual.php",
          rPrivacidad="publicos/piePagina/avisoPrivacidadClientes.php",
          rPolitica="publicos/piePagina/politicaUso.php",
          rMapa = "publicos/piePagina/mapaSitio.php";

if((valor=="1") && (valor!=null)){

    condicion.href="http://"+dominio+absoluta+rCondicion;
    aPrivacidad.href= "http://"+dominio+absoluta+rPrivacidad;
    aPolitica.href= "http://"+dominio+absoluta+rPolitica;
    aMapa.href= "http://"+dominio+absoluta+rMapa;
    console.log("pie aceptado");
    }
  else{
        condicion.href= '#';
        aPrivacidad.href=  '#';
        aPolitica.href=  '#';
        aMapa.href=  '#';
        console.log("pie no aceptado");
  }
}
verificarAceptadoAvisoPie();

  </script>
</footer>
