<?php

namespace DpdApi\InfoService\Model;

class customerEventsResponseV3
{

    /**
     * @var string $confirmId
     */
    protected $confirmId = null;

    /**
     * @var customerEventV3[] $eventsList
     */
    protected $eventsList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getConfirmId()
    {
      return $this->confirmId;
    }

    /**
     * @param string $confirmId
     * @return \DpdApi\InfoService\Model\customerEventsResponseV3
     */
    public function setConfirmId($confirmId)
    {
      $this->confirmId = $confirmId;
      return $this;
    }

    /**
     * @return customerEventV3[]
     */
    public function getEventsList()
    {
      return $this->eventsList;
    }

    /**
     * @param customerEventV3[] $eventsList
     * @return \DpdApi\InfoService\Model\customerEventsResponseV3
     */
    public function setEventsList(array $eventsList = null)
    {
      $this->eventsList = $eventsList;
      return $this;
    }

}
