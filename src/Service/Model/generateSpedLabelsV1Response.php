<?php

namespace DpdApi\Service\Model;

class generateSpedLabelsV1Response
{

    /**
     * @var documentGenerationResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return documentGenerationResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param documentGenerationResponseV1 $return
     * @return \DpdApi\Service\Model\generateSpedLabelsV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
