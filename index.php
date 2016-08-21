
<?php
include "Libs/secret.php";
require_once "Libs/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
?>

