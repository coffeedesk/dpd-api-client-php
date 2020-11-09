<?php

namespace DpdApi\Service\Model;

class sessionPGRV2
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $SessionId
     */
    protected $SessionId = null;

    /**
     * @var \DateTime $BeginTime
     */
    protected $BeginTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \DpdApi\Service\Model\sessionPGRV2
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \DpdApi\Service\Model\sessionPGRV2
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginTime()
    {
      if ($this->BeginTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BeginTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BeginTime
     * @return \DpdApi\Service\Model\sessionPGRV2
     */
    public function setBeginTime(\DateTime $BeginTime = null)
    {
      if ($BeginTime == null) {
       $this->BeginTime = null;
      } else {
        $this->BeginTime = $BeginTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \DpdApi\Service\Model\sessionPGRV2
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \DpdApi\Service\Model\sessionPGRV2
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
