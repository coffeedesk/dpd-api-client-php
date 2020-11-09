<?php

namespace DpdApi\Service\Model;

class ValidationDetails
{

    /**
     * @var validationInfoPGRV2 $ValidationInfo
     */
    protected $ValidationInfo = null;

    /**
     * @param validationInfoPGRV2 $ValidationInfo
     */
    public function __construct($ValidationInfo)
    {
      $this->ValidationInfo = $ValidationInfo;
    }

    /**
     * @return validationInfoPGRV2
     */
    public function getValidationInfo()
    {
      return $this->ValidationInfo;
    }

    /**
     * @param validationInfoPGRV2 $ValidationInfo
     * @return \DpdApi\Service\Model\ValidationDetails
     */
    public function setValidationInfo($ValidationInfo)
    {
      $this->ValidationInfo = $ValidationInfo;
      return $this;
    }

}
