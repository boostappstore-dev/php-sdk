<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\KeywordApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordDeleteRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setPackageName("PACKAGE_NAME_HERE");
$body->setKeywordId("3025");
try {
    $result = $apiInstance->keywordDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
