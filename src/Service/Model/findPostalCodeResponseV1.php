<?php

namespace DpdApi\Service\Model;

class findPostalCodeResponseV1
{

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DpdApi\Service\Model\findPostalCodeResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
