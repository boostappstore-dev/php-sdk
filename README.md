# BoostApp.Store Api PHP-SDK

- API version: 1.0.0
- Package version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Boostapp/Boostapp.git"
    }
  ],
  "require": {
    "Boostapp/Boostapp": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\ApplicationAddRequest(); // \Boostapp\Model\ApplicationAddRequest | It is using for adding an application to a Customer or Reseller account. Adding for a Reseller account, value of *identifier* should be empty.

try {
    $result = $apiInstance->applicationAdd($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationAdd: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.boostapp.store/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationApi* | [**applicationAdd**](docs/Api/ApplicationApi.md#applicationadd) | **POST** /application/add | Adding
*ApplicationApi* | [**applicationInfo**](docs/Api/ApplicationApi.md#applicationinfo) | **POST** /application/info | Details
*ApplicationApi* | [**applicationList**](docs/Api/ApplicationApi.md#applicationlist) | **POST** /application/list | Listing
*ApplicationApi* | [**applicationProducts**](docs/Api/ApplicationApi.md#applicationproducts) | **POST** /application/products | Products
*CampaignApi* | [**campaignCreate**](docs/Api/CampaignApi.md#campaigncreate) | **POST** /campaign/create | Creating
*CampaignApi* | [**campaignDetails**](docs/Api/CampaignApi.md#campaigndetails) | **POST** /campaign/details | Details
*CampaignApi* | [**campaignList**](docs/Api/CampaignApi.md#campaignlist) | **POST** /campaign/list | Listing
*CampaignApi* | [**campaignStop**](docs/Api/CampaignApi.md#campaignstop) | **POST** /campaign/stop | Stopping
*CommentApi* | [**commentCheck**](docs/Api/CommentApi.md#commentcheck) | **POST** /comment/check | Filter Comments
*CommentApi* | [**commentList**](docs/Api/CommentApi.md#commentlist) | **POST** /comment/list | Get Comment
*CustomerApi* | [**customerCreate**](docs/Api/CustomerApi.md#customercreate) | **POST** /customer/create | Adding
*CustomerApi* | [**customerInfo**](docs/Api/CustomerApi.md#customerinfo) | **POST** /customer/info | Customer Informations
*CustomerApi* | [**customerList**](docs/Api/CustomerApi.md#customerlist) | **POST** /customer/list | Customer List
*KeywordApi* | [**keywordCreate**](docs/Api/KeywordApi.md#keywordcreate) | **POST** /keyword/create | Adding
*KeywordApi* | [**keywordDelete**](docs/Api/KeywordApi.md#keyworddelete) | **POST** /keyword/delete | Deleting
*KeywordApi* | [**keywordList**](docs/Api/KeywordApi.md#keywordlist) | **POST** /keyword/list | Listing
*KeywordApi* | [**keywordUpdate**](docs/Api/KeywordApi.md#keywordupdate) | **POST** /keyword/update | Ranking Update
*PurchaseApi* | [**purchaseList**](docs/Api/PurchaseApi.md#purchaselist) | **POST** /purchase/logs | Purchasing and Refunding History
*UserApi* | [**userInfo**](docs/Api/UserApi.md#userinfo) | **POST** /user/info | Dealer Account Details


## Documentation For Models

 - [ApplicationAddRequest](docs/Model/ApplicationAddRequest.md)
 - [ApplicationAddResponse](docs/Model/ApplicationAddResponse.md)
 - [ApplicationInfo](docs/Model/ApplicationInfo.md)
 - [ApplicationInfoRequest](docs/Model/ApplicationInfoRequest.md)
 - [ApplicationInfoResponse](docs/Model/ApplicationInfoResponse.md)
 - [ApplicationListRequest](docs/Model/ApplicationListRequest.md)
 - [ApplicationListResponse](docs/Model/ApplicationListResponse.md)
 - [ApplicationProductsRequest](docs/Model/ApplicationProductsRequest.md)
 - [ApplicationProductsResponse](docs/Model/ApplicationProductsResponse.md)
 - [ApplicationRatings](docs/Model/ApplicationRatings.md)
 - [CampaignCreateInfo](docs/Model/CampaignCreateInfo.md)
 - [CampaignCreateRequest](docs/Model/CampaignCreateRequest.md)
 - [CampaignCreateResponse](docs/Model/CampaignCreateResponse.md)
 - [CampaignCreateResponseDetails](docs/Model/CampaignCreateResponseDetails.md)
 - [CampaignDay](docs/Model/CampaignDay.md)
 - [CampaignDetails](docs/Model/CampaignDetails.md)
 - [CampaignDetailsRequest](docs/Model/CampaignDetailsRequest.md)
 - [CampaignDetailsResponse](docs/Model/CampaignDetailsResponse.md)
 - [CampaignDetailsResponseDetails](docs/Model/CampaignDetailsResponseDetails.md)
 - [CampaignDetailsRow](docs/Model/CampaignDetailsRow.md)
 - [CampaignListRequest](docs/Model/CampaignListRequest.md)
 - [CampaignListResponse](docs/Model/CampaignListResponse.md)
 - [CampaignRow](docs/Model/CampaignRow.md)
 - [CampaignStatus](docs/Model/CampaignStatus.md)
 - [CampaignStopRequest](docs/Model/CampaignStopRequest.md)
 - [CampaignStopResponse](docs/Model/CampaignStopResponse.md)
 - [CampaignSummary](docs/Model/CampaignSummary.md)
 - [CommentCheckRequest](docs/Model/CommentCheckRequest.md)
 - [CommentCheckResponse](docs/Model/CommentCheckResponse.md)
 - [CommentListRequest](docs/Model/CommentListRequest.md)
 - [CommentListResponse](docs/Model/CommentListResponse.md)
 - [Country](docs/Model/Country.md)
 - [CustomerCreateRequest](docs/Model/CustomerCreateRequest.md)
 - [CustomerCreateResponse](docs/Model/CustomerCreateResponse.md)
 - [CustomerInfo](docs/Model/CustomerInfo.md)
 - [CustomerInfoRequest](docs/Model/CustomerInfoRequest.md)
 - [CustomerInfoResponse](docs/Model/CustomerInfoResponse.md)
 - [CustomerListRequest](docs/Model/CustomerListRequest.md)
 - [CustomerListResponse](docs/Model/CustomerListResponse.md)
 - [CustomerSummary](docs/Model/CustomerSummary.md)
 - [DeliveryType](docs/Model/DeliveryType.md)
 - [InstallFrequency](docs/Model/InstallFrequency.md)
 - [KeywordCreateRequest](docs/Model/KeywordCreateRequest.md)
 - [KeywordCreateResponse](docs/Model/KeywordCreateResponse.md)
 - [KeywordDeleteRequest](docs/Model/KeywordDeleteRequest.md)
 - [KeywordDeleteResponse](docs/Model/KeywordDeleteResponse.md)
 - [KeywordInfo](docs/Model/KeywordInfo.md)
 - [KeywordInfoTimeLine](docs/Model/KeywordInfoTimeLine.md)
 - [KeywordListRequest](docs/Model/KeywordListRequest.md)
 - [KeywordListResponse](docs/Model/KeywordListResponse.md)
 - [KeywordUpdateRequest](docs/Model/KeywordUpdateRequest.md)
 - [KeywordUpdateResponse](docs/Model/KeywordUpdateResponse.md)
 - [Language](docs/Model/Language.md)
 - [PriceInfo](docs/Model/PriceInfo.md)
 - [ProductInfo](docs/Model/ProductInfo.md)
 - [ProductPrice](docs/Model/ProductPrice.md)
 - [ProductsDictionary](docs/Model/ProductsDictionary.md)
 - [PurchaseLog](docs/Model/PurchaseLog.md)
 - [PurchaseLogType](docs/Model/PurchaseLogType.md)
 - [PurchaseLogsRequest](docs/Model/PurchaseLogsRequest.md)
 - [PurchaseLogsResponse](docs/Model/PurchaseLogsResponse.md)
 - [UserInfoRequest](docs/Model/UserInfoRequest.md)
 - [UserInfoResponse](docs/Model/UserInfoResponse.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header


## Author

BoostApp.Store

