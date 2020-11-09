<?php

namespace DpdApi\Service\Model;

class dpdServicesParamsV2
{

    /**
     * @var policyDSPEnumV2 $Policy
     */
    protected $Policy = null;

    /**
     * @var sessionDSPV2 $Session
     */
    protected $Session = null;

    /**
     * @var pickupAddressDSPV2 $PickupAddress
     */
    protected $PickupAddress = null;

    /**
     * @var DeliveryDestinations $DeliveryDestinations
     */
    protected $DeliveryDestinations = null;

    /**
     * @var boolean $GenProtForNonMatching
     */
    protected $GenProtForNonMatching = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return policyDSPEnumV2
     */
    public function getPolicy()
    {
      return $this->Policy;
    }

    /**
     * @param policyDSPEnumV2 $Policy
     * @return \DpdApi\Service\Model\dpdServicesParamsV2
     */
    public function setPolicy($Policy)
    {
      $this->Policy = $Policy;
      return $this;
    }

    /**
     * @return sessionDSPV2
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param sessionDSPV2 $Session
     * @return \DpdApi\Service\Model\dpdServicesParamsV2
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return pickupAddressDSPV2
     */
    public function getPickupAddress()
    {
      return $this->PickupAddress;
    }

    /**
     * @param pickupAddressDSPV2 $PickupAddress
     * @return \DpdApi\Service\Model\dpdServicesParamsV2
     */
    public function setPickupAddress($PickupAddress)
    {
      $this->PickupAddress = $PickupAddress;
      return $this;
    }

    /**
     * @return DeliveryDestinations
     */
    public function getDeliveryDestinations()
    {
      return $this->DeliveryDestinations;
    }

    /**
     * @param DeliveryDestinations $DeliveryDestinations
     * @return \DpdApi\Service\Model\dpdServicesParamsV2
     */
    public function setDeliveryDestinations($DeliveryDestinations)
    {
      $this->DeliveryDestinations = $DeliveryDestinations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenProtForNonMatching()
    {
      return $this->GenProtForNonMatching;
    }

    /**
     * @param boolean $GenProtForNonMatching
     * @return \DpdApi\Service\Model\dpdServicesParamsV2
     */
    public function setGenProtForNonMatching($GenProtForNonMatching)
    {
      $this->GenProtForNonMatching = $GenProtForNonMatching;
      return $this;
    }

}
