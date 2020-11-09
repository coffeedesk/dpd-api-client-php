<?php

namespace DpdApi\Service\Model;

class packagesPickupCallV2
{

    /**
     * @var dpdPickupCallParamsV2 $dpdPickupParamsV2
     */
    protected $dpdPickupParamsV2 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdPickupCallParamsV2
     */
    public function getDpdPickupParamsV2()
    {
      return $this->dpdPickupParamsV2;
    }

    /**
     * @param dpdPickupCallParamsV2 $dpdPickupParamsV2
     * @return \DpdApi\Service\Model\packagesPickupCallV2
     */
    public function setDpdPickupParamsV2($dpdPickupParamsV2)
    {
      $this->dpdPickupParamsV2 = $dpdPickupParamsV2;
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
     * @return \DpdApi\Service\Model\packagesPickupCallV2
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
