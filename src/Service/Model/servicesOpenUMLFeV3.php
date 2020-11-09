<?php

namespace DpdApi\Service\Model;

class servicesOpenUMLFeV3
{

    /**
     * @var serviceCarryInOpenUMLFeV1 $carryIn
     */
    protected $carryIn = null;

    /**
     * @var serviceCODOpenUMLFeV1 $cod
     */
    protected $cod = null;

    /**
     * @var serviceCUDOpenUMLeFV1 $cud
     */
    protected $cud = null;

    /**
     * @var serviceDeclaredValueOpenUMLFeV1 $declaredValue
     */
    protected $declaredValue = null;

    /**
     * @var serviceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery
     */
    protected $dedicatedDelivery = null;

    /**
     * @var servicePalletOpenUMLFeV1 $dox
     */
    protected $dox = null;

    /**
     * @var serviceDpdPickupOpenUMLFeV1 $dpdPickup
     */
    protected $dpdPickup = null;

    /**
     * @var serviceDutyOpenUMLeFV1 $duty
     */
    protected $duty = null;

    /**
     * @var serviceGuaranteeOpenUMLFeV1 $guarantee
     */
    protected $guarantee = null;

    /**
     * @var serviceInPersOpenUMLFeV1 $inPers
     */
    protected $inPers = null;

    /**
     * @var servicePalletOpenUMLFeV1 $pallet
     */
    protected $pallet = null;

    /**
     * @var servicePrivPersOpenUMLFeV1 $privPers
     */
    protected $privPers = null;

    /**
     * @var serviceRODOpenUMLFeV1 $rod
     */
    protected $rod = null;

    /**
     * @var serviceSelfColOpenUMLFeV1 $selfCol
     */
    protected $selfCol = null;

    /**
     * @var serviceTiresOpenUMLFeV1 $tires
     */
    protected $tires = null;

    /**
     * @var serviceTiresExportOpenUMLFeV1 $tiresExport
     */
    protected $tiresExport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return serviceCarryInOpenUMLFeV1
     */
    public function getCarryIn()
    {
      return $this->carryIn;
    }

    /**
     * @param serviceCarryInOpenUMLFeV1 $carryIn
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setCarryIn($carryIn)
    {
      $this->carryIn = $carryIn;
      return $this;
    }

    /**
     * @return serviceCODOpenUMLFeV1
     */
    public function getCod()
    {
      return $this->cod;
    }

    /**
     * @param serviceCODOpenUMLFeV1 $cod
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setCod($cod)
    {
      $this->cod = $cod;
      return $this;
    }

    /**
     * @return serviceCUDOpenUMLeFV1
     */
    public function getCud()
    {
      return $this->cud;
    }

    /**
     * @param serviceCUDOpenUMLeFV1 $cud
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setCud($cud)
    {
      $this->cud = $cud;
      return $this;
    }

    /**
     * @return serviceDeclaredValueOpenUMLFeV1
     */
    public function getDeclaredValue()
    {
      return $this->declaredValue;
    }

    /**
     * @param serviceDeclaredValueOpenUMLFeV1 $declaredValue
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setDeclaredValue($declaredValue)
    {
      $this->declaredValue = $declaredValue;
      return $this;
    }

    /**
     * @return serviceDedicatedDeliveryOpenUMLFeV1
     */
    public function getDedicatedDelivery()
    {
      return $this->dedicatedDelivery;
    }

    /**
     * @param serviceDedicatedDeliveryOpenUMLFeV1 $dedicatedDelivery
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setDedicatedDelivery($dedicatedDelivery)
    {
      $this->dedicatedDelivery = $dedicatedDelivery;
      return $this;
    }

    /**
     * @return servicePalletOpenUMLFeV1
     */
    public function getDox()
    {
      return $this->dox;
    }

    /**
     * @param servicePalletOpenUMLFeV1 $dox
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setDox($dox)
    {
      $this->dox = $dox;
      return $this;
    }

    /**
     * @return serviceDpdPickupOpenUMLFeV1
     */
    public function getDpdPickup()
    {
      return $this->dpdPickup;
    }

    /**
     * @param serviceDpdPickupOpenUMLFeV1 $dpdPickup
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setDpdPickup($dpdPickup)
    {
      $this->dpdPickup = $dpdPickup;
      return $this;
    }

    /**
     * @return serviceDutyOpenUMLeFV1
     */
    public function getDuty()
    {
      return $this->duty;
    }

    /**
     * @param serviceDutyOpenUMLeFV1 $duty
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setDuty($duty)
    {
      $this->duty = $duty;
      return $this;
    }

    /**
     * @return serviceGuaranteeOpenUMLFeV1
     */
    public function getGuarantee()
    {
      return $this->guarantee;
    }

    /**
     * @param serviceGuaranteeOpenUMLFeV1 $guarantee
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setGuarantee($guarantee)
    {
      $this->guarantee = $guarantee;
      return $this;
    }

    /**
     * @return serviceInPersOpenUMLFeV1
     */
    public function getInPers()
    {
      return $this->inPers;
    }

    /**
     * @param serviceInPersOpenUMLFeV1 $inPers
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setInPers($inPers)
    {
      $this->inPers = $inPers;
      return $this;
    }

    /**
     * @return servicePalletOpenUMLFeV1
     */
    public function getPallet()
    {
      return $this->pallet;
    }

    /**
     * @param servicePalletOpenUMLFeV1 $pallet
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setPallet($pallet)
    {
      $this->pallet = $pallet;
      return $this;
    }

    /**
     * @return servicePrivPersOpenUMLFeV1
     */
    public function getPrivPers()
    {
      return $this->privPers;
    }

    /**
     * @param servicePrivPersOpenUMLFeV1 $privPers
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setPrivPers($privPers)
    {
      $this->privPers = $privPers;
      return $this;
    }

    /**
     * @return serviceRODOpenUMLFeV1
     */
    public function getRod()
    {
      return $this->rod;
    }

    /**
     * @param serviceRODOpenUMLFeV1 $rod
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setRod($rod)
    {
      $this->rod = $rod;
      return $this;
    }

    /**
     * @return serviceSelfColOpenUMLFeV1
     */
    public function getSelfCol()
    {
      return $this->selfCol;
    }

    /**
     * @param serviceSelfColOpenUMLFeV1 $selfCol
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setSelfCol($selfCol)
    {
      $this->selfCol = $selfCol;
      return $this;
    }

    /**
     * @return serviceTiresOpenUMLFeV1
     */
    public function getTires()
    {
      return $this->tires;
    }

    /**
     * @param serviceTiresOpenUMLFeV1 $tires
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setTires($tires)
    {
      $this->tires = $tires;
      return $this;
    }

    /**
     * @return serviceTiresExportOpenUMLFeV1
     */
    public function getTiresExport()
    {
      return $this->tiresExport;
    }

    /**
     * @param serviceTiresExportOpenUMLFeV1 $tiresExport
     * @return \DpdApi\Service\Model\servicesOpenUMLFeV3
     */
    public function setTiresExport($tiresExport)
    {
      $this->tiresExport = $tiresExport;
      return $this;
    }

}
