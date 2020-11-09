<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV1Response
{

    /**
     * @var packagesPickupCallResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV1 $return
     * @return \DpdApi\Service\Model\packagesPickupCallV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
