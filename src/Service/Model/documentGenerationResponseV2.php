<?php

namespace DpdApi\Service\Model;

class documentGenerationResponseV2
{

    /**
     * @var DestinationDataList $DestinationDataList
     */
    protected $DestinationDataList = null;

    /**
     * @var base64Binary $DocumentData
     */
    protected $DocumentData = null;

    /**
     * @var nonMatchingData[] $nonMatchingDataList
     */
    protected $nonMatchingDataList = null;

    /**
     * @var sessionDGRV2 $Session
     */
    protected $Session = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DestinationDataList
     */
    public function getDestinationDataList()
    {
      return $this->DestinationDataList;
    }

    /**
     * @param DestinationDataList $DestinationDataList
     * @return \DpdApi\Service\Model\documentGenerationResponseV2
     */
    public function setDestinationDataList($DestinationDataList)
    {
      $this->DestinationDataList = $DestinationDataList;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocumentData()
    {
      return $this->DocumentData;
    }

    /**
     * @param base64Binary $DocumentData
     * @return \DpdApi\Service\Model\documentGenerationResponseV2
     */
    public function setDocumentData($DocumentData)
    {
      $this->DocumentData = $DocumentData;
      return $this;
    }

    /**
     * @return nonMatchingData[]
     */
    public function getNonMatchingDataList()
    {
      return $this->nonMatchingDataList;
    }

    /**
     * @param nonMatchingData[] $nonMatchingDataList
     * @return \DpdApi\Service\Model\documentGenerationResponseV2
     */
    public function setNonMatchingDataList(array $nonMatchingDataList = null)
    {
      $this->nonMatchingDataList = $nonMatchingDataList;
      return $this;
    }

    /**
     * @return sessionDGRV2
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param sessionDGRV2 $Session
     * @return \DpdApi\Service\Model\documentGenerationResponseV2
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

}
