<?php

namespace DpdApi\Service\Model;

class parcelOpenUMLFeV1
{

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $weight
     */
    protected $weight = null;

    /**
     * @var string $sizeX
     */
    protected $sizeX = null;

    /**
     * @var string $sizeY
     */
    protected $sizeY = null;

    /**
     * @var string $sizeZ
     */
    protected $sizeZ = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $customerData1
     */
    protected $customerData1 = null;

    /**
     * @var string $customerData2
     */
    protected $customerData2 = null;

    /**
     * @var string $customerData3
     */
    protected $customerData3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param string $weight
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeX()
    {
      return $this->sizeX;
    }

    /**
     * @param string $sizeX
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setSizeX($sizeX)
    {
      $this->sizeX = $sizeX;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeY()
    {
      return $this->sizeY;
    }

    /**
     * @param string $sizeY
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setSizeY($sizeY)
    {
      $this->sizeY = $sizeY;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeZ()
    {
      return $this->sizeZ;
    }

    /**
     * @param string $sizeZ
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setSizeZ($sizeZ)
    {
      $this->sizeZ = $sizeZ;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData1()
    {
      return $this->customerData1;
    }

    /**
     * @param string $customerData1
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setCustomerData1($customerData1)
    {
      $this->customerData1 = $customerData1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData2()
    {
      return $this->customerData2;
    }

    /**
     * @param string $customerData2
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setCustomerData2($customerData2)
    {
      $this->customerData2 = $customerData2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerData3()
    {
      return $this->customerData3;
    }

    /**
     * @param string $customerData3
     * @return \DpdApi\Service\Model\parcelOpenUMLFeV1
     */
    public function setCustomerData3($customerData3)
    {
      $this->customerData3 = $customerData3;
      return $this;
    }

}
