<?php

namespace DpdApi\Service\Model;

class openUMLFeV3
{

    /**
     * @var packageOpenUMLFeV3[] $packages
     */
    protected $packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageOpenUMLFeV3[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageOpenUMLFeV3[] $packages
     * @return \DpdApi\Service\Model\openUMLFeV3
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

}
