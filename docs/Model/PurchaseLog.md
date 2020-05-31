# PurchaseLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Purchasing record ID | [optional] 
**customer_identifier** | **string** | Customer identity, it returns empty for purchases from reseller account | [optional] 
**package_name** | **string** | Application package name | [optional] 
**campaign_id** | **int** | Campaign identity | [optional] 
**country_id** | [**\Boostapp\Model\Country**](Country.md) |  | [optional] 
**log_type** | [**\Boostapp\Model\PurchaseLogType**](PurchaseLogType.md) |  | [optional] 
**package_installs** | **int** | The number of install with package name | [optional] 
**keyword_installs** | **int** | The number of install with keyword | [optional] 
**reviews** | **int** | The number of reviews | [optional] 
**package_install_price** | **double** | Price for per install with package name (USD) | [optional] 
**keyword_install_price** | **double** | Price for per install with keyword (USD) | [optional] 
**review_price** | **double** | Price for per review (USD) | [optional] 
**total_package_install_price** | **double** | Spent/Refunded amount of install with package name (USD) | [optional] 
**total_keyword_install_price** | **double** | Spent/Refunded amount of install with keyword (USD) | [optional] 
**total_review_price** | **double** | Spent/Refunded amount of reviews (USD) | [optional] 
**old_balance** | **double** | Balance amount before the operation (USD) | [optional] 
**new_balance** | **double** | Balance amount after the operation (USD) | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Operation time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


