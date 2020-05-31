# Boostapp\CustomerApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCreate**](CustomerApi.md#customerCreate) | **POST** /customer/create | Adding
[**customerInfo**](CustomerApi.md#customerInfo) | **POST** /customer/info | Customer Informations
[**customerList**](CustomerApi.md#customerList) | **POST** /customer/list | Customer List


# **customerCreate**
> \Boostapp\Model\CustomerCreateResponse customerCreate($body)

Adding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CustomerCreateRequest(); // \Boostapp\Model\CustomerCreateRequest | It identifies new customer to your BoostApp dealer account. So, you can control each your customers independently.

try {
    $result = $apiInstance->customerCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CustomerCreateRequest**](../Model/CustomerCreateRequest.md)| It identifies new customer to your BoostApp dealer account. So, you can control each your customers independently. |

### Return type

[**\Boostapp\Model\CustomerCreateResponse**](../Model/CustomerCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerInfo**
> \Boostapp\Model\CustomerInfoResponse customerInfo($body)

Customer Informations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CustomerInfoRequest(); // \Boostapp\Model\CustomerInfoRequest | It returns the information of the customer in your dealer account.

try {
    $result = $apiInstance->customerInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CustomerInfoRequest**](../Model/CustomerInfoRequest.md)| It returns the information of the customer in your dealer account. |

### Return type

[**\Boostapp\Model\CustomerInfoResponse**](../Model/CustomerInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerList**
> \Boostapp\Model\CustomerListResponse customerList($body)

Customer List



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CustomerListRequest(); // \Boostapp\Model\CustomerListRequest | It return the list of the your customers in your dealer account.

try {
    $result = $apiInstance->customerList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CustomerListRequest**](../Model/CustomerListRequest.md)| It return the list of the your customers in your dealer account. |

### Return type

[**\Boostapp\Model\CustomerListResponse**](../Model/CustomerListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

