<?php

namespace DpdApi\Service\Model;

class packagesPickupCallResponseV3
{

    /**
     * @var int $checkSum
     */
    protected $checkSum = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var statusInfoPCRV2 $statusInfo
     */
    protected $statusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCheckSum()
    {
      return $this->checkSum;
    }

    /**
     * @param int $checkSum
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV3
     */
    public function setCheckSum($checkSum)
    {
      $this->checkSum = $checkSum;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV3
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

    /**
     * @return statusInfoPCRV2
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoPCRV2 $statusInfo
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV3
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
