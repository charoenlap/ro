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
	    	$tokenMetadata = array();
	    	$user_id = '';
	    	echo "Connect fb process.<br>";
	    	// Facebook\FacebookSession::setDefaultApplication(app_id, app_secret);
	    	// $helper = new Facebook\FacebookRedirectLoginHelper(redirect_url);
	    	// $session = $helper->getSessionFromRedirect();
	    	// $_SESSION['facebook_access_token'] = $session->getToken();

			$fb = new Facebook\Facebook([
			  'app_id' => app_id,
			  'app_secret' => app_secret,
			  'default_graph_version' => default_graph_version,
			  ]);
			// $user = $fb->getOAuth2Client();
			// var_dump($user);
			$helper = $fb->getRedirectLoginHelper();
			$_SESSION['FBRLH_state']=$_GET['state'];


			try {
			  $accessToken = $helper->getAccessToken(redirect_url);
			} catch(Facebook\Exception\ResponseException $e) {
			  // When Graph returns an error
			  echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} catch(Facebook\Exception\SDKException $e) {
			  // When validation fails or other local issues
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}

			if (! isset($accessToken)) {
			  if ($helper->getError()) {
			    header('HTTP/1.0 401 Unauthorized');
			    echo "Error: " . $helper->getError() . "\n";
			    echo "Error Code: " . $helper->getErrorCode() . "\n";
			    echo "Error Reason: " . $helper->getErrorReason() . "\n";
			    echo "Error Description: " . $helper->getErrorDescription() . "\n";
			  } else {
			    header('HTTP/1.0 400 Bad Request');
			    echo 'Bad request';
			  }
			  exit;
			}

			// Logged in
			// echo '<h3>Access Token</h3>';
			// var_dump($accessToken->getValue());

			// The OAuth 2.0 client handler helps us manage access tokens
			$oAuth2Client = $fb->getOAuth2Client();

			// Get the access token metadata from /debug_token
			$tokenMetadata = $oAuth2Client->debugToken($accessToken);
			// echo '<h3>Metadata</h3>';
			// var_dump($tokenMetadata);

			// Validation (these will throw FacebookSDKException's when they fail)
			$tokenMetadata->validateAppId(app_id);
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

			  // echo '<h3>Long-lived</h3>';
			  // var_dump($accessToken->getValue());
			}

			$_SESSION['fb_access_token'] = (string) $accessToken;
			$accessToken = $accessToken->getValue();
			// var_dump($accessToken);
			// if(!empty($_SESSION['fb_access_token'])){
			$res = $fb->get('/me?fields=name,id,email', $accessToken);
			$result_fb = $res->getDecodedBody();
			// var_dump($result_fb);
			$res_img_profile = $fb->get('/me/picture', $accessToken);
			$result_fb_img_profile = $res->getDecodedBody();

			$data = array(
				'name'		=> $result_fb['name'],
				'id'		=> $result_fb['id'],
				'email'		=> $result_fb['email'],
				'picture'	=> $result_fb_img_profile
			);
			// 100006762066686
			// var_dump($data);
			// var_dump($res);
			// echo $res->getDecodedBody()->getValue();
			// var_dump();
			// var_dump($res->decodedBody);
			// $result = (array)$res;
			// echo "<pre>";
			// var_dump($result['decodedBody']);
			// echo "</pre>";
			// }
			// if(isset($tokenMetadata['user_id'])){
			// $user_id = $tokenMetadata['user_id'];
			// }

			// User is logged in with a long-lived access token.
			// You can redirect them to a members-only page.
			//header('Location: https://example.com/members.php');
	    }
	}
?>