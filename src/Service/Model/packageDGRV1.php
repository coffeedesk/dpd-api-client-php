<?php

namespace DpdApi\Service\Model;

class packageDGRV1
{

    /**
     * @var int $packageId
     */
    protected $packageId = null;

    /**
     * @var parcelDGRV1[] $parcels
     */
    protected $parcels = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var statusInfoDGRV1 $statusInfo
     */
    protected $statusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getPackageId()
    {
      return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return \DpdApi\Service\Model\packageDGRV1
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
      return $this;
    }

    /**
     * @return parcelDGRV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelDGRV1[] $parcels
     * @return \DpdApi\Service\Model\packageDGRV1
     */
    public function setParcels(array $parcels = null)
    {
      $this->parcels = $parcels;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \DpdApi\Service\Model\packageDGRV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return statusInfoDGRV1
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoDGRV1 $statusInfo
     * @return \DpdApi\Service\Model\packageDGRV1
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
