<?php 
	require_once(DOCUMENT_ROOT.'system/lib/vendor/facebook/graph-sdk/src/Facebook/autoload.php');
	use Facebook\FacebookSession;
	use Facebook\FacebookRequest;
	use Facebook\GraphUser;
	use Facebook\FacebookRedirectLoginHelper;
	class UserController extends Controller {
	    public function login() {
	    	$data = array();
	    	$fb = new Facebook\Facebook([
			  'app_id' => app_id,
			  'app_secret' => app_secret,
			  'default_graph_version' => default_graph_version,
			]);
			$permissions = array();
			// echo 'app_id: '.app_id.'<br>';
			// echo 'app_secret: '.app_secret.'<br>';
			// echo 'default_graph_version: '.default_graph_version.'<br>';
			$helper = $fb->getRedirectLoginHelper();

			// $permissions = ['email']; // optional

			$data['loginUrl'] = $helper->getLoginUrl('https://www.ro.fsoftpro.com/fbCallback', $permissions);
	    	$this->view('user/login',$data);
	    }
	}
?>