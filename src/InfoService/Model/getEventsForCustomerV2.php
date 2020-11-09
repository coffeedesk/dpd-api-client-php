<?php

namespace DpdApi\InfoService\Model;

class getEventsForCustomerV2
{

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \DpdApi\InfoService\Model\getEventsForCustomerV2
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \DpdApi\InfoService\Model\getEventsForCustomerV2
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return authDataV1
     */
    public function getAuthDataV1()
    {
      return $this->authDataV1;
    }

    /**
     * @param authDataV1 $authDataV1
     * @return \DpdApi\InfoService\Model\getEventsForCustomerV2
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
