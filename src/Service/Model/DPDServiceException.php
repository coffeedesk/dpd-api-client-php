<?php

namespace DpdApi\Service\Model;

class DPDServiceException
{

    /**
     * @var \DateTime $exceptionDate
     */
    protected $exceptionDate = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getExceptionDate()
    {
      if ($this->exceptionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->exceptionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $exceptionDate
     * @return \DpdApi\Service\Model\DPDServiceException
     */
    public function setExceptionDate(\DateTime $exceptionDate = null)
    {
      if ($exceptionDate == null) {
       $this->exceptionDate = null;
      } else {
        $this->exceptionDate = $exceptionDate->format(\DateTime::ATOM);
      }
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
     * @return \DpdApi\Service\Model\DPDServiceException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
