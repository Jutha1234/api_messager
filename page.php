<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '2183115115305945',
  'app_secret' => '63cb89126f2bf4c20a3b55364920912e',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);

$fb->setDefaultAccessToken('EAADQc5xAcIQBACrblsmqo6pio1etqvYhFWenxDH2uIiQpQXgwSgJZBMCU4ZCbAI1QOWW9fFy3b6byXYV07VS5lurRxlihvvZBB6rfvyX2YhPDa4sKwGEZAWEUEqqZBO7wHq7RaOugwTrXnZAiEpQKXKiBKffwwNYOpHixtmyZC6MqOiqbfX2WLGRrsucffzvqMZD');

$a_post = array(
    'message' => "My test post"
);

try {
  $response = $fb->get('/me');
  //$response = $fb->post('/me/feed', $a_post); // post to page
} catch(Exception $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getDecodedBody();
echo 'Logged in as ' . $me['name'].'<br>';
var_dump($me);

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
  </head>
  <body>
    
  </body>
</html>
