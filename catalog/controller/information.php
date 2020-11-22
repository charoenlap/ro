<?php 
	class FbController extends Controller {
	    public function privacyPolicy($data=array()) {
	    	$this->view('privacyPolicy');
	    }
	    public function TOS($data=array()) {
	    	$this->view('TOS');
	    }
?>