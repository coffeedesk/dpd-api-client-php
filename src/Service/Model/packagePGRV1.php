<?php

namespace DpdApi\Service\Model;

class packagePGRV1
{

    /**
     * @var invalidFieldPGRV1[] $invalidFields
     */
    protected $invalidFields = null;

    /**
     * @var int $packageId
     */
    protected $packageId = null;

    /**
     * @var parcelPGRV1[] $parcels
     */
    protected $parcels = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var validationStatusPGREnumV1 $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return invalidFieldPGRV1[]
     */
    public function getInvalidFields()
    {
      return $this->invalidFields;
    }

    /**
     * @param invalidFieldPGRV1[] $invalidFields
     * @return \DpdApi\Service\Model\packagePGRV1
     */
    public function setInvalidFields(array $invalidFields = null)
    {
      $this->invalidFields = $invalidFields;
      return $this;
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
     * @return \DpdApi\Service\Model\packagePGRV1
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
      return $this;
    }

    /**
     * @return parcelPGRV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelPGRV1[] $parcels
     * @return \DpdApi\Service\Model\packagePGRV1
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
     * @return \DpdApi\Service\Model\packagePGRV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return validationStatusPGREnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param validationStatusPGREnumV1 $status
     * @return \DpdApi\Service\Model\packagePGRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
