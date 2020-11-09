<?php

namespace DpdApi\Service\Model;

class protocolDepot
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \DpdApi\Service\Model\protocolDepot
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
