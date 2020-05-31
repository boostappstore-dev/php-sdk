# Boostapp\UserApi

All URIs are relative to *https://api.boostapp.store/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userInfo**](UserApi.md#userInfo) | **POST** /user/info | Dealer Account Details


# **userInfo**
> \Boostapp\Model\UserInfoResponse userInfo($body)

Dealer Account Details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Boostapp\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boostapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Boostapp\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Boostapp\Model\UserInfoRequest(); // \Boostapp\Model\UserInfoRequest | It returns details of your dealer account such as current balance, pricing, etc. Current balance, pricing...

try {
    $result = $apiInstance->userInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Boostapp\Model\UserInfoRequest**](../Model/UserInfoRequest.md)| It returns details of your dealer account such as current balance, pricing, etc. Current balance, pricing... |

### Return type

[**\Boostapp\Model\UserInfoResponse**](../Model/UserInfoResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

