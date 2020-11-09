<?php

namespace DpdApi\Service\Model;

class parcelsAppendV1
{

    /**
     * @var parcelsAppendSearchCriteriaPAV1 $packagesearchCriteria
     */
    protected $packagesearchCriteria = null;

    /**
     * @var parcelAppendPAV1[] $parcels
     */
    protected $parcels = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return parcelsAppendSearchCriteriaPAV1
     */
    public function getPackagesearchCriteria()
    {
      return $this->packagesearchCriteria;
    }

    /**
     * @param parcelsAppendSearchCriteriaPAV1 $packagesearchCriteria
     * @return \DpdApi\Service\Model\parcelsAppendV1
     */
    public function setPackagesearchCriteria($packagesearchCriteria)
    {
      $this->packagesearchCriteria = $packagesearchCriteria;
      return $this;
    }

    /**
     * @return parcelAppendPAV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelAppendPAV1[] $parcels
     * @return \DpdApi\Service\Model\parcelsAppendV1
     */
    public function setParcels(array $parcels = null)
    {
      $this->parcels = $parcels;
      return $this;
    }

}
