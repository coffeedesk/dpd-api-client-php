<?php

namespace DpdApi\Service\Model;

class Packages
{

    /**
     * @var packagePGRV2 $Package
     */
    protected $Package = null;

    /**
     * @param packagePGRV2 $Package
     */
    public function __construct($Package)
    {
      $this->Package = $Package;
    }

    /**
     * @return packagePGRV2
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param packagePGRV2 $Package
     * @return \DpdApi\Service\Model\Packages
     */
    public function setPackage($Package)
    {
      $this->Package = $Package;
      return $this;
    }

}
