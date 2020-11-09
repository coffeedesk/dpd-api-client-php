<?php

namespace DpdApi\Service\Model;

class parcelPGRV2
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $ParcelId
     */
    protected $ParcelId = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Waybill
     */
    protected $Waybill = null;

    /**
     * @var ValidationDetails $ValidationDetails
     */
    protected $ValidationDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \DpdApi\Service\Model\parcelPGRV2
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelId()
    {
      return $this->ParcelId;
    }

    /**
     * @param int $ParcelId
     * @return \DpdApi\Service\Model\parcelPGRV2
     */
    public function setParcelId($ParcelId)
    {
      $this->ParcelId = $ParcelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \DpdApi\Service\Model\parcelPGRV2
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->Waybill;
    }

    /**
     * @param string $Waybill
     * @return \DpdApi\Service\Model\parcelPGRV2
     */
    public function setWaybill($Waybill)
    {
      $this->Waybill = $Waybill;
      return $this;
    }

    /**
     * @return ValidationDetails
     */
    public function getValidationDetails()
    {
      return $this->ValidationDetails;
    }

    /**
     * @param ValidationDetails $ValidationDetails
     * @return \DpdApi\Service\Model\parcelPGRV2
     */
    public function setValidationDetails($ValidationDetails)
    {
      $this->ValidationDetails = $ValidationDetails;
      return $this;
    }

}
