# ChrisHemmings\AusPost\ShipmentApi

All URIs are relative to *https://digitalapi.auspost.com.au/test/shipping/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelsPost**](ShipmentApi.md#labelsPost) | **POST** /labels | Create Labels
[**shipmentsPost**](ShipmentApi.md#shipmentsPost) | **POST** /shipments | Create Domestic Shipments


# **labelsPost**
> \ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse labelsPost($labels)

Create Labels

This service initiates the generation of labels for the requested shipments that have been previously created using the Create Shipments service.

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

$apiInstance = new ChrisHemmings\AusPost\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$labels = new \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest(); // \ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest | Labels to create

try {
    $result = $apiInstance->labelsPost($labels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->labelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labels** | [**\ChrisHemmings\AusPost\Client\Model\CreateLabelsRequest**](../Model/CreateLabelsRequest.md)| Labels to create | [optional]

### Return type

[**\ChrisHemmings\AusPost\Client\Model\CreateLabelsResponse**](../Model/CreateLabelsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [CustomerAccount](../../README.md#CustomerAccount)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPost**
> \ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse shipmentsPost($shipments)

Create Domestic Shipments

This service creates a shipment with items and returns a summary of the pricing for the items.

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

$apiInstance = new ChrisHemmings\AusPost\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipments = new \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest(); // \ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest | Shipments to create

try {
    $result = $apiInstance->shipmentsPost($shipments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipments** | [**\ChrisHemmings\AusPost\Client\Model\CreateShipmentsRequest**](../Model/CreateShipmentsRequest.md)| Shipments to create | [optional]

### Return type

[**\ChrisHemmings\AusPost\Client\Model\CreateShipmentsResponse**](../Model/CreateShipmentsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [CustomerAccount](../../README.md#CustomerAccount)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

