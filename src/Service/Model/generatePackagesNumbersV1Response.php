<?php

namespace DpdApi\Service\Model;

class generatePackagesNumbersV1Response
{

    /**
     * @var packagesGenerationResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesGenerationResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesGenerationResponseV1 $return
     * @return \DpdApi\Service\Model\generatePackagesNumbersV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
