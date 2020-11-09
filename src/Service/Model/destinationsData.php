<?php

namespace DpdApi\Service\Model;

class destinationsData
{

    /**
     * @var string $DestinationName
     */
    protected $DestinationName = null;

    /**
     * @var string $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var boolean $Domestic
     */
    protected $Domestic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDestinationName()
    {
      return $this->DestinationName;
    }

    /**
     * @param string $DestinationName
     * @return \DpdApi\Service\Model\destinationsData
     */
    public function setDestinationName($DestinationName)
    {
      $this->DestinationName = $DestinationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return \DpdApi\Service\Model\destinationsData
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDomestic()
    {
      return $this->Domestic;
    }

    /**
     * @param boolean $Domestic
     * @return \DpdApi\Service\Model\destinationsData
     */
    public function setDomestic($Domestic)
    {
      $this->Domestic = $Domestic;
      return $this;
    }

}
