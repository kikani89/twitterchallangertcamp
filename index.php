<?php 
require_once ("Libs/vendor/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$access_token="2689143570-YNTHU4sWlBwHhyJVcekJKxlfjgRmn1Kx1Tp4hUC";
$access_token_secret="y07VwNv7RdYvWKWAZ6qWOegknZ9uTs6F2u8qZwe4txbW6";
$connection = new TwitterOAuth("BVWfeJz0CjFhnQlrNJJ2U8cbX", "cJPdzuPqJUJcv7KOlmB4JuA0EMO2ason0ga9e0GgAlars0KFfs", $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
$url = $twitterObj->getAuthorizationUrl();
echo $url;
?>