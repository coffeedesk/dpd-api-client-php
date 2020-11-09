<?php

namespace DpdApi\Service\Model;

class SchemaValidationException
{

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \DpdApi\Service\Model\SchemaValidationException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
