<?php

namespace DpdApi\Service\Model;

class parcelDGRV2
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
     * @var statusInfoDGRV2 $statusInfo
     */
    protected $statusInfo = null;

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
     * @return \DpdApi\Service\Model\parcelDGRV2
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
     * @return \DpdApi\Service\Model\parcelDGRV2
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return statusInfoDGRV2
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoDGRV2 $statusInfo
     * @return \DpdApi\Service\Model\parcelDGRV2
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
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
     * @return \DpdApi\Service\Model\parcelDGRV2
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
