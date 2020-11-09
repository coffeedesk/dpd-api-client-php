<?php

namespace DpdApi\Service\Model;

class dpdPickupCallParamsV3
{

    /**
     * @var int $checkSum
     */
    protected $checkSum = null;

    /**
     * @var pickupCallOperationTypeDPPEnumV1 $operationType
     */
    protected $operationType = null;

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var pickupCallOrderTypeDPPEnumV1 $orderType
     */
    protected $orderType = null;

    /**
     * @var pickupCallSimplifiedDetailsDPPV1 $pickupCallSimplifiedDetails
     */
    protected $pickupCallSimplifiedDetails = null;

    /**
     * @var string $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var string $pickupTimeFrom
     */
    protected $pickupTimeFrom = null;

    /**
     * @var string $pickupTimeTo
     */
    protected $pickupTimeTo = null;

    /**
     * @var pickupCallUpdateModeDPPEnumV1 $updateMode
     */
    protected $updateMode = null;

    /**
     * @var boolean $waybillsReady
     */
    protected $waybillsReady = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCheckSum()
    {
      return $this->checkSum;
    }

    /**
     * @param int $checkSum
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setCheckSum($checkSum)
    {
      $this->checkSum = $checkSum;
      return $this;
    }

    /**
     * @return pickupCallOperationTypeDPPEnumV1
     */
    public function getOperationType()
    {
      return $this->operationType;
    }

    /**
     * @param pickupCallOperationTypeDPPEnumV1 $operationType
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setOperationType($operationType)
    {
      $this->operationType = $operationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

    /**
     * @return pickupCallOrderTypeDPPEnumV1
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param pickupCallOrderTypeDPPEnumV1 $orderType
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
      return $this;
    }

    /**
     * @return pickupCallSimplifiedDetailsDPPV1
     */
    public function getPickupCallSimplifiedDetails()
    {
      return $this->pickupCallSimplifiedDetails;
    }

    /**
     * @param pickupCallSimplifiedDetailsDPPV1 $pickupCallSimplifiedDetails
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setPickupCallSimplifiedDetails($pickupCallSimplifiedDetails)
    {
      $this->pickupCallSimplifiedDetails = $pickupCallSimplifiedDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
      return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setPickupDate($pickupDate)
    {
      $this->pickupDate = $pickupDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom()
    {
      return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setPickupTimeFrom($pickupTimeFrom)
    {
      $this->pickupTimeFrom = $pickupTimeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo()
    {
      return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setPickupTimeTo($pickupTimeTo)
    {
      $this->pickupTimeTo = $pickupTimeTo;
      return $this;
    }

    /**
     * @return pickupCallUpdateModeDPPEnumV1
     */
    public function getUpdateMode()
    {
      return $this->updateMode;
    }

    /**
     * @param pickupCallUpdateModeDPPEnumV1 $updateMode
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setUpdateMode($updateMode)
    {
      $this->updateMode = $updateMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWaybillsReady()
    {
      return $this->waybillsReady;
    }

    /**
     * @param boolean $waybillsReady
     * @return \DpdApi\Service\Model\dpdPickupCallParamsV3
     */
    public function setWaybillsReady($waybillsReady)
    {
      $this->waybillsReady = $waybillsReady;
      return $this;
    }

}
