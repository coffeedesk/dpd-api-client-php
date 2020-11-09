<?php

namespace DpdApi\InfoService\Model;

class getEventsForWaybillV1Response
{

    /**
     * @var customerEventsResponseV3 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return customerEventsResponseV3
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param customerEventsResponseV3 $return
     * @return \DpdApi\InfoService\Model\getEventsForWaybillV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
