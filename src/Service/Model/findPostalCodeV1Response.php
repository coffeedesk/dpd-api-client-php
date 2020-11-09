<?php

namespace DpdApi\Service\Model;

class findPostalCodeV1Response
{

    /**
     * @var findPostalCodeResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return findPostalCodeResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param findPostalCodeResponseV1 $return
     * @return \DpdApi\Service\Model\findPostalCodeV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
