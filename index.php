<?php
session_start();
	
	//Include Twitter OAuth library made by Jaisen Mathai, thanks for it!
	include 'Libs/EpiCurl.php';
	include 'Libs/EpiOAuth.php';
	include 'Libs/EpiTwitter.php';
	include 'Libs/secret.php';
	//Following code is to connect and authenticate with twitter
	$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);
	$oauth_token = $_GET['oauth_token'];
	//If there is no token then display sign in link
	if($oauth_token == '')
	{
		//Get auth token and build Sign In url.
		$url = $twitterObj->getAuthorizationUrl();
        echo "helloinside";
header("location : $url");
	}
	//Otherwise if user got token then the to & fro part starts
	else
	{
        echo "hello";
		$twitterObj->setToken($_GET['oauth_token']);
		$token = $twitterObj->getAccessToken();
		$twitterObj->setToken($token->oauth_token, $token->oauth_token_secret);
		$_SESSION['ot'] = $token->oauth_token;
		$_SESSION['ots'] = $token->oauth_token_secret;
		//Get the credentials of user
		$twitterInfo= $twitterObj->get_accountVerify_credentials();
		$twitterInfo->response;
		$username = $twitterInfo->screen_name;
		$profilepic = $twitterInfo->profile_image_url;
		
			//Include tweet page which contains tweet grabbing code
//			include 'tweet.php';
//			echo "Tweet Showcase:";		
//			echo "<div id='divTweetContainer' class='slideshowTweet'>";
//				getTweets($username, 'tweet');
//			echo "</div>";
			
			//Include follower page which contains followers grabbing code
//			include 'follower.php';
//			getFollo($username);
//		echo "</div>";	//Right col div ends
	}
//	echo "</div>";	// Container div ends
?>

