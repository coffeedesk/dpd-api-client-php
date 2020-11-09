<?php

namespace DpdApi\Service\Model;

class pickupAddressDSPV1
{

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var int $fid
     */
    protected $fid = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
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
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return int
     */
    public function getFid()
    {
      return $this->fid;
    }

    /**
     * @param int $fid
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setFid($fid)
    {
      $this->fid = $fid;
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
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
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
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \DpdApi\Service\Model\pickupAddressDSPV1
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

}
