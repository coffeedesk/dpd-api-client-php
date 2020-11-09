<?php

namespace DpdApi\Service\Model;

class generateProtocolsWithDestinationsV1Response
{

    /**
     * @var documentGenerationResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return documentGenerationResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param documentGenerationResponseV2 $return
     * @return \DpdApi\Service\Model\generateProtocolsWithDestinationsV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
