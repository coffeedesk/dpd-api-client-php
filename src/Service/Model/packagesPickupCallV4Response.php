<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV4Response
{

    /**
     * @var packagesPickupCallResponseV3 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV3
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV3 $return
     * @return \DpdApi\Service\Model\packagesPickupCallV4Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
