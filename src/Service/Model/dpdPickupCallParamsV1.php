<?php

namespace DpdApi\Service\Model;

class dpdPickupCallParamsV1
{

    /**
     * @var contactInfoDPPV1 $contactInfo
     */
    protected $contactInfo = null;

    /**
     * @var pickupAddressDSPV1 $pickupAddress
     */
    protected $pickupAddress = null;

    /**
     * @var \DateTime $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var string $pickupTimeFrom
     */
    protected $pickupTimeFrom = null;

    /**
     * @var string $pickupTimeTo
     */
    protected $pickupTimeTo = null;

    /**
     * @var policyDPPEnumV1 $policy
     */
    protected $policy = null;

    /**
     * @var protocolDPPV1[] $protocols
     */
    protected $protocols = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return contactInfoDPPV1
     */
    public function getContactInfo()
    {
      return $this->contactInfo;
    }

    /**
     * @param contactInfoDPPV1 $contactInfo
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setContactInfo($contactInfo)
    {
      $this->contactInfo = $contactInfo;
      return $this;
    }

    /**
     * @return pickupAddressDSPV1
     */
    public function getPickupAddress()
    {
      return $this->pickupAddress;
    }

    /**
     * @param pickupAddressDSPV1 $pickupAddress
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setPickupAddress($pickupAddress)
    {
      $this->pickupAddress = $pickupAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDate()
    {
      if ($this->pickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->pickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pickupDate
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setPickupDate(\DateTime $pickupDate = null)
    {
      if ($pickupDate == null) {
       $this->pickupDate = null;
      } else {
        $this->pickupDate = $pickupDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom()
    {
      return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setPickupTimeFrom($pickupTimeFrom)
    {
      $this->pickupTimeFrom = $pickupTimeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo()
    {
      return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setPickupTimeTo($pickupTimeTo)
    {
      $this->pickupTimeTo = $pickupTimeTo;
      return $this;
    }

    /**
     * @return policyDPPEnumV1
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param policyDPPEnumV1 $policy
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

    /**
     * @return protocolDPPV1[]
     */
    public function getProtocols()
    {
      return $this->protocols;
    }

    /**
     * @param protocolDPPV1[] $protocols
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV1
     */
    public function setProtocols(array $protocols = null)
    {
      $this->protocols = $protocols;
      return $this;
    }

}
