<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\UserInfoRequest();
try {
    $result = $apiInstance->userInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
