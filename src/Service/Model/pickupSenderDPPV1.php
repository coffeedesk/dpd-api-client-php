<?php

namespace DpdApi\Service\Model;

class pickupSenderDPPV1
{

    /**
     * @var string $senderAddress
     */
    protected $senderAddress = null;

    /**
     * @var string $senderCity
     */
    protected $senderCity = null;

    /**
     * @var string $senderFullName
     */
    protected $senderFullName = null;

    /**
     * @var string $senderName
     */
    protected $senderName = null;

    /**
     * @var string $senderPhone
     */
    protected $senderPhone = null;

    /**
     * @var string $senderPostalCode
     */
    protected $senderPostalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSenderAddress()
    {
      return $this->senderAddress;
    }

    /**
     * @param string $senderAddress
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderAddress($senderAddress)
    {
      $this->senderAddress = $senderAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderCity()
    {
      return $this->senderCity;
    }

    /**
     * @param string $senderCity
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderCity($senderCity)
    {
      $this->senderCity = $senderCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderFullName()
    {
      return $this->senderFullName;
    }

    /**
     * @param string $senderFullName
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderFullName($senderFullName)
    {
      $this->senderFullName = $senderFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
      return $this->senderName;
    }

    /**
     * @param string $senderName
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderName($senderName)
    {
      $this->senderName = $senderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
      return $this->senderPhone;
    }

    /**
     * @param string $senderPhone
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderPhone($senderPhone)
    {
      $this->senderPhone = $senderPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPostalCode()
    {
      return $this->senderPostalCode;
    }

    /**
     * @param string $senderPostalCode
     * @return \DpdApi\Service\Model\pickupSenderDPPV1
     */
    public function setSenderPostalCode($senderPostalCode)
    {
      $this->senderPostalCode = $senderPostalCode;
      return $this;
    }

}
