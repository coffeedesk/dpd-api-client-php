<?php

namespace DpdApi\InfoService\Model;

class customerEventsResponseV2
{

    /**
     * @var string $confirmId
     */
    protected $confirmId = null;

    /**
     * @var customerEventV2[] $eventsList
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
     * @return \DpdApi\InfoService\Model\customerEventsResponseV2
     */
    public function setConfirmId($confirmId)
    {
      $this->confirmId = $confirmId;
      return $this;
    }

    /**
     * @return customerEventV2[]
     */
    public function getEventsList()
    {
      return $this->eventsList;
    }

    /**
     * @param customerEventV2[] $eventsList
     * @return \DpdApi\InfoService\Model\customerEventsResponseV2
     */
    public function setEventsList(array $eventsList = null)
    {
      $this->eventsList = $eventsList;
      return $this;
    }

}
