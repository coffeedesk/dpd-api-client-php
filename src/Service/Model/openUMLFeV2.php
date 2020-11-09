<?php

namespace DpdApi\Service\Model;

class openUMLFeV2
{

    /**
     * @var packageOpenUMLFeV2[] $packages
     */
    protected $packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageOpenUMLFeV2[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageOpenUMLFeV2[] $packages
     * @return \DpdApi\Service\Model\openUMLFeV2
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

}
