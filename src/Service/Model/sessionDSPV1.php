<?php

namespace DpdApi\Service\Model;

class sessionDSPV1
{

    /**
     * @var packageDSPV1[] $packages
     */
    protected $packages = null;

    /**
     * @var int $sessionId
     */
    protected $sessionId = null;

    /**
     * @var sessionTypeDSPEnumV1 $sessionType
     */
    protected $sessionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageDSPV1[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageDSPV1[] $packages
     * @return \DpdApi\Service\Model\sessionDSPV1
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param int $sessionId
     * @return \DpdApi\Service\Model\sessionDSPV1
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return sessionTypeDSPEnumV1|string
     */
    public function getSessionType()
    {
      return $this->sessionType;
    }

    /**
     * @param sessionTypeDSPEnumV1|string $sessionType
     * @return \DpdApi\Service\Model\sessionDSPV1
     */
    public function setSessionType($sessionType)
    {
      $this->sessionType = $sessionType;
      return $this;
    }

}
