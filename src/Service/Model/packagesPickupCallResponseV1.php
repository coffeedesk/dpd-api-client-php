<?php

namespace DpdApi\Service\Model;

class packagesPickupCallResponseV1
{

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var protocolPCRV1[] $prototocols
     */
    protected $prototocols = null;

    
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
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV1
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

    /**
     * @return protocolPCRV1[]
     */
    public function getPrototocols()
    {
      return $this->prototocols;
    }

    /**
     * @param protocolPCRV1[] $prototocols
     * @return \DpdApi\Service\Model\packagesPickupCallResponseV1
     */
    public function setPrototocols(array $prototocols = null)
    {
      $this->prototocols = $prototocols;
      return $this;
    }

}
