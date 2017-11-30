<?php

namespace SettlementCalculator;
use SettlementCalculator\Library\Shortcodes as Shortcodes;
use SettlementCalculator\Library\Enqueues as Enqueues;


class Settlement_Calculator {

  public function __construct(){
		register_activation_hook( SETTLEMENT_CALCULATOR_PATH.'/'.SETTLEMENT_CALCULATOR_FILE, array($this, 'plugin_activated'));
    register_deactivation_hook( SETTLEMENT_CALCULATOR__PATH.'/'.SETTLEMENT_CALCULATOR_FILE, array($this, 'plugin_deactivated'));
    $this->_init();
	}

	public function plugin_activated(){

	}

	public function plugin_deactivated(){

	}

	protected function _init(){
    new Shortcodes;
    new Enqueues;
	}

}
