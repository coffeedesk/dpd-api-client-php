<?php

namespace DpdApi\Service\Model;

class serviceCODOpenUMLFeV1
{

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var serviceCurrencyEnum $currency
     */
    protected $currency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \DpdApi\Service\Model\serviceCODOpenUMLFeV1
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return serviceCurrencyEnum
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param serviceCurrencyEnum $currency
     * @return \DpdApi\Service\Model\serviceCODOpenUMLFeV1
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

}
