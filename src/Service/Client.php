<?php

namespace DpdApi\Service;


use DpdApi\Service\Model\appendParcelsToPackageV1;
use DpdApi\Service\Model\authDataV1;
use DpdApi\Service\Model\DPDPackageObjServicesService;
use DpdApi\Service\Model\dpdParcelBusinessEventV1;
use DpdApi\Service\Model\dpdPickupCallParamsV3;
use DpdApi\Service\Model\dpdServicesParamsV1;
use DpdApi\Service\Model\dpdServicesParamsV2;
use DpdApi\Service\Model\findPostalCodeV1;
use DpdApi\Service\Model\generatePackagesNumbersV4;
use DpdApi\Service\Model\generateProtocolsWithDestinationsV2;
use DpdApi\Service\Model\generateProtocolV2;
use DpdApi\Service\Model\generateSpedLabelsV4;
use DpdApi\Service\Model\getCourierOrderAvailabilityV1;
use DpdApi\Service\Model\importDeliveryBusinessEventV1;
use DpdApi\Service\Model\openUMLFeV3;
use DpdApi\Service\Model\outputDocFormatDSPEnumV1;
use DpdApi\Service\Model\outputDocPageFormatDSPEnumV1;
use DpdApi\Service\Model\outputLabelTypeEnumV1;
use DpdApi\Service\Model\packagesPickupCallV4;
use DpdApi\Service\Model\parcelsAppendV1;
use DpdApi\Service\Model\pkgNumsGenerationPolicyV1;
use DpdApi\Service\Model\postalCodeV1;
use DpdApi\Service\Model\senderPlaceV1;

class Client implements ClientInterface
{
    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /** @var string */
    private $masterFid;

    /** @var authDataV1 */
    private $authData;

    /** @var DPDPackageObjServicesService */
    private $service;

    public function __construct($login, $password, $masterFid, $wsdl = null, $options = [])
    {
        $this->login = $login;
        $this->password = $password;
        $this->masterFid = $masterFid;

        $this->authData = new authDataV1();
        $this->authData->setLogin($login);
        $this->authData->setPassword($password);
        $this->authData->setMasterFid($masterFid);

        $this->service = new DPDPackageObjServicesService($options, $wsdl);
    }

    /**
     * @param openUMLFeV3 $openUMLFeV3
     * @param pkgNumsGenerationPolicyV1|string|null $pkgNumsGenerationPolicyV1
     * @param string|null $langCode
     * @return Model\generatePackagesNumbersV4Response
     */
    public function generatePackagesNumbersV4(
        openUMLFeV3 $openUMLFeV3,
        $pkgNumsGenerationPolicyV1,
        $langCode
    ) {
        $generatePackagesNumbersV4 = new generatePackagesNumbersV4();
        $generatePackagesNumbersV4->setAuthDataV1($this->authData);
        $generatePackagesNumbersV4->setOpenUMLFeV3($openUMLFeV3);
        $generatePackagesNumbersV4->setPkgNumsGenerationPolicyV1($pkgNumsGenerationPolicyV1);
        $generatePackagesNumbersV4->setLangCode($langCode);

        return $this->service->generatePackagesNumbersV4($generatePackagesNumbersV4);
    }

    /**
     * @param dpdServicesParamsV1 $dpdServicesParamsV1
     * @param outputDocFormatDSPEnumV1|string|null $outputDocFormatDSPEnumV1
     * @param outputDocPageFormatDSPEnumV1|string|null $outputDocPageFormatDSPEnumV1
     * @param outputLabelTypeEnumV1|string|null $outputLabelTypeEnumV1
     * @param string $labelVariant
     * @return Model\generateSpedLabelsV4Response
     */
    public function generateSpedLabelsV4(
        dpdServicesParamsV1 $dpdServicesParamsV1,
        $outputDocFormatDSPEnumV1,
        $outputDocPageFormatDSPEnumV1,
        $outputLabelTypeEnumV1,
        $labelVariant
    ) {
        $generateSpedLabelsV4 = new generateSpedLabelsV4();
        $generateSpedLabelsV4->setAuthDataV1($this->authData);
        $generateSpedLabelsV4->setDpdServicesParamsV1($dpdServicesParamsV1);
        $generateSpedLabelsV4->setOutputDocFormatV1($outputDocFormatDSPEnumV1);
        $generateSpedLabelsV4->setOutputDocPageFormatV1($outputDocPageFormatDSPEnumV1);
        $generateSpedLabelsV4->setOutputLabelType($outputLabelTypeEnumV1);
        $generateSpedLabelsV4->setLabelVariant($labelVariant);

        return $this->service->generateSpedLabelsV4($generateSpedLabelsV4);
    }

    /**
     * @param dpdServicesParamsV1 $dpdServicesParamsV1
     * @param outputDocPageFormatDSPEnumV1|string|null $outputDocPageFormatDSPEnumV1
     * @param outputDocFormatDSPEnumV1|string|null $outputDocFormatDSPEnumV1
     * @return Model\generateProtocolV2Response
     */
    public function generateProtocolV2(
        dpdServicesParamsV1 $dpdServicesParamsV1,
        $outputDocPageFormatDSPEnumV1,
        $outputDocFormatDSPEnumV1
    ) {
        $generateProtocolV2 = new generateProtocolV2();
        $generateProtocolV2->setAuthDataV1($this->authData);
        $generateProtocolV2->setDpdServicesParamsV1($dpdServicesParamsV1);
        $generateProtocolV2->setOutputDocPageFormatV1($outputDocPageFormatDSPEnumV1);
        $generateProtocolV2->setOutputDocFormatV1($outputDocFormatDSPEnumV1);

        return $this->service->generateProtocolV2($generateProtocolV2);
    }

    /**
     * @param dpdServicesParamsV2 $dpdServicesParamsV2
     * @return Model\generateProtocolsWithDestinationsV2Response
     */
    public function generateProtocolsWithDestinationsV2(dpdServicesParamsV2 $dpdServicesParamsV2)
    {
        $generateProtocolsWithDestinationsV2 = new generateProtocolsWithDestinationsV2();
        $generateProtocolsWithDestinationsV2->setAuthDataV1($this->authData);
        $generateProtocolsWithDestinationsV2->setDpdServicesParamsV2($dpdServicesParamsV2);

        return $this->service->generateProtocolsWithDestinationsV2($generateProtocolsWithDestinationsV2);
    }

    /**
     * @param dpdPickupCallParamsV3 $dpdPickupCallParamsV3
     * @return Model\packagesPickupCallV4Response
     */
    public function packagesPickupCallV4(dpdPickupCallParamsV3 $dpdPickupCallParamsV3)
    {
        $packagesPickupCallV4 = new packagesPickupCallV4();
        $packagesPickupCallV4->setAuthDataV1($this->authData);
        $packagesPickupCallV4->setDpdPickupParamsV3($dpdPickupCallParamsV3);

        return $this->service->packagesPickupCallV4($packagesPickupCallV4);
    }

    /**
     * @param postalCodeV1 $postalCodeV1
     * @return Model\findPostalCodeV1Response
     */
    public function findPostalCodeV1(postalCodeV1 $postalCodeV1)
    {
        $findPostalCodeV1 = new findPostalCodeV1();
        $findPostalCodeV1->setAuthDataV1($this->authData);
        $findPostalCodeV1->setPostalCodeV1($postalCodeV1);

        return $this->service->findPostalCodeV1($findPostalCodeV1);
    }

    /**
     * @param senderPlaceV1 $senderPlaceV1
     * @return Model\getCourierOrderAvailabilityV1Response
     */
    public function getCourierOrderAvailabilityV1(senderPlaceV1 $senderPlaceV1)
    {
        $getCourierOrderAvailabilityV1 = new getCourierOrderAvailabilityV1();
        $getCourierOrderAvailabilityV1->setAuthDataV1($this->authData);
        $getCourierOrderAvailabilityV1->setSenderPlaceV1($senderPlaceV1);

        return $this->service->getCourierOrderAvailabilityV1($getCourierOrderAvailabilityV1);
    }

    /**
     * @param dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1
     * @return Model\importDeliveryBusinessEventV1Response
     */
    public function importDeliveryBusinessEventV1(dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1)
    {
        $importDeliveryBusinessEventV1 = new importDeliveryBusinessEventV1();
        $importDeliveryBusinessEventV1->setAuthDataV1($this->authData);
        $importDeliveryBusinessEventV1->setDpdParcelBusinessEventV1($dpdParcelBusinessEventV1);

        return $this->service->importDeliveryBusinessEventV1($importDeliveryBusinessEventV1);
    }

    /**
     * @param parcelsAppendV1 $parcelsAppendV1
     * @return Model\appendParcelsToPackageV1Response
     */
    public function appendParcelsToPackageV1(parcelsAppendV1 $parcelsAppendV1)
    {
        $appendParcelsToPackageV1 = new appendParcelsToPackageV1();
        $appendParcelsToPackageV1->setAuthDataV1($this->authData);
        $appendParcelsToPackageV1->setParcelsAppend($parcelsAppendV1);

        return $this->service->appendParcelsToPackageV1($appendParcelsToPackageV1);
    }
}
