<?php

namespace DpdApi\Service\Model;

class getCourierOrderAvailabilityV1
{

    /**
     * @var senderPlaceV1 $senderPlaceV1
     */
    protected $senderPlaceV1 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return senderPlaceV1
     */
    public function getSenderPlaceV1()
    {
      return $this->senderPlaceV1;
    }

    /**
     * @param senderPlaceV1 $senderPlaceV1
     * @return \DpdApi\Service\Model\getCourierOrderAvailabilityV1
     */
    public function setSenderPlaceV1($senderPlaceV1)
    {
      $this->senderPlaceV1 = $senderPlaceV1;
      return $this;
    }

    /**
     * @return authDataV1
     */
    public function getAuthDataV1()
    {
      return $this->authDataV1;
    }

    /**
     * @param authDataV1 $authDataV1
     * @return \DpdApi\Service\Model\getCourierOrderAvailabilityV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
