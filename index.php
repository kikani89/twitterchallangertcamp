
<?php
include "Libs/secret.php";
require_once "Libs/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$request_token = $connection->oauth('oauth/request_token', ['oauth_callback' => OAUTH_CALLBACK]);
$url = $connection->url('oauth/authorize', ['oauth_token' => $request_token['oauth_token']]);
$content = $connection->get("account/verify_credentials");

$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
?>

