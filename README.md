# .
Integrating your systems with Australia Post and StarTrack using the Shipping and Tracking APIs enables you to lodge the information we need when sending parcels through our delivery networks.  You can currently use the Shipping and Tracking APIs for...  - Lodgement of parcels – creates an order, including all the shipments and items, and lodges the parcels with Australia Post and StarTrack  - Label printing - prints our most up-to-date labels to improve your operational efficiency  - Getting your contract details - gives all your current account information, including products, contract expiry dates & product features  - Getting your contract pricing - provides an indicative price at checkout to enable the best service to be selected, giving you confidence of cost of lodgement  - Tracking your parcels - allows you to easily surface tracking information on your website for your staff or customers

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.2
- Package version: 1.0.2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/chrishemmings/auspost.git"
    }
  ],
  "require": {
    "chrishemmings/auspost": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

$apiInstance = new ChrisHemmings\AusPost\Client\Api\AccountApi(
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
// Configure HTTP basic authorization: BasicAuth
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: CustomerAccount
$config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKey('Account-Number', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\AusPost\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Account-Number', 'Bearer');

$apiInstance = new ChrisHemmings\AusPost\Client\Api\AccountApi(
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

## Documentation for API Endpoints

All URIs are relative to *https://digitalapi.auspost.com.au/test/shipping/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountsAccountNumberGet**](docs/Api/AccountApi.md#accountsaccountnumberget) | **GET** /accounts/{account_number} | Fetch account information
*AccountApi* | [**addressGet**](docs/Api/AccountApi.md#addressget) | **GET** /address | Validate Suburb
*ShipmentApi* | [**labelsPost**](docs/Api/ShipmentApi.md#labelspost) | **POST** /labels | Create Labels
*ShipmentApi* | [**shipmentsPost**](docs/Api/ShipmentApi.md#shipmentspost) | **POST** /shipments | Create Domestic Shipments

## Documentation For Models

 - [AccountDetails](docs/Model/AccountDetails.md)
 - [AccountInformation](docs/Model/AccountInformation.md)
 - [Address](docs/Model/Address.md)
 - [AddressLine](docs/Model/AddressLine.md)
 - [CreateLabelsRequest](docs/Model/CreateLabelsRequest.md)
 - [CreateLabelsResponse](docs/Model/CreateLabelsResponse.md)
 - [CreateShipmentsRequest](docs/Model/CreateShipmentsRequest.md)
 - [CreateShipmentsResponse](docs/Model/CreateShipmentsResponse.md)
 - [Error](docs/Model/Error.md)
 - [ItemContents](docs/Model/ItemContents.md)
 - [ItemFeatures](docs/Model/ItemFeatures.md)
 - [LabelGroups](docs/Model/LabelGroups.md)
 - [LabelPreference](docs/Model/LabelPreference.md)
 - [LabelShipments](docs/Model/LabelShipments.md)
 - [LabelShipmentsItems](docs/Model/LabelShipmentsItems.md)
 - [LabelsResponseLabels](docs/Model/LabelsResponseLabels.md)
 - [LabelsResponseLabelsLabelProperties](docs/Model/LabelsResponseLabelsLabelProperties.md)
 - [PostageProductContract](docs/Model/PostageProductContract.md)
 - [PostageProductFeatures](docs/Model/PostageProductFeatures.md)
 - [PostageProductOptions](docs/Model/PostageProductOptions.md)
 - [PostageProducts](docs/Model/PostageProducts.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ShipmentFromAddress](docs/Model/ShipmentFromAddress.md)
 - [ShipmentItem](docs/Model/ShipmentItem.md)
 - [ShipmentRequest](docs/Model/ShipmentRequest.md)
 - [ShipmentResponse](docs/Model/ShipmentResponse.md)
 - [ShipmentResponseItems](docs/Model/ShipmentResponseItems.md)
 - [ShipmentResponseItemsItemsummary](docs/Model/ShipmentResponseItemsItemsummary.md)
 - [ShipmentResponseItemsShipmentSummary](docs/Model/ShipmentResponseItemsShipmentSummary.md)
 - [ShipmentResponseItemsTrackingDetails](docs/Model/ShipmentResponseItemsTrackingDetails.md)
 - [ShipmentToAddress](docs/Model/ShipmentToAddress.md)
 - [ValidateSuburbResponse](docs/Model/ValidateSuburbResponse.md)

## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication

## CustomerAccount

- **Type**: API key
- **API key parameter name**: Account-Number
- **Location**: HTTP header


## Author

cwhemmings@gmail.com

