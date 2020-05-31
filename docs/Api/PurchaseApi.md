# Boostapp\PurchaseApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseList**](PurchaseApi.md#purchaseList) | **POST** /purchase/logs | Purchasing and Refunding History


# **purchaseList**
> \Boostapp\Model\PurchaseLogsResponse purchaseList($body)

Purchasing and Refunding History



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\PurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\PurchaseLogsRequest(); // \Boostapp\Model\PurchaseLogsRequest | It returns purchasing and refunding history. If the customer ID is not specified, it returns the dealer account mixed with the customer account without filtering.

try {
    $result = $apiInstance->purchaseList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseApi->purchaseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\PurchaseLogsRequest**](../Model/PurchaseLogsRequest.md)| It returns purchasing and refunding history. If the customer ID is not specified, it returns the dealer account mixed with the customer account without filtering. |

### Return type

[**\Boostapp\Model\PurchaseLogsResponse**](../Model/PurchaseLogsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

