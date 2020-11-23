<?php 
	require_once(convert_private_to_public(DOCUMENT_ROOT).'system/lib/vendor/facebook/graph-sdk/src/Facebook/autoload.php');
	// use Facebook\FacebookSession;
	// use Facebook\FacebookRequest;
	// use Facebook\GraphUser;
	// use Facebook\FacebookRedirectLoginHelper;
	class FbController extends Controller {
	    public function login($data=array()) {

	    }
	    public function fbCallback($data=array()){
	    	echo "Connect fb.<br>";
	    	// Facebook\FacebookSession::setDefaultApplication(app_id, app_secret);
	    	// $helper = new Facebook\FacebookRedirectLoginHelper(redirect_url);
	    	// $session = $helper->getSessionFromRedirect();
	    	// $_SESSION['facebook_access_token'] = $session->getToken();

			$fb = new Facebook\Facebook([
			  'app_id' => app_id,
			  'app_secret' => app_secret,
			  'default_graph_version' => default_graph_version,
			]);

			$helper = $fb->getRedirectLoginHelper();
			$accessToken = $helper->getAccessToken();
			// var_dump($helper);
			try {
			  $accessToken = $helper->getAccessToken();
			  echo "<br>";
			  var_dump($accessToken);

			} catch(Facebook\Exceptions\FacebookResponseException $e) {
			  // When Graph returns an error
			  echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
			  // When validation fails or other local issues
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}
			// Logged in
			echo '<h3>Access Token</h3>';
			var_dump($accessToken->getValue());

			// The OAuth 2.0 client handler helps us manage access tokens
			$oAuth2Client = $fb->getOAuth2Client();

			// Get the access token metadata from /debug_token
			$tokenMetadata = $oAuth2Client->debugToken($accessToken);
			echo '<h3>Metadata</h3>';
			var_dump($tokenMetadata);

			// Validation (these will throw FacebookSDKException's when they fail)
			$tokenMetadata->validateAppId($config['app_id']);
			// If you know the user ID this access token belongs to, you can validate it here
			//$tokenMetadata->validateUserId('123');
			$tokenMetadata->validateExpiration();

			if (! $accessToken->isLongLived()) {
			  // Exchanges a short-lived access token for a long-lived one
			  try {
			    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
			  } catch (Facebook\Exception\SDKException $e) {
			    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
			    exit;
			  }

			  echo '<h3>Long-lived</h3>';
			  var_dump($accessToken->getValue());
			}

			$_SESSION['fb_access_token'] = (string) $accessToken;

			// echo 'accessToken: '.$accessToken.'<br>';
			// if (isset($accessToken)) {
			//   // Logged in!
			//   $_SESSION['facebook_access_token'] = (string) $accessToken;

			//   // Now you can redirect to another page and use the
			//   // access token from $_SESSION['facebook_access_token']

			//   $response = $fb->get('/me?fields=id,name,gender,email,link', $accessToken);

			//   $user = $response->getGraphUser();
			//   echo'<pre>';
			//   print_r($user);
			//   echo'</pre>';

			//   echo 'ID: ' . $user['id'];
			//   echo 'Name: ' . $user['name'];
			//   echo 'Gener: ' . $user['gener'];
			//   echo 'Email: ' . $user['email'];
			//   echo 'Link: ' . $user['link'];

			// }
	    }
	}
?>