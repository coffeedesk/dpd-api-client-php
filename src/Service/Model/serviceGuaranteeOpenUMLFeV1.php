<?php

namespace DpdApi\Service\Model;

class serviceGuaranteeOpenUMLFeV1
{

    /**
     * @var serviceGuaranteeTypeEnumOpenUMLFeV1 $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return serviceGuaranteeTypeEnumOpenUMLFeV1
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param serviceGuaranteeTypeEnumOpenUMLFeV1 $type
     * @return \DpdApi\Service\Model\serviceGuaranteeOpenUMLFeV1
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \DpdApi\Service\Model\serviceGuaranteeOpenUMLFeV1
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
