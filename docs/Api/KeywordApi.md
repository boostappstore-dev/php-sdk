# Boostapp\KeywordApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordCreate**](KeywordApi.md#keywordCreate) | **POST** /keyword/create | Adding
[**keywordDelete**](KeywordApi.md#keywordDelete) | **POST** /keyword/delete | Deleting
[**keywordList**](KeywordApi.md#keywordList) | **POST** /keyword/list | Listing
[**keywordUpdate**](KeywordApi.md#keywordUpdate) | **POST** /keyword/update | Ranking Update


# **keywordCreate**
> \Boostapp\Model\KeywordCreateResponse keywordCreate($body)

Adding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordCreateRequest(); // \Boostapp\Model\KeywordCreateRequest | It performs adding a keyword to the application in your customer or dealer account.

try {
    $result = $apiInstance->keywordCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->keywordCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\KeywordCreateRequest**](../Model/KeywordCreateRequest.md)| It performs adding a keyword to the application in your customer or dealer account. |

### Return type

[**\Boostapp\Model\KeywordCreateResponse**](../Model/KeywordCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keywordDelete**
> \Boostapp\Model\KeywordDeleteResponse keywordDelete($body)

Deleting



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordDeleteRequest(); // \Boostapp\Model\KeywordDeleteRequest | It deletes the keyword of the application in your customer or dealer account.

try {
    $result = $apiInstance->keywordDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->keywordDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\KeywordDeleteRequest**](../Model/KeywordDeleteRequest.md)| It deletes the keyword of the application in your customer or dealer account. |

### Return type

[**\Boostapp\Model\KeywordDeleteResponse**](../Model/KeywordDeleteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keywordList**
> \Boostapp\Model\KeywordListResponse keywordList($body)

Listing



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordListRequest(); // \Boostapp\Model\KeywordListRequest | It returns keywords of the application that linked with your customer or dealer account.

try {
    $result = $apiInstance->keywordList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->keywordList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\KeywordListRequest**](../Model/KeywordListRequest.md)| It returns keywords of the application that linked with your customer or dealer account. |

### Return type

[**\Boostapp\Model\KeywordListResponse**](../Model/KeywordListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keywordUpdate**
> \Boostapp\Model\KeywordUpdateResponse keywordUpdate($body)

Ranking Update



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\KeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\KeywordUpdateRequest(); // \Boostapp\Model\KeywordUpdateRequest | It updates the ranking of the application's keywords in your customer or dealer account. It can update maximum 10 keyword IDs at a time.

try {
    $result = $apiInstance->keywordUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->keywordUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\KeywordUpdateRequest**](../Model/KeywordUpdateRequest.md)| It updates the ranking of the application&#39;s keywords in your customer or dealer account. It can update maximum 10 keyword IDs at a time. |

### Return type

[**\Boostapp\Model\KeywordUpdateResponse**](../Model/KeywordUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

