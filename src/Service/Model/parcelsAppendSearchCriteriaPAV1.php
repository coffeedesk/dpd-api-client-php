<?php

namespace DpdApi\Service\Model;

class parcelsAppendSearchCriteriaPAV1
{

    /**
     * @var int $packageId
     */
    protected $packageId = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    /**
     * @param int $packageId
     */
    public function __construct($packageId)
    {
      $this->packageId = $packageId;
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
     * @return \DpdApi\Service\Model\parcelsAppendSearchCriteriaPAV1
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
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
     * @return \DpdApi\Service\Model\parcelsAppendSearchCriteriaPAV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
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
     * @return \DpdApi\Service\Model\parcelsAppendSearchCriteriaPAV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
