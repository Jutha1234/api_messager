<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

//define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/Facebook');
//require_once __DIR__ . '/Facebook/autoload.php';
//echo __DIR__;
//use Facebook\FacebookRequest;


$app_id = {{your app-id}};
$app_secret = {{your app-secret}};

$fb = new \Facebook\Facebook([
  'app_id' => '229194961285252',
  'app_secret' => 'b54ce75c34a6d71843a9b88f2734f610',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);



$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$url = $helper->getLoginUrl('https://api-messager.herokuapp.com/next.php', $permissions);


echo $url ;

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
  </head>
  <body>
  <a href="<?=$url?>">Login Redirect</a>
  </body>
</html>
