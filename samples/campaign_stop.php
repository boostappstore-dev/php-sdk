<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\CampaignApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignStopRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setCampaignId("CAMPAIGN_ID_HERE");
try {
    $result = $apiInstance->campaignStop($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
