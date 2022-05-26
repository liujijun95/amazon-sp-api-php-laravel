<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-05-26
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/tokens-api-model/tokens_2021-03-01.json
* Source MD5 signature: fa6b7c0421bd2cb472004cf6f92a074f
*
*
* Selling Partner API for Tokens 
* The Selling Partner API for Tokens provides a secure way to access a customer's PII (Personally Identifiable Information). You can call the Tokens API to get a Restricted Data Token (RDT) for one or more restricted resources that you specify. The RDT authorizes subsequent calls to restricted operations that correspond to the restricted resources that you specified.

For more information, see the [Tokens API Use Case Guide](doc:tokens-api-use-case-guide).
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class Tokens extends Client {

  /**
  * Operation createRestrictedDataToken
  *
  */
  public function createRestrictedDataToken($body = [])
  {
    return $this->send("/tokens/2021-03-01/restrictedDataToken", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function createRestrictedDataTokenAsync($body = [])
  {
    return $this->sendAsync("/tokens/2021-03-01/restrictedDataToken", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
