<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '229194961285252',
  'app_secret' => 'b54ce75c34a6d71843a9b88f2734f610',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);

echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$dir = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
 $dir .= $parts[$i] . "/";
}
echo $dir;

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$url = $helper->getLoginUrl('https://api-messager.herokuapp.com/next.php', $permissions);

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
