<?php

namespace DpdApi\Service\Model;

class DestinationDataList
{

    /**
     * @var destinationsData $DestinationsData
     */
    protected $DestinationsData = null;

    /**
     * @param destinationsData $DestinationsData
     */
    public function __construct($DestinationsData)
    {
      $this->DestinationsData = $DestinationsData;
    }

    /**
     * @return destinationsData
     */
    public function getDestinationsData()
    {
      return $this->DestinationsData;
    }

    /**
     * @param destinationsData $DestinationsData
     * @return \DpdApi\Service\Model\DestinationDataList
     */
    public function setDestinationsData($DestinationsData)
    {
      $this->DestinationsData = $DestinationsData;
      return $this;
    }

}
