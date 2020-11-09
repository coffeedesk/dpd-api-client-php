<?php

namespace DpdApi\InfoService\Model;

class markEventsAsProcessedV1Response
{

    /**
     * @var boolean $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param boolean $return
     * @return \DpdApi\InfoService\Model\markEventsAsProcessedV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
