<?php

namespace DpdApi\Service\Model;

class parcelsAppendResponseV1
{

    /**
     * @var invalidFieldPAV1[] $invalidFields
     */
    protected $invalidFields = null;

    /**
     * @var parcelsAppendParcelPAV1[] $parcels
     */
    protected $parcels = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return invalidFieldPAV1[]
     */
    public function getInvalidFields()
    {
      return $this->invalidFields;
    }

    /**
     * @param invalidFieldPAV1[] $invalidFields
     * @return \DpdApi\Service\Model\parcelsAppendResponseV1
     */
    public function setInvalidFields(array $invalidFields = null)
    {
      $this->invalidFields = $invalidFields;
      return $this;
    }

    /**
     * @return parcelsAppendParcelPAV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelsAppendParcelPAV1[] $parcels
     * @return \DpdApi\Service\Model\parcelsAppendResponseV1
     */
    public function setParcels(array $parcels = null)
    {
      $this->parcels = $parcels;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DpdApi\Service\Model\parcelsAppendResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
