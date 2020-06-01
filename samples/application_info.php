<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\ApplicationApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\ApplicationInfoRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setPackageName("PACKAGE_NAME_HERE");

try {
    $result = $apiInstance->applicationInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
