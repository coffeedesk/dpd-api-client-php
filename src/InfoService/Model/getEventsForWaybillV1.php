<?php

namespace DpdApi\InfoService\Model;

class getEventsForWaybillV1
{

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    /**
     * @var eventsSelectTypeEnum $eventsSelectType
     */
    protected $eventsSelectType = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
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
     * @return \DpdApi\InfoService\Model\getEventsForWaybillV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

    /**
     * @return eventsSelectTypeEnum
     */
    public function getEventsSelectType()
    {
      return $this->eventsSelectType;
    }

    /**
     * @param eventsSelectTypeEnum $eventsSelectType
     * @return \DpdApi\InfoService\Model\getEventsForWaybillV1
     */
    public function setEventsSelectType($eventsSelectType)
    {
      $this->eventsSelectType = $eventsSelectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \DpdApi\InfoService\Model\getEventsForWaybillV1
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return authDataV1
     */
    public function getAuthDataV1()
    {
      return $this->authDataV1;
    }

    /**
     * @param authDataV1 $authDataV1
     * @return \DpdApi\InfoService\Model\getEventsForWaybillV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
