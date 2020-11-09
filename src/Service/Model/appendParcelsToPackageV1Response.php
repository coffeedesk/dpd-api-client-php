<?php

namespace DpdApi\Service\Model;

class appendParcelsToPackageV1Response
{

    /**
     * @var parcelsAppendResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return parcelsAppendResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param parcelsAppendResponseV1 $return
     * @return \DpdApi\Service\Model\appendParcelsToPackageV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
