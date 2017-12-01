<?php

  namespace SettlementCalculator\Library;

  class Shortcodes {

    public function __construct(){

      add_shortcode('settlement_calculator',array($this,'settlement_calculator'));

    }

    public function settlement_calculator(){

      $options = get_option( 'settcalc_options' );

      wp_enqueue_script('settcalc-bootstrap-js');
      wp_enqueue_script( 'settcalc-calculator-js' );
      wp_enqueue_style('settcalc-bootstrap-css');
      wp_enqueue_style('settcalc-fa-css');

      include SETTLEMENT_CALCULATOR_PATH . 'src/Views/Settlement_Calculator.php';

    }

  }

 ?>
