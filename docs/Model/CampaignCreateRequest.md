# CampaignCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Customer identity, leave empty for adding to your dealer account (Cannot be NULL) | 
**package_name** | **string** | The package name of the application | 
**country_id** | [**\Boostapp\Model\Country**](Country.md) |  | 
**days** | [**map[string,\Boostapp\Model\CampaignDay]**](CampaignDay.md) | It is a dictionary type model where operations are separated day by day. The format is {&#39;The day number&#39;&#x3D;&gt;&#39;content&#39;}.&lt;br&gt;**Important: The value 0 is today, the value 1 is tomorrow. It can take a value between 0 and 6 (inclusive). If we assume today as the 1st day, the value 6 must be defined for the 7th day.&lt;br&gt;There should be no space between days. &lt;br&gt;0, 3, 4 [WRONG]&lt;br&gt;0, 1, 2, 3, 4 [TRUE]** | 
**five_star** | **int** | Five star rating of reviews.&lt;br&gt;Min.: 0 Max.: 100 | 
**four_star** | **int** | Four star rating of reviews.&lt;br&gt;Min.: 0 Max.: 100 | 
**three_star** | **int** | Three star rating of reviews.&lt;br&gt;Min.: 0 Max.: 100 | 
**two_star** | **int** | Two star rating of reviews.&lt;br&gt;Min.: 0 Max.: 100 | 
**one_star** | **int** | One star rating of reviews.&lt;br&gt;Min.: 0 Max.: 100 | 
**delivery_type** | [**\Boostapp\Model\DeliveryType**](DeliveryType.md) |  | 
**reviews** | **string[]** | Array variable where comments are defined. Each item expresses a comment. In the situation of a missing number of reviews, all defined comments are used, and the remaining reviews are sent without comments. If more than one item is entered, it uses as much as it needs. This variable does not increase or decrease the number of reviews to be made. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


