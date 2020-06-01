<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\KeywordApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordCreateRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setCountryId(\Boostapp\Model\Country::US);
$body->setPackageName("PACKAGE_NAME_HERE");
$body->setKeywords(array("KEYWORDS_HERE"));
try {
    $result = $apiInstance->keywordCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
