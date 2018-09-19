<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '530454587374740',
  'app_secret' => 'd306f8bd15cbb826c2be5656195b6225',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);

$fb->setDefaultAccessToken('EAAHichUZCZCJQBABR4YohsM0088jMsYgNMSjRdZC0wIGukRV9wRdiPiJeFtjfdBOx35Ye87lpfYVZA5NJsH4oxKtodSdEj4ZCRPxZBvYG5gXqmKsGqjR345KZCTPt7XL7crdN9ZACEMe9ZBqhjQrKN9u8JYPzIqqAQbfG9XIjhCyJOgZAKZATZCARcMdzQcOvLST2BoAKKjLEGsjHwZDZD');

$a_post = array (
      'url' => 'http://bgtorrentz.net/wp-content/themes/bgtorrentz/images/bg1.jpg',
      'caption' => 'test pic'
    );
try {
 // $response = $fb->get('/me');
 $response = $fb->post('/me/photos',$a_post);  // post to page
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
