<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '530454587374740',
  'app_secret' => 'd306f8bd15cbb826c2be5656195b6225',
  'default_graph_version' => 'v3.1',
  //'default_access_token' => '{access-token}', // optional
]);

$fb->setDefaultAccessToken('EAAHichUZCZCJQBAAs5ppqFWw2K1nUanQSBHycGrzTQ6CIFaz1W3dpCdl1vhuGcWhafv9yARE0w80l66RbKpXjw31bfT3DfmlFc5xgfoqIw6CvLDZBP9SpehxcerNCozNhDoWwUOZA5R9rQHZAMsMvQVCXkuQLgZBylITq2rvXPsFZBMW5rfbMrJkqRTuwFGohwZD');

$a_post = array(
'message' => "my test post 2"
);
try {
 // $response = $fb->get('/me');
 $response = $fb->post('/me/feed',$a_post);  // post to page
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
