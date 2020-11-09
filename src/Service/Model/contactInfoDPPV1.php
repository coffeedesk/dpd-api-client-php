<?php

namespace DpdApi\Service\Model;

class contactInfoDPPV1
{

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \DpdApi\Service\Model\contactInfoDPPV1
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return \DpdApi\Service\Model\contactInfoDPPV1
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \DpdApi\Service\Model\contactInfoDPPV1
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \DpdApi\Service\Model\contactInfoDPPV1
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \DpdApi\Service\Model\contactInfoDPPV1
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

}
