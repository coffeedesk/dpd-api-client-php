<?php

namespace DpdApi\Service\Model;

class generatePackagesNumbersV2
{

    /**
     * @var openUMLFeV1 $openUMLV1
     */
    protected $openUMLV1 = null;

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
     * @return openUMLFeV1
     */
    public function getOpenUMLV1()
    {
      return $this->openUMLV1;
    }

    /**
     * @param openUMLFeV1 $openUMLV1
     * @return \DpdApi\Service\Model\generatePackagesNumbersV2
     */
    public function setOpenUMLV1($openUMLV1)
    {
      $this->openUMLV1 = $openUMLV1;
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV2
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV2
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
     * @return \DpdApi\Service\Model\generatePackagesNumbersV2
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
