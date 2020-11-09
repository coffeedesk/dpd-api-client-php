<?php

namespace DpdApi\InfoService\Model;

class customerEventV3
{

    /**
     * @var string $businessCode
     */
    protected $businessCode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $depot
     */
    protected $depot = null;

    /**
     * @var string $depotName
     */
    protected $depotName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var customerEventDataV3[] $eventDataList
     */
    protected $eventDataList = null;

    /**
     * @var string $eventTime
     */
    protected $eventTime = null;

    /**
     * @var int $objectId
     */
    protected $objectId = null;

    /**
     * @var string $packageReference
     */
    protected $packageReference = null;

    /**
     * @var string $parcelReference
     */
    protected $parcelReference = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    /**
     * @param int $objectId
     */
    public function __construct($objectId)
    {
      $this->objectId = $objectId;
    }

    /**
     * @return string
     */
    public function getBusinessCode()
    {
      return $this->businessCode;
    }

    /**
     * @param string $businessCode
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setBusinessCode($businessCode)
    {
      $this->businessCode = $businessCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepot()
    {
      return $this->depot;
    }

    /**
     * @param string $depot
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setDepot($depot)
    {
      $this->depot = $depot;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepotName()
    {
      return $this->depotName;
    }

    /**
     * @param string $depotName
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setDepotName($depotName)
    {
      $this->depotName = $depotName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return customerEventDataV3[]
     */
    public function getEventDataList()
    {
      return $this->eventDataList;
    }

    /**
     * @param customerEventDataV3[] $eventDataList
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setEventDataList(array $eventDataList = null)
    {
      $this->eventDataList = $eventDataList;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventTime()
    {
      return $this->eventTime;
    }

    /**
     * @param string $eventTime
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setEventTime($eventTime)
    {
      $this->eventTime = $eventTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
      return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageReference()
    {
      return $this->packageReference;
    }

    /**
     * @param string $packageReference
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setPackageReference($packageReference)
    {
      $this->packageReference = $packageReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelReference()
    {
      return $this->parcelReference;
    }

    /**
     * @param string $parcelReference
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setParcelReference($parcelReference)
    {
      $this->parcelReference = $parcelReference;
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
     * @return \DpdApi\InfoService\Model\customerEventV3
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
