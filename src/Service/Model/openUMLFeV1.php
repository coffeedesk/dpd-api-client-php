<?php

namespace DpdApi\Service\Model;

class openUMLFeV1
{

    /**
     * @var packageOpenUMLFeV1[] $packages
     */
    protected $packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageOpenUMLFeV1[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageOpenUMLFeV1[] $packages
     * @return \DpdApi\Service\Model\openUMLFeV1
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

}
