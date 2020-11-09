<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV2Response
{

    /**
     * @var packagesPickupCallResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV2 $return
     * @return \DpdApi\Service\Model\packagesPickupCallV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
