<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '2183115115305945',
  'app_secret' => '0e5c2f9fd1626689fb67a5df4dead4e2',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);

echo "start ...........";

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
