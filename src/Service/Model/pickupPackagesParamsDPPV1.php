<?php

namespace DpdApi\Service\Model;

class pickupPackagesParamsDPPV1
{

    /**
     * @var boolean $dox
     */
    protected $dox = null;

    /**
     * @var int $doxCount
     */
    protected $doxCount = null;

    /**
     * @var boolean $pallet
     */
    protected $pallet = null;

    /**
     * @var float $palletMaxHeight
     */
    protected $palletMaxHeight = null;

    /**
     * @var float $palletMaxWeight
     */
    protected $palletMaxWeight = null;

    /**
     * @var int $palletsCount
     */
    protected $palletsCount = null;

    /**
     * @var float $palletsWeight
     */
    protected $palletsWeight = null;

    /**
     * @var float $parcelMaxDepth
     */
    protected $parcelMaxDepth = null;

    /**
     * @var float $parcelMaxHeight
     */
    protected $parcelMaxHeight = null;

    /**
     * @var float $parcelMaxWeight
     */
    protected $parcelMaxWeight = null;

    /**
     * @var float $parcelMaxWidth
     */
    protected $parcelMaxWidth = null;

    /**
     * @var int $parcelsCount
     */
    protected $parcelsCount = null;

    /**
     * @var float $parcelsWeight
     */
    protected $parcelsWeight = null;

    /**
     * @var boolean $standardParcel
     */
    protected $standardParcel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDox()
    {
      return $this->dox;
    }

    /**
     * @param boolean $dox
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setDox($dox)
    {
      $this->dox = $dox;
      return $this;
    }

    /**
     * @return int
     */
    public function getDoxCount()
    {
      return $this->doxCount;
    }

    /**
     * @param int $doxCount
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setDoxCount($doxCount)
    {
      $this->doxCount = $doxCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPallet()
    {
      return $this->pallet;
    }

    /**
     * @param boolean $pallet
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setPallet($pallet)
    {
      $this->pallet = $pallet;
      return $this;
    }

    /**
     * @return float
     */
    public function getPalletMaxHeight()
    {
      return $this->palletMaxHeight;
    }

    /**
     * @param float $palletMaxHeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setPalletMaxHeight($palletMaxHeight)
    {
      $this->palletMaxHeight = $palletMaxHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getPalletMaxWeight()
    {
      return $this->palletMaxWeight;
    }

    /**
     * @param float $palletMaxWeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setPalletMaxWeight($palletMaxWeight)
    {
      $this->palletMaxWeight = $palletMaxWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletsCount()
    {
      return $this->palletsCount;
    }

    /**
     * @param int $palletsCount
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setPalletsCount($palletsCount)
    {
      $this->palletsCount = $palletsCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPalletsWeight()
    {
      return $this->palletsWeight;
    }

    /**
     * @param float $palletsWeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setPalletsWeight($palletsWeight)
    {
      $this->palletsWeight = $palletsWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxDepth()
    {
      return $this->parcelMaxDepth;
    }

    /**
     * @param float $parcelMaxDepth
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelMaxDepth($parcelMaxDepth)
    {
      $this->parcelMaxDepth = $parcelMaxDepth;
      return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxHeight()
    {
      return $this->parcelMaxHeight;
    }

    /**
     * @param float $parcelMaxHeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelMaxHeight($parcelMaxHeight)
    {
      $this->parcelMaxHeight = $parcelMaxHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxWeight()
    {
      return $this->parcelMaxWeight;
    }

    /**
     * @param float $parcelMaxWeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelMaxWeight($parcelMaxWeight)
    {
      $this->parcelMaxWeight = $parcelMaxWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getParcelMaxWidth()
    {
      return $this->parcelMaxWidth;
    }

    /**
     * @param float $parcelMaxWidth
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelMaxWidth($parcelMaxWidth)
    {
      $this->parcelMaxWidth = $parcelMaxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelsCount()
    {
      return $this->parcelsCount;
    }

    /**
     * @param int $parcelsCount
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelsCount($parcelsCount)
    {
      $this->parcelsCount = $parcelsCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getParcelsWeight()
    {
      return $this->parcelsWeight;
    }

    /**
     * @param float $parcelsWeight
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setParcelsWeight($parcelsWeight)
    {
      $this->parcelsWeight = $parcelsWeight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStandardParcel()
    {
      return $this->standardParcel;
    }

    /**
     * @param boolean $standardParcel
     * @return \DpdApi\Service\Model\pickupPackagesParamsDPPV1
     */
    public function setStandardParcel($standardParcel)
    {
      $this->standardParcel = $standardParcel;
      return $this;
    }

}
