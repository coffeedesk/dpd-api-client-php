<?php

namespace DpdApi\Service\Model;

class importDeliveryBusinessEventV1
{

    /**
     * @var dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1
     */
    protected $dpdParcelBusinessEventV1 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdParcelBusinessEventV1
     */
    public function getDpdParcelBusinessEventV1()
    {
      return $this->dpdParcelBusinessEventV1;
    }

    /**
     * @param dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1
     * @return \DpdApi\Service\Model\importDeliveryBusinessEventV1
     */
    public function setDpdParcelBusinessEventV1($dpdParcelBusinessEventV1)
    {
      $this->dpdParcelBusinessEventV1 = $dpdParcelBusinessEventV1;
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
     * @return \DpdApi\Service\Model\importDeliveryBusinessEventV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
