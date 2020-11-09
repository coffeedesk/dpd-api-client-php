<?php

namespace DpdApi\Service\Model;

class sessionPGRV1
{

    /**
     * @var \DateTime $beginTime
     */
    protected $beginTime = null;

    /**
     * @var \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @var packagePGRV1[] $packages
     */
    protected $packages = null;

    /**
     * @var int $sessionId
     */
    protected $sessionId = null;

    /**
     * @var validationStatusPGREnumV1 $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getBeginTime()
    {
      if ($this->beginTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->beginTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $beginTime
     * @return \DpdApi\Service\Model\sessionPGRV1
     */
    public function setBeginTime(\DateTime $beginTime = null)
    {
      if ($beginTime == null) {
       $this->beginTime = null;
      } else {
        $this->beginTime = $beginTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->endTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endTime
     * @return \DpdApi\Service\Model\sessionPGRV1
     */
    public function setEndTime(\DateTime $endTime = null)
    {
      if ($endTime == null) {
       $this->endTime = null;
      } else {
        $this->endTime = $endTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return packagePGRV1[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packagePGRV1[] $packages
     * @return \DpdApi\Service\Model\sessionPGRV1
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
     * @return \DpdApi\Service\Model\sessionPGRV1
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return validationStatusPGREnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param validationStatusPGREnumV1 $status
     * @return \DpdApi\Service\Model\sessionPGRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
