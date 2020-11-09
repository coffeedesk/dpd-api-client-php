<?php

namespace DpdApi\Service\Model;

class generatePackagesNumbersV4
{

    /**
     * @var openUMLFeV3 $openUMLFeV3
     */
    protected $openUMLFeV3 = null;

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
     * @return openUMLFeV3
     */
    public function getOpenUMLFeV3()
    {
      return $this->openUMLFeV3;
    }

    /**
     * @param openUMLFeV3 $openUMLFeV3
     * @return \DpdApi\Service\Model\generatePackagesNumbersV4
     */
    public function setOpenUMLFeV3($openUMLFeV3)
    {
      $this->openUMLFeV3 = $openUMLFeV3;
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV4
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV4
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV4
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
