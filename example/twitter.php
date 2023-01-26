<?php

define("CONSUMER_KEY", "apikey");
define("CONSUMER_SECRET", "apikeysecret");
define("ACCESS_TOKEN", "accesstoken");
define("ACCESS_TOKEN_SECRET", "secrettoken");

require __DIR__ . "/../vendor/autoload.php";

use KitsuneCode\Twitter\TwitterOAuth;

$twitter = new TwitterOAuth(consumerKey: CONSUMER_KEY, consumerSecret: CONSUMER_SECRET, oauthToken: ACCESS_TOKEN, oauthTokenSecret: ACCESS_TOKEN_SECRET);
$twitter->setApiVersion(2);
$res = $twitter->post(path: 'tweets', parameters: ['text' => 'Último teste antes de enviar'], json: true);

print_r($res);