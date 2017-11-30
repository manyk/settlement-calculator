<?php

  namespace SettlementCalculator\Library;

  class Shortcodes {

    public function __construct(){
      /////////change test

      add_shortcode('settlement_calculator',array($this,'settlement_calculator'));

    }

    public function settlement_calculator(){
      include SETTLEMENT_CALCULATOR_PATH . 'src/Views/Settlement_Calculator.php';
    }




  }

 ?>
