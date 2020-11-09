<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV1
{

    /**
     * @var dpdPickupCallParamsV1 $dpdPickupParamsV1
     */
    protected $dpdPickupParamsV1 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdPickupCallParamsV1
     */
    public function getDpdPickupParamsV1()
    {
      return $this->dpdPickupParamsV1;
    }

    /**
     * @param dpdPickupCallParamsV1 $dpdPickupParamsV1
     * @return \DpdApi\Service\Model\packagesPickupCallV1
     */
    public function setDpdPickupParamsV1($dpdPickupParamsV1)
    {
      $this->dpdPickupParamsV1 = $dpdPickupParamsV1;
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
     * @return \DpdApi\Service\Model\packagesPickupCallV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
