<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\KeywordApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordUpdateRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setKeywordIds(array("KEYWORD_IDS"));
$body->setPackageName("PACKAGE_NAME_HERE");
try {
    $result = $apiInstance->keywordUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
