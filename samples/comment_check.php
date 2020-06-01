<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\CommentApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CommentCheckRequest();
$body->setCommentList(array("This is a good comment...","Very fine and challenging game"));
try {
    $result = $apiInstance->commentCheck($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
