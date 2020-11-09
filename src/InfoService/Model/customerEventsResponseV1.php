<?php

namespace DpdApi\InfoService\Model;

class customerEventsResponseV1
{

    /**
     * @var string $confirmId
     */
    protected $confirmId = null;

    /**
     * @var customerEventV1[] $eventsList
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
     * @return \DpdApi\InfoService\Model\customerEventsResponseV1
     */
    public function setConfirmId($confirmId)
    {
      $this->confirmId = $confirmId;
      return $this;
    }

    /**
     * @return customerEventV1[]
     */
    public function getEventsList()
    {
      return $this->eventsList;
    }

    /**
     * @param customerEventV1[] $eventsList
     * @return \DpdApi\InfoService\Model\customerEventsResponseV1
     */
    public function setEventsList(array $eventsList = null)
    {
      $this->eventsList = $eventsList;
      return $this;
    }

}
