<?php

  namespace SettlementCalculator\Library;

  class Enqueues {

    public function __construct(){

      $this->register_scripts();

      //enqueue default scripts
      $this->enqueue_default_scripts();

      //localize standard php variables
      $this->localize_js_vars();

      //register styles
      $this->register_styles();

      // enqueue default styles
      $this->enqueue_default_styles();


      wp_register_script('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
      wp_enqueue_script('prefix_bootstrap');

      wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
      wp_enqueue_style('prefix_bootstrap');

      wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );





    }


    public function register_styles(){
      wp_register_style('sc-styles-css', SETTLEMENT_CALCULATOR_URL . "/css/main.css", array('prefix_bootstrap') );
      // wp_register_style('gc-gmaps-css', "https://fonts.googleapis.com/css?family=Roboto:300,400,500");
      // wp_register_style('jquery-ui-css', "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");


    }

    public function enqueue_default_styles(){
      wp_enqueue_style('sc-styles-css');
      // wp_enqueue_style('gc-gmaps-css');
      // wp_enqueue_style('jquery-ui-css');

    }

    public function register_scripts(){

      //default scripts and object classes
      // wp_register_script( 'gc-scripts-js', GFORM_CUSTOM_URL . 'dist/js/scripts.js', array('jquery','wp-api'));



    }

    public function enqueue_default_scripts(){
      // wp_enqueue_script( 'gc-scripts-js' );
      // wp_enqueue_script( 'google-maps-js' );
      // wp_enqueue_script( 'google-place-js' );
      // wp_enqueue_script( 'google-maps-main-js' );
      // wp_enqueue_script( 'gc-range-slider' );
      // wp_enqueue_script( 'gforms-js' );

    }

    public function localize_js_vars(){
      // wp_localize_script( 'gc-scripts-js', 'site_url', site_url() );
      //

    }

  }

 ?>
