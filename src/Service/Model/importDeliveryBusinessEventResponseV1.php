<?php

namespace DpdApi\Service\Model;

class importDeliveryBusinessEventResponseV1
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var importDeliveryBusinessEventStatusEnumV1 $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \DpdApi\Service\Model\importDeliveryBusinessEventResponseV1
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return importDeliveryBusinessEventStatusEnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param importDeliveryBusinessEventStatusEnumV1 $status
     * @return \DpdApi\Service\Model\importDeliveryBusinessEventResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
