<?php

namespace DpdApi\Service\Model;

class dpdServicesParamsV1
{

    /**
     * @var string $documentId
     */
    protected $documentId = null;

    /**
     * @var pickupAddressDSPV1 $pickupAddress
     */
    protected $pickupAddress = null;

    /**
     * @var policyDSPEnumV1 $policy
     */
    protected $policy = null;

    /**
     * @var sessionDSPV1 $session
     */
    protected $session = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->documentId;
    }

    /**
     * @param string $documentId
     * @return \DpdApi\Service\Model\dpdServicesParamsV1
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
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
     * @return \DpdApi\Service\Model\dpdServicesParamsV1
     */
    public function setPickupAddress($pickupAddress)
    {
      $this->pickupAddress = $pickupAddress;
      return $this;
    }

    /**
     * @return policyDSPEnumV1|string
     */
    public function getPolicy()
    {
      return $this->policy;
    }

    /**
     * @param policyDSPEnumV1|string $policy
     * @return \DpdApi\Service\Model\dpdServicesParamsV1
     */
    public function setPolicy($policy)
    {
      $this->policy = $policy;
      return $this;
    }

    /**
     * @return sessionDSPV1
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param sessionDSPV1 $session
     * @return \DpdApi\Service\Model\dpdServicesParamsV1
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

}
