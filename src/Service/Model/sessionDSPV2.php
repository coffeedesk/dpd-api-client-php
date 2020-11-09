<?php

namespace DpdApi\Service\Model;

class sessionDSPV2
{

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

    /**
     * @var int $SessionId
     */
    protected $SessionId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param Packages $Packages
     * @return \DpdApi\Service\Model\sessionDSPV2
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param int $SessionId
     * @return \DpdApi\Service\Model\sessionDSPV2
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

}
