<?php

namespace DpdApi\Service\Model;

class DepotList
{

    /**
     * @var protocolDepot $ProtocolDepot
     */
    protected $ProtocolDepot = null;

    /**
     * @param protocolDepot $ProtocolDepot
     */
    public function __construct($ProtocolDepot)
    {
      $this->ProtocolDepot = $ProtocolDepot;
    }

    /**
     * @return protocolDepot
     */
    public function getProtocolDepot()
    {
      return $this->ProtocolDepot;
    }

    /**
     * @param protocolDepot $ProtocolDepot
     * @return \DpdApi\Service\Model\DepotList
     */
    public function setProtocolDepot($ProtocolDepot)
    {
      $this->ProtocolDepot = $ProtocolDepot;
      return $this;
    }

}
