<?php

namespace DpdApi\Service\Model;

class getCourierOrderAvailabilityResponseV1
{

    /**
     * @var courierOrderAvailabilityRangeV1[] $ranges
     */
    protected $ranges = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return courierOrderAvailabilityRangeV1[]
     */
    public function getRanges()
    {
      return $this->ranges;
    }

    /**
     * @param courierOrderAvailabilityRangeV1[] $ranges
     * @return \DpdApi\Service\Model\getCourierOrderAvailabilityResponseV1
     */
    public function setRanges(array $ranges = null)
    {
      $this->ranges = $ranges;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DpdApi\Service\Model\getCourierOrderAvailabilityResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
