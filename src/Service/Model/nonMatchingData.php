<?php

namespace DpdApi\Service\Model;

class nonMatchingData
{

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
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \DpdApi\Service\Model\nonMatchingData
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
