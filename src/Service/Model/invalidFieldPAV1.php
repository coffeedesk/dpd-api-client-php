<?php

namespace DpdApi\Service\Model;

class invalidFieldPAV1
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var string $info
     */
    protected $info = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \DpdApi\Service\Model\invalidFieldPAV1
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param string $info
     * @return \DpdApi\Service\Model\invalidFieldPAV1
     */
    public function setInfo($info)
    {
      $this->info = $info;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DpdApi\Service\Model\invalidFieldPAV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
