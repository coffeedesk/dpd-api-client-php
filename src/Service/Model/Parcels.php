<?php

namespace DpdApi\Service\Model;

class Parcels
{

    /**
     * @var parcelPGRV2 $Parcel
     */
    protected $Parcel = null;

    /**
     * @param parcelPGRV2 $Parcel
     */
    public function __construct($Parcel)
    {
      $this->Parcel = $Parcel;
    }

    /**
     * @return parcelPGRV2
     */
    public function getParcel()
    {
      return $this->Parcel;
    }

    /**
     * @param parcelPGRV2 $Parcel
     * @return \DpdApi\Service\Model\Parcels
     */
    public function setParcel($Parcel)
    {
      $this->Parcel = $Parcel;
      return $this;
    }

}
