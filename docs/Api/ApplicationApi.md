# Boostapp\ApplicationApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationAdd**](ApplicationApi.md#applicationAdd) | **POST** /application/add | Adding
[**applicationInfo**](ApplicationApi.md#applicationInfo) | **POST** /application/info | Details
[**applicationList**](ApplicationApi.md#applicationList) | **POST** /application/list | Listing
[**applicationProducts**](ApplicationApi.md#applicationProducts) | **POST** /application/products | Products


# **applicationAdd**
> \Boostapp\Model\ApplicationAddResponse applicationAdd($body)

Adding



### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\ApplicationAddRequest**](../Model/ApplicationAddRequest.md)| It is using for adding an application to a Customer or Reseller account. Adding for a Reseller account, value of *identifier* should be empty. |

### Return type

[**\Boostapp\Model\ApplicationAddResponse**](../Model/ApplicationAddResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationInfo**
> \Boostapp\Model\ApplicationInfoResponse applicationInfo($body)

Details



### Example
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
$body = new \Boostapp\Model\ApplicationInfoRequest(); // \Boostapp\Model\ApplicationInfoRequest | It returns summary details of the application that linked to your customer or dealer account. For adding an application to your dealer account, value of * identifier * must be empty.

try {
    $result = $apiInstance->applicationInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\ApplicationInfoRequest**](../Model/ApplicationInfoRequest.md)| It returns summary details of the application that linked to your customer or dealer account. For adding an application to your dealer account, value of * identifier * must be empty. |

### Return type

[**\Boostapp\Model\ApplicationInfoResponse**](../Model/ApplicationInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationList**
> \Boostapp\Model\ApplicationListResponse applicationList($body)

Listing



### Example
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
$body = new \Boostapp\Model\ApplicationListRequest(); // \Boostapp\Model\ApplicationListRequest | It returns summary details of the application that linked to your customer or dealer account. For adding an application to your dealer account, value of * identifier * must be empty.

try {
    $result = $apiInstance->applicationList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\ApplicationListRequest**](../Model/ApplicationListRequest.md)| It returns summary details of the application that linked to your customer or dealer account. For adding an application to your dealer account, value of * identifier * must be empty. |

### Return type

[**\Boostapp\Model\ApplicationListResponse**](../Model/ApplicationListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationProducts**
> \Boostapp\Model\ApplicationProductsResponse applicationProducts($body)

Products



### Example
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
$body = new \Boostapp\Model\ApplicationProductsRequest(); // \Boostapp\Model\ApplicationProductsRequest | It returns summary details of the application that linked to your customer or dealer acount. For adding an application to your dealer account, value of *identifier* must be empty.

try {
    $result = $apiInstance->applicationProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->applicationProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\ApplicationProductsRequest**](../Model/ApplicationProductsRequest.md)| It returns summary details of the application that linked to your customer or dealer acount. For adding an application to your dealer account, value of *identifier* must be empty. |

### Return type

[**\Boostapp\Model\ApplicationProductsResponse**](../Model/ApplicationProductsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

