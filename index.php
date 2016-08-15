<?php 
require_once ("Libs/vendor/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$access_token="2689143570-YNTHU4sWlBwHhyJVcekJKxlfjgRmn1Kx1Tp4hUC";
$access_token_secret="y07VwNv7RdYvWKWAZ6qWOegknZ9uTs6F2u8qZwe4txbW6";
$consumer_key="BVWfeJz0CjFhnQlrNJJ2U8cbX";

$consumer_secret="cJPdzuPqJUJcv7KOlmB4JuA0EMO2ason0ga9e0GgAlars0KFfs";
$connection = new TwitterOAuth($conumer_key,$consumer_secret , $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);
$url = $twitterObj->getAuthorizationUrl();
echo $url;
?>