<?php

namespace DpdApi\Service\Model;

class packagePGRV2
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $PackageId
     */
    protected $PackageId = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var ValidationDetails $ValidationDetails
     */
    protected $ValidationDetails = null;

    /**
     * @var Parcels $Parcels
     */
    protected $Parcels = null;

    
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
     * @return \DpdApi\Service\Model\packagePGRV2
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageId()
    {
      return $this->PackageId;
    }

    /**
     * @param int $PackageId
     * @return \DpdApi\Service\Model\packagePGRV2
     */
    public function setPackageId($PackageId)
    {
      $this->PackageId = $PackageId;
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
     * @return \DpdApi\Service\Model\packagePGRV2
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
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
     * @return \DpdApi\Service\Model\packagePGRV2
     */
    public function setValidationDetails($ValidationDetails)
    {
      $this->ValidationDetails = $ValidationDetails;
      return $this;
    }

    /**
     * @return Parcels
     */
    public function getParcels()
    {
      return $this->Parcels;
    }

    /**
     * @param Parcels $Parcels
     * @return \DpdApi\Service\Model\packagePGRV2
     */
    public function setParcels($Parcels)
    {
      $this->Parcels = $Parcels;
      return $this;
    }

}
