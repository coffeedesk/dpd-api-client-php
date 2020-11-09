<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV4
{

    /**
     * @var dpdPickupCallParamsV3 $dpdPickupParamsV3
     */
    protected $dpdPickupParamsV3 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdPickupCallParamsV3
     */
    public function getDpdPickupParamsV3()
    {
      return $this->dpdPickupParamsV3;
    }

    /**
     * @param dpdPickupCallParamsV3 $dpdPickupParamsV3
     * @return \DpdApi\Service\Model\packagesPickupCallV4
     */
    public function setDpdPickupParamsV3($dpdPickupParamsV3)
    {
      $this->dpdPickupParamsV3 = $dpdPickupParamsV3;
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
     * @return \DpdApi\Service\Model\packagesPickupCallV4
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
