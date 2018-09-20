<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

echo "require_once __DIR__ . '/vendor/autoload.php'";


$fb = new \Facebook\Facebook([
  'app_id' => '2183115115305945',
  'app_secret' => '63cb89126f2bf4c20a3b55364920912e',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => 'EAAfBiBjzm9kBAOw4A4L18GAFv3ZAaSV5nwtwZBQzhXBT30FKzLn2a0JVqUi7F6DTzuLItZBL97zIHyR9JD2ZBNZCchUf61yrovuLyJkhBxPPvK3VLOoKKXcK6IwZBgHwAvfnAvM9eZAwZC6bkZAWlvaJX49gYZChrDvSEacqm68cKIQQZDZD', // optional
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
