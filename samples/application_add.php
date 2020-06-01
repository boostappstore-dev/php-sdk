<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\ApplicationApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\ApplicationAddRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setTarget("PACKAGE_NAME_OR_GOOGLE_PLAY_URL");

try {
    $result = $apiInstance->applicationAdd($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
