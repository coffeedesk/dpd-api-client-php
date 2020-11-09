<?php

namespace DpdApi\Service\Model;

class DeniedAccessWSException
{

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $exceptionDetails
     */
    protected $exceptionDetails = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \DpdApi\Service\Model\DeniedAccessWSException
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionDetails()
    {
      return $this->exceptionDetails;
    }

    /**
     * @param string $exceptionDetails
     * @return \DpdApi\Service\Model\DeniedAccessWSException
     */
    public function setExceptionDetails($exceptionDetails)
    {
      $this->exceptionDetails = $exceptionDetails;
      return $this;
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
     * @return \DpdApi\Service\Model\DeniedAccessWSException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
