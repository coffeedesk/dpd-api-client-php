<?php

namespace DpdApi\InfoService\Model;

class customerEventDataV2
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \DpdApi\InfoService\Model\customerEventDataV2
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \DpdApi\InfoService\Model\customerEventDataV2
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
