<?php

namespace DpdApi\InfoService\Model;

class authDataV1
{

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \DpdApi\InfoService\Model\authDataV1
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \DpdApi\InfoService\Model\authDataV1
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \DpdApi\InfoService\Model\authDataV1
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
