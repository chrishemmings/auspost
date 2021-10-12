# ChrisHemmings\AusPost\AccountApi

All URIs are relative to *https://digitalapi.auspost.com.au/test/shipping/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountNumberGet**](AccountApi.md#accountsAccountNumberGet) | **GET** /accounts/{account_number} | Fetch account information
[**addressGet**](AccountApi.md#addressGet) | **GET** /address | Validate Suburb


# **accountsAccountNumberGet**
> \ChrisHemmings\AusPost\Client\Model\AccountInformation accountsAccountNumberGet($account_number)

Fetch account information

This service retrieves information regarding the requestor’s charge account and the postage products that the charge account is able to use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: CustomerAccount
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKey('Account-Number', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Account-Number', 'Bearer');

$apiInstance = new ChrisHemmings\AusPost\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = "account_number_example"; // string | Numeric id of the charge account to query. Note this is a parameter to the request in addition to the account-number header field.

try {
    $result = $apiInstance->accountsAccountNumberGet($account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsAccountNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_number** | **string**| Numeric id of the charge account to query. Note this is a parameter to the request in addition to the account-number header field. |

### Return type

[**\ChrisHemmings\AusPost\Client\Model\AccountInformation**](../Model/AccountInformation.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [CustomerAccount](../../README.md#CustomerAccount)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressGet**
> \ChrisHemmings\AusPost\Client\Model\ValidateSuburbResponse addressGet($suburb, $state, $postcode)

Validate Suburb

This service validates a suburb, state, and postcode combination for an Australian postal address and returns the valid suburbs for the given state and postcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: CustomerAccount
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKey('Account-Number', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Account-Number', 'Bearer');

$apiInstance = new ChrisHemmings\AusPost\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suburb = "suburb_example"; // string | Suburb.
$state = "state_example"; // string | State.
$postcode = "postcode_example"; // string | Postcode.

try {
    $result = $apiInstance->addressGet($suburb, $state, $postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->addressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **suburb** | **string**| Suburb. |
 **state** | **string**| State. |
 **postcode** | **string**| Postcode. |

### Return type

[**\ChrisHemmings\AusPost\Client\Model\ValidateSuburbResponse**](../Model/ValidateSuburbResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [CustomerAccount](../../README.md#CustomerAccount)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

