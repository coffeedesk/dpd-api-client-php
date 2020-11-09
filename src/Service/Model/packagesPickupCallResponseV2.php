<?php

namespace DpdApi\Service\Model;

class packagesPickupCallResponseV2
{

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
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV2
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
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV2
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
