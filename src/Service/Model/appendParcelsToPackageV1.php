<?php

namespace DpdApi\Service\Model;

class appendParcelsToPackageV1
{

    /**
     * @var parcelsAppendV1 $parcelsAppend
     */
    protected $parcelsAppend = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return parcelsAppendV1
     */
    public function getParcelsAppend()
    {
      return $this->parcelsAppend;
    }

    /**
     * @param parcelsAppendV1 $parcelsAppend
     * @return \DpdApi\Service\Model\appendParcelsToPackageV1
     */
    public function setParcelsAppend($parcelsAppend)
    {
      $this->parcelsAppend = $parcelsAppend;
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
     * @return \DpdApi\Service\Model\appendParcelsToPackageV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
