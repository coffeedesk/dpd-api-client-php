<?php

namespace DpdApi\Service\Model;

class sessionDGRV1
{

    /**
     * @var packageDGRV1[] $packages
     */
    protected $packages = null;

    /**
     * @var int $sessionId
     */
    protected $sessionId = null;

    /**
     * @var statusInfoDGRV1 $statusInfo
     */
    protected $statusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageDGRV1[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageDGRV1[] $packages
     * @return \DpdApi\Service\Model\sessionDGRV1
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
     * @return \DpdApi\Service\Model\sessionDGRV1
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return statusInfoDGRV1
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoDGRV1 $statusInfo
     * @return \DpdApi\Service\Model\sessionDGRV1
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
