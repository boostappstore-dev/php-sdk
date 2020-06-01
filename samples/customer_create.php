<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\CustomerApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CustomerCreateRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE");
try {
    $result = $apiInstance->customerCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
