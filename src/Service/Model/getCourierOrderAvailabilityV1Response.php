<?php

namespace DpdApi\Service\Model;

class getCourierOrderAvailabilityV1Response
{

    /**
     * @var getCourierOrderAvailabilityResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return getCourierOrderAvailabilityResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param getCourierOrderAvailabilityResponseV1 $return
     * @return \DpdApi\Service\Model\getCourierOrderAvailabilityV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
