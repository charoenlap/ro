<?php 
	require_once(convert_private_to_public(DOCUMENT_ROOT).'system/lib/vendor/facebook/graph-sdk/src/Facebook/autoload.php');
	// use Facebook\FacebookSession;
	// use Facebook\FacebookRequest;
	// use Facebook\GraphUser;
	// use Facebook\FacebookRedirectLoginHelper;
	class UserController extends Controller {
	    public function login() {
	    	// var_dump($_SERVER);
	    	$data = array();
	    	// Facebook\FacebookSession::setDefaultApplication(app_id, app_secret);
	    	$fb = new Facebook\Facebook([
			  'app_id' => app_id,
			  'app_secret' => app_secret,
			  'default_graph_version' => default_graph_version,
			]);
			// $callback = redirect_url;
			// $helper = new Facebook\FacebookRedirectLoginHelper($callback);
			// $data['loginUrl'] = $helper->getLoginUrl($permissions);
			$permissions = array();
			// echo 'app_id: '.app_id.'<br>';
			// echo 'app_secret: '.app_secret.'<br>';
			// echo 'default_graph_version: '.default_graph_version.'<br>';
			$helper = $fb->getRedirectLoginHelper();

			$permissions = ['email'];

			$data['loginUrl'] = $helper->getLoginUrl(redirect_url, $permissions);
	    	$this->view('user/login',$data);
	    }
	}
?>