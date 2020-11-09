<?php

namespace DpdApi\Service\Model;

class protocolDPPV1
{

    /**
     * @var string $documentId
     */
    protected $documentId = null;

    
    public function __construct()
    {
    
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
     * @return \DpdApi\Service\Model\protocolDPPV1
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
      return $this;
    }

}
