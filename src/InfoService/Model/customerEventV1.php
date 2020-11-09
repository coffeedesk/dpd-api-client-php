<?php

namespace DpdApi\InfoService\Model;

class customerEventV1
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $eventData1
     */
    protected $eventData1 = null;

    /**
     * @var string $eventData2
     */
    protected $eventData2 = null;

    /**
     * @var string $eventData3
     */
    protected $eventData3 = null;

    /**
     * @var string $eventTime
     */
    protected $eventTime = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $objectId
     */
    protected $objectId = null;

    /**
     * @var string $operationType
     */
    protected $operationType = null;

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
     * @param int $id
     * @param int $objectId
     */
    public function __construct($id, $objectId)
    {
      $this->id = $id;
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
     * @return \DpdApi\InfoService\Model\customerEventV1
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
     * @return \DpdApi\InfoService\Model\customerEventV1
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
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setDepot($depot)
    {
      $this->depot = $depot;
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
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventData1()
    {
      return $this->eventData1;
    }

    /**
     * @param string $eventData1
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setEventData1($eventData1)
    {
      $this->eventData1 = $eventData1;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventData2()
    {
      return $this->eventData2;
    }

    /**
     * @param string $eventData2
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setEventData2($eventData2)
    {
      $this->eventData2 = $eventData2;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventData3()
    {
      return $this->eventData3;
    }

    /**
     * @param string $eventData3
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setEventData3($eventData3)
    {
      $this->eventData3 = $eventData3;
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
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setEventTime($eventTime)
    {
      $this->eventTime = $eventTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
      return $this->operationType;
    }

    /**
     * @param string $operationType
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setOperationType($operationType)
    {
      $this->operationType = $operationType;
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
     * @return \DpdApi\InfoService\Model\customerEventV1
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
     * @return \DpdApi\InfoService\Model\customerEventV1
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
     * @return \DpdApi\InfoService\Model\customerEventV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
