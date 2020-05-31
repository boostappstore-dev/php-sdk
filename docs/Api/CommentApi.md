# Boostapp\CommentApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentCheck**](CommentApi.md#commentCheck) | **POST** /comment/check | Filter Comments
[**commentList**](CommentApi.md#commentList) | **POST** /comment/list | Get Comment


# **commentCheck**
> \Boostapp\Model\CommentCheckResponse commentCheck($body)

Filter Comments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CommentCheckRequest(); // \Boostapp\Model\CommentCheckRequest | It filters out previously posted or duplicated comments. It returns comments that have a high success rate.

try {
    $result = $apiInstance->commentCheck($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CommentCheckRequest**](../Model/CommentCheckRequest.md)| It filters out previously posted or duplicated comments. It returns comments that have a high success rate. |

### Return type

[**\Boostapp\Model\CommentCheckResponse**](../Model/CommentCheckResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentList**
> \Boostapp\Model\CommentListResponse commentList($body)

Get Comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\CommentListRequest(); // \Boostapp\Model\CommentListRequest | It returns 5-star reviews of an app on the Google Play.

try {
    $result = $apiInstance->commentList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\CommentListRequest**](../Model/CommentListRequest.md)| It returns 5-star reviews of an app on the Google Play. |

### Return type

[**\Boostapp\Model\CommentListResponse**](../Model/CommentListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

