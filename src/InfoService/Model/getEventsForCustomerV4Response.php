<?php

namespace DpdApi\InfoService\Model;

class getEventsForCustomerV4Response
{

    /**
     * @var customerEventsResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return customerEventsResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param customerEventsResponseV2 $return
     * @return \DpdApi\InfoService\Model\getEventsForCustomerV4Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
