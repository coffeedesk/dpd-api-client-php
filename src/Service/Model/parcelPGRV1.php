<?php

namespace DpdApi\Service\Model;

class parcelPGRV1
{

    /**
     * @var int $parcelId
     */
    protected $parcelId = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var validationStatusPGREnumV1 $status
     */
    protected $status = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getParcelId()
    {
      return $this->parcelId;
    }

    /**
     * @param int $parcelId
     * @return \DpdApi\Service\Model\parcelPGRV1
     */
    public function setParcelId($parcelId)
    {
      $this->parcelId = $parcelId;
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
     * @return \DpdApi\Service\Model\parcelPGRV1
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
     * @return \DpdApi\Service\Model\parcelPGRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \DpdApi\Service\Model\parcelPGRV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
