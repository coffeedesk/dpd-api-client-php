<?php

namespace DpdApi\Service\Model;

class pickupAddressDSPV2
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $Fid
     */
    protected $Fid = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return int
     */
    public function getFid()
    {
      return $this->Fid;
    }

    /**
     * @param int $Fid
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setFid($Fid)
    {
      $this->Fid = $Fid;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \DpdApi\Service\Model\pickupAddressDSPV2
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

}
