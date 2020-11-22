<?php 
	class InformationController extends Controller {
	    public function privacyPolicy($data=array()) {
	    	$this->view('privacyPolicy');
	    }
	    public function tos($data=array()) {
	    	$this->view('TOS');
	    }
?>