<?php

namespace DpdApi\Service\Model;

class generatePackagesNumbersV3
{

    /**
     * @var openUMLFeV2 $openUMLFeV2
     */
    protected $openUMLFeV2 = null;

    /**
     * @var pkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1
     */
    protected $pkgNumsGenerationPolicyV1 = null;

    /**
     * @var string $langCode
     */
    protected $langCode = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return openUMLFeV2
     */
    public function getOpenUMLFeV2()
    {
      return $this->openUMLFeV2;
    }

    /**
     * @param openUMLFeV2 $openUMLFeV2
     * @return \DpdApi\Service\Model\generatePackagesNumbersV3
     */
    public function setOpenUMLFeV2($openUMLFeV2)
    {
      $this->openUMLFeV2 = $openUMLFeV2;
      return $this;
    }

    /**
     * @return pkgNumsGenerationPolicyV1
     */
    public function getPkgNumsGenerationPolicyV1()
    {
      return $this->pkgNumsGenerationPolicyV1;
    }

    /**
     * @param pkgNumsGenerationPolicyV1 $pkgNumsGenerationPolicyV1
     * @return \DpdApi\Service\Model\generatePackagesNumbersV3
     */
    public function setPkgNumsGenerationPolicyV1($pkgNumsGenerationPolicyV1)
    {
      $this->pkgNumsGenerationPolicyV1 = $pkgNumsGenerationPolicyV1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLangCode()
    {
      return $this->langCode;
    }

    /**
     * @param string $langCode
     * @return \DpdApi\Service\Model\generatePackagesNumbersV3
     */
    public function setLangCode($langCode)
    {
      $this->langCode = $langCode;
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV3
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
