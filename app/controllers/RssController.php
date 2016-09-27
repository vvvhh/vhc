<?php

class RssController extends BaseController
{

  public function rssInicio(){
    Session::flush();
  	Cache::flush();

    $feedEconomista = new SimplePie();
	  $feedEconomista->set_feed_url('http://eleconomista.com.mx/ultimas-noticias/rss');
	  $feedEconomista->enable_order_by_date(true);
	  $feedEconomista->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedEconomista->handle_content_type();
	  $feedEconomista->init();

   $feedFinanciro = new SimplePie();
    $feedFinanciro->set_feed_url('http://www.elfinanciero.com.mx/rss/');
	  $feedFinanciro->enable_order_by_date(true);
	  $feedFinanciro->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedFinanciro->handle_content_type();
	  $feedFinanciro->init();

    $feedDOF = new SimplePie();
    $feedDOF->set_feed_url('http://www.dof.gob.mx/sumario.xml');
    $feedDOF->enable_order_by_date(true);
    $feedDOF->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedDOF->handle_content_type();
    $feedDOF->init();

    $feedDolar = new SimplePie();
    $feedDolar->set_feed_url('http://www.banxico.org.mx/rsscb/rss?BMXC_canal=fix&BMXC_idioma=es');
    $feedDolar->enable_order_by_date(true);
    $feedDolar->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedDolar->handle_content_type();
    $feedDolar->init();

    $feedEuro = new SimplePie();
    $feedEuro->set_feed_url('http://www.banxico.org.mx/rsscb/rss?BMXC_canal=euro&BMXC_idioma=es');
    $feedEuro->enable_order_by_date(true);
    $feedEuro->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedEuro->handle_content_type();
    $feedEuro->init();

    $feedUdisTiie = new SimplePie();
    $feedUdisTiie->set_feed_url('http://www.dof.gob.mx/indicadores.xml');
    $feedUdisTiie->enable_order_by_date(false);
    $feedUdisTiie->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
    $feedUdisTiie->handle_content_type();
    $feedUdisTiie->init();

    $feed=array(
      $feedEconomista, //0
      $feedFinanciro, //1
      $feedDOF,     //2
      $feedUdisTiie,//3

      $feedDolar,    //4
      $feedEuro,      //5
    );

	  return View::make('inicio')->with('feed', $feed);
  }
}
