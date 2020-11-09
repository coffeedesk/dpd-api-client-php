<?php

namespace DpdApi\Service\Model;

class dpdParcelBusinessEventV1
{

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $eventCode
     */
    protected $eventCode = null;

    /**
     * @var dpdParcelBusinessEventDataV1[] $eventDataList
     */
    protected $eventDataList = null;

    /**
     * @var \DateTime $eventTime
     */
    protected $eventTime = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEventCode()
    {
      return $this->eventCode;
    }

    /**
     * @param string $eventCode
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setEventCode($eventCode)
    {
      $this->eventCode = $eventCode;
      return $this;
    }

    /**
     * @return dpdParcelBusinessEventDataV1[]
     */
    public function getEventDataList()
    {
      return $this->eventDataList;
    }

    /**
     * @param dpdParcelBusinessEventDataV1[] $eventDataList
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setEventDataList(array $eventDataList = null)
    {
      $this->eventDataList = $eventDataList;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventTime()
    {
      if ($this->eventTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->eventTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $eventTime
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setEventTime(\DateTime $eventTime = null)
    {
      if ($eventTime == null) {
       $this->eventTime = null;
      } else {
        $this->eventTime = $eventTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
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
     * @return \DpdApi\Service\Model\dpdParcelBusinessEventV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
