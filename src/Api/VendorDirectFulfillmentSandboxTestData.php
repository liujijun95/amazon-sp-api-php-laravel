<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-05-26
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/vendor-direct-fulfillment-sandbox-test-data-api-model/vendorDirectFulfillmentSandboxData_2021-10-28.json
* Source MD5 signature: 7624e5b7c513ce1a1aa70039fb38f51e
*
*
* Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data
* The Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data provides programmatic access to vendor direct fulfillment sandbox test data.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class VendorDirectFulfillmentSandboxTestData extends Client {

  /**
  * Operation generateOrderScenarios
  *
  */
  public function generateOrderScenarios($body = [])
  {
    return $this->send("/vendor/directFulfillment/sandbox/2021-10-28/orders", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function generateOrderScenariosAsync($body = [])
  {
    return $this->sendAsync("/vendor/directFulfillment/sandbox/2021-10-28/orders", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getOrderScenarios
  *
  * @param string $transactionId The transaction identifier returned in the response to the generateOrderScenarios operation.
  *
  */
  public function getOrderScenarios($transactionId)
  {
    return $this->send("/vendor/directFulfillment/sandbox/2021-10-28/transactions/{$transactionId}", [
      'method' => 'GET',
    ]);
  }

  public function getOrderScenariosAsync($transactionId)
  {
    return $this->sendAsync("/vendor/directFulfillment/sandbox/2021-10-28/transactions/{$transactionId}", [
      'method' => 'GET',
    ]);
  }
}
