<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\CommentApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CommentListRequest();
$body->setTarget("PACKAGE_NAME_OR_GOOGLE_PLAY_URL");
$body->setCount(1000);
$body->setLanguageId(\Boostapp\Model\Language::EN);
try {
    $result = $apiInstance->commentList($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
