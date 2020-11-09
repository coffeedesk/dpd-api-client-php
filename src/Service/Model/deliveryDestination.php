<?php

namespace DpdApi\Service\Model;

class deliveryDestination
{

    /**
     * @var DepotList $DepotList
     */
    protected $DepotList = null;

    /**
     * @var string $DestinationName
     */
    protected $DestinationName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DepotList
     */
    public function getDepotList()
    {
      return $this->DepotList;
    }

    /**
     * @param DepotList $DepotList
     * @return \DpdApi\Service\Model\deliveryDestination
     */
    public function setDepotList($DepotList)
    {
      $this->DepotList = $DepotList;
      return $this;
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
     * @return \DpdApi\Service\Model\deliveryDestination
     */
    public function setDestinationName($DestinationName)
    {
      $this->DestinationName = $DestinationName;
      return $this;
    }

}
