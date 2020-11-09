<?php

namespace DpdApi\InfoService\Model;

class getEventsForCustomerV2Response
{

    /**
     * @var customerEventsResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return customerEventsResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param customerEventsResponseV1 $return
     * @return \DpdApi\InfoService\Model\getEventsForCustomerV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
