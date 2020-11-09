<?php

namespace DpdApi\Service\Model;

class DeliveryDestinations
{

    /**
     * @var deliveryDestination $DeliveryDestination
     */
    protected $DeliveryDestination = null;

    /**
     * @param deliveryDestination $DeliveryDestination
     */
    public function __construct($DeliveryDestination)
    {
      $this->DeliveryDestination = $DeliveryDestination;
    }

    /**
     * @return deliveryDestination
     */
    public function getDeliveryDestination()
    {
      return $this->DeliveryDestination;
    }

    /**
     * @param deliveryDestination $DeliveryDestination
     * @return \DpdApi\Service\Model\DeliveryDestinations
     */
    public function setDeliveryDestination($DeliveryDestination)
    {
      $this->DeliveryDestination = $DeliveryDestination;
      return $this;
    }

}
