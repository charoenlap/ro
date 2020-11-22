<?php 
	class TradeController extends Controller {
	    public function listSell() {
	    	$data = array();
	    	$this->view('trade/list_sell');
	    }
	    public function listBuy() {
	    	$data = array();
	    	$this->view('trade/list_buy');
	    }
	}
?>