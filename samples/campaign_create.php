<?php
require_once('../vendor/autoload.php');
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'API_KEY_HERE');
$apiInstance = new Boostapp\Api\CampaignApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignCreateRequest();
$body->setIdentifier("CUSTOMER_IDENTIFIER_HERE"); /* Blank for reseller account */
$body->setPackageName("PACKAGE_NAME_HERE");

$body->setReviews(array("REVIEW_COMMENTS_HERE"));
$body->setOneStar(0);
$body->setTwoStar(0);
$body->setThreeStar(0);
$body->setFourStar(0);
$body->setFiveStar(100);

$body->setDeliveryType(\Boostapp\Model\DeliveryType::SPREAD_IN_DAY);
$body->setCountryId(\Boostapp\Model\Country::US);

$firstDay = new \Boostapp\Model\CampaignDay();

$tempRows = array();
/* First day, first row */
$tempRow = new \Boostapp\Model\CampaignRow();
$tempRow->setFrequency(\Boostapp\Model\InstallFrequency::LINEAR);
$tempRow->setInstallCount(10);
$tempRow->setReviewCount(5);
$tempRow->setReviewDelay(0);
$tempRow->setSearchBy(-1);
array_push($tempRows,$tempRow);


$firstDay->setRows($tempRows);

/* Days must start "1" (string), "1" mean is today, can be up to "7" */
$days["1"] = $firstDay;

$secondDay = new \Boostapp\Model\CampaignDay();
$tempRows = array();
/* First day, first row */
$tempRow = new \Boostapp\Model\CampaignRow();
$tempRow->setFrequency(\Boostapp\Model\InstallFrequency::RISING);
$tempRow->setInstallCount(10);
$tempRow->setReviewCount(5);
$tempRow->setReviewDelay(0);
$tempRow->setSearchBy(-1);
array_push($tempRows,$tempRow);

$secondDay->setRows($tempRows);
$days["2"] = $secondDay;




$body->setDays($days);
try {
    $result = $apiInstance->campaignCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
