<?php

namespace DpdApi\Service\Model;

class documentGenerationResponseV1
{

    /**
     * @var base64Binary $documentData
     */
    protected $documentData = null;

    /**
     * @var string $documentId
     */
    protected $documentId = null;

    /**
     * @var sessionDGRV1 $session
     */
    protected $session = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary
     */
    public function getDocumentData()
    {
      return $this->documentData;
    }

    /**
     * @param base64Binary $documentData
     * @return \DpdApi\Service\Model\documentGenerationResponseV1
     */
    public function setDocumentData($documentData)
    {
      $this->documentData = $documentData;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->documentId;
    }

    /**
     * @param string $documentId
     * @return \DpdApi\Service\Model\documentGenerationResponseV1
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
      return $this;
    }

    /**
     * @return sessionDGRV1
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param sessionDGRV1 $session
     * @return \DpdApi\Service\Model\documentGenerationResponseV1
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

}
