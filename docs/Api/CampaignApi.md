# Boostapp\CampaignApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCreate**](CampaignApi.md#campaignCreate) | **POST** /campaign/create | Creating
[**campaignDetails**](CampaignApi.md#campaignDetails) | **POST** /campaign/details | Details
[**campaignList**](CampaignApi.md#campaignList) | **POST** /campaign/list | Listing
[**campaignStop**](CampaignApi.md#campaignStop) | **POST** /campaign/stop | Stopping


# **campaignCreate**
> \Boostapp\Model\CampaignCreateResponse campaignCreate($body)

Creating



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignCreateRequest(); // \Boostapp\Model\CampaignCreateRequest | It performs creating a campaign process for a customer or dealer application.

try {
    $result = $apiInstance->campaignCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CampaignCreateRequest**](../Model/CampaignCreateRequest.md)| It performs creating a campaign process for a customer or dealer application. |

### Return type

[**\Boostapp\Model\CampaignCreateResponse**](../Model/CampaignCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDetails**
> \Boostapp\Model\CampaignDetailsResponse campaignDetails($body)

Details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignDetailsRequest(); // \Boostapp\Model\CampaignDetailsRequest | It returns details of the campaign in the customer or dealer application.

try {
    $result = $apiInstance->campaignDetails($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CampaignDetailsRequest**](../Model/CampaignDetailsRequest.md)| It returns details of the campaign in the customer or dealer application. |

### Return type

[**\Boostapp\Model\CampaignDetailsResponse**](../Model/CampaignDetailsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignList**
> \Boostapp\Model\CampaignListResponse campaignList($body)

Listing



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignListRequest(); // \Boostapp\Model\CampaignListRequest | It returns details of campaigns that linked to your customer or dealer application.

try {
    $result = $apiInstance->campaignList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CampaignListRequest**](../Model/CampaignListRequest.md)| It returns details of campaigns that linked to your customer or dealer application. |

### Return type

[**\Boostapp\Model\CampaignListResponse**](../Model/CampaignListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignStop**
> \Boostapp\Model\CampaignStopResponse campaignStop($body)

Stopping



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CampaignStopRequest(); // \Boostapp\Model\CampaignStopRequest | It performs stopping a campaign process that linked to a customer or dealer account. It refunds the balance of incomplete process to the dealer account. Stopping process may take several minutes to perform.

try {
    $result = $apiInstance->campaignStop($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CampaignStopRequest**](../Model/CampaignStopRequest.md)| It performs stopping a campaign process that linked to a customer or dealer account. It refunds the balance of incomplete process to the dealer account. Stopping process may take several minutes to perform. |

### Return type

[**\Boostapp\Model\CampaignStopResponse**](../Model/CampaignStopResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

