<?php

namespace DpdApi\Service\Model;

class packageDSPV1
{

    /**
     * @var int $packageId
     */
    protected $packageId = null;

    /**
     * @var parcelDSPV1[] $parcels
     */
    protected $parcels = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    
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
     * @return \DpdApi\Service\Model\packageDSPV1
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
      return $this;
    }

    /**
     * @return parcelDSPV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelDSPV1[] $parcels
     * @return \DpdApi\Service\Model\packageDSPV1
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
     * @return \DpdApi\Service\Model\packageDSPV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

}
