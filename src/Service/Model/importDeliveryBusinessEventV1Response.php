<?php

namespace DpdApi\Service\Model;

class importDeliveryBusinessEventV1Response
{

    /**
     * @var importDeliveryBusinessEventResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return importDeliveryBusinessEventResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param importDeliveryBusinessEventResponseV1 $return
     * @return \DpdApi\Service\Model\importDeliveryBusinessEventV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
