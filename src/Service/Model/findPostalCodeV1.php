<?php

namespace DpdApi\Service\Model;

class findPostalCodeV1
{

    /**
     * @var postalCodeV1 $postalCodeV1
     */
    protected $postalCodeV1 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return postalCodeV1
     */
    public function getPostalCodeV1()
    {
      return $this->postalCodeV1;
    }

    /**
     * @param postalCodeV1 $postalCodeV1
     * @return \DpdApi\Service\Model\findPostalCodeV1
     */
    public function setPostalCodeV1($postalCodeV1)
    {
      $this->postalCodeV1 = $postalCodeV1;
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
     * @return \DpdApi\Service\Model\findPostalCodeV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
