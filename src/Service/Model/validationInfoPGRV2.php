<?php

namespace DpdApi\Service\Model;

class validationInfoPGRV2
{

    /**
     * @var int $ErrorId
     */
    protected $ErrorId = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $FieldNames
     */
    protected $FieldNames = null;

    /**
     * @var string $Info
     */
    protected $Info = null;

    /**
     * @param int $ErrorId
     */
    public function __construct($ErrorId)
    {
      $this->ErrorId = $ErrorId;
    }

    /**
     * @return int
     */
    public function getErrorId()
    {
      return $this->ErrorId;
    }

    /**
     * @param int $ErrorId
     * @return \DpdApi\Service\Model\validationInfoPGRV2
     */
    public function setErrorId($ErrorId)
    {
      $this->ErrorId = $ErrorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \DpdApi\Service\Model\validationInfoPGRV2
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldNames()
    {
      return $this->FieldNames;
    }

    /**
     * @param string $FieldNames
     * @return \DpdApi\Service\Model\validationInfoPGRV2
     */
    public function setFieldNames($FieldNames)
    {
      $this->FieldNames = $FieldNames;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
      return $this->Info;
    }

    /**
     * @param string $Info
     * @return \DpdApi\Service\Model\validationInfoPGRV2
     */
    public function setInfo($Info)
    {
      $this->Info = $Info;
      return $this;
    }

}
