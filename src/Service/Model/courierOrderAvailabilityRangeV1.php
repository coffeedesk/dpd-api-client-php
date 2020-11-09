<?php

namespace DpdApi\Service\Model;

class courierOrderAvailabilityRangeV1
{

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var string $range
     */
    protected $range = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \DpdApi\Service\Model\courierOrderAvailabilityRangeV1
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return string
     */
    public function getRange()
    {
      return $this->range;
    }

    /**
     * @param string $range
     * @return \DpdApi\Service\Model\courierOrderAvailabilityRangeV1
     */
    public function setRange($range)
    {
      $this->range = $range;
      return $this;
    }

}
