<?php

namespace DpdApi\Service\Model;

class serviceDpdPickupOpenUMLFeV1
{

    /**
     * @var string $pudo
     */
    protected $pudo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPudo()
    {
      return $this->pudo;
    }

    /**
     * @param string $pudo
     * @return \DpdApi\Service\Model\serviceDpdPickupOpenUMLFeV1
     */
    public function setPudo($pudo)
    {
      $this->pudo = $pudo;
      return $this;
    }

}
