<?php

namespace DpdApi\Service\Model;

class generateProtocolV2
{

    /**
     * @var dpdServicesParamsV1 $dpdServicesParamsV1
     */
    protected $dpdServicesParamsV1 = null;

    /**
     * @var outputDocFormatDSPEnumV1 $outputDocFormatV1
     */
    protected $outputDocFormatV1 = null;

    /**
     * @var outputDocPageFormatDSPEnumV1 $outputDocPageFormatV1
     */
    protected $outputDocPageFormatV1 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdServicesParamsV1
     */
    public function getDpdServicesParamsV1()
    {
      return $this->dpdServicesParamsV1;
    }

    /**
     * @param dpdServicesParamsV1 $dpdServicesParamsV1
     * @return \DpdApi\Service\Model\generateProtocolV2
     */
    public function setDpdServicesParamsV1($dpdServicesParamsV1)
    {
      $this->dpdServicesParamsV1 = $dpdServicesParamsV1;
      return $this;
    }

    /**
     * @return outputDocFormatDSPEnumV1
     */
    public function getOutputDocFormatV1()
    {
      return $this->outputDocFormatV1;
    }

    /**
     * @param outputDocFormatDSPEnumV1 $outputDocFormatV1
     * @return \DpdApi\Service\Model\generateProtocolV2
     */
    public function setOutputDocFormatV1($outputDocFormatV1)
    {
      $this->outputDocFormatV1 = $outputDocFormatV1;
      return $this;
    }

    /**
     * @return outputDocPageFormatDSPEnumV1
     */
    public function getOutputDocPageFormatV1()
    {
      return $this->outputDocPageFormatV1;
    }

    /**
     * @param outputDocPageFormatDSPEnumV1 $outputDocPageFormatV1
     * @return \DpdApi\Service\Model\generateProtocolV2
     */
    public function setOutputDocPageFormatV1($outputDocPageFormatV1)
    {
      $this->outputDocPageFormatV1 = $outputDocPageFormatV1;
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
     * @return \DpdApi\Service\Model\generateProtocolV2
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
