<?php

namespace DpdApi\InfoService\Model;

class markEventsAsProcessedV1
{

    /**
     * @var string $confirmId
     */
    protected $confirmId = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getConfirmId()
    {
      return $this->confirmId;
    }

    /**
     * @param string $confirmId
     * @return \DpdApi\InfoService\Model\markEventsAsProcessedV1
     */
    public function setConfirmId($confirmId)
    {
      $this->confirmId = $confirmId;
      return $this;
    }

    /**
     * @return authDataV1
     */
    public function getAuthDataV1()
    {
      return $this->authDataV1;
    }

    /**
     * @param authDataV1 $authDataV1
     * @return \DpdApi\InfoService\Model\markEventsAsProcessedV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
