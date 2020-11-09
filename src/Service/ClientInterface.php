<?php


namespace DpdApi\Service;


use DpdApi\Service\Model\dpdParcelBusinessEventV1;
use DpdApi\Service\Model\dpdPickupCallParamsV3;
use DpdApi\Service\Model\dpdServicesParamsV1;
use DpdApi\Service\Model\dpdServicesParamsV2;
use DpdApi\Service\Model\openUMLFeV3;
use DpdApi\Service\Model\outputDocFormatDSPEnumV1;
use DpdApi\Service\Model\outputDocPageFormatDSPEnumV1;
use DpdApi\Service\Model\outputLabelTypeEnumV1;
use DpdApi\Service\Model\parcelsAppendV1;
use DpdApi\Service\Model\pkgNumsGenerationPolicyV1;
use DpdApi\Service\Model\postalCodeV1;
use DpdApi\Service\Model\senderPlaceV1;

interface ClientInterface
{
    /**
     * ClientInterface constructor.
     * @param string $login
     * @param string $password
     * @param string $masterFid
     * @param string|null $wsdl
     */
    public function __construct($login, $password, $masterFid, $wsdl = null);

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
    );

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
    );

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
    );

    /**
     * @param dpdServicesParamsV2 $dpdServicesParamsV2
     * @return Model\generateProtocolsWithDestinationsV2Response
     */
    public function generateProtocolsWithDestinationsV2(dpdServicesParamsV2 $dpdServicesParamsV2);

    /**
     * @param dpdPickupCallParamsV3 $dpdPickupCallParamsV3
     * @return Model\packagesPickupCallV4Response
     */
    public function packagesPickupCallV4(dpdPickupCallParamsV3 $dpdPickupCallParamsV3);

    /**
     * @param postalCodeV1 $postalCodeV1
     * @return Model\findPostalCodeV1Response
     */
    public function findPostalCodeV1(postalCodeV1 $postalCodeV1);

    /**
     * @param senderPlaceV1 $senderPlaceV1
     * @return Model\getCourierOrderAvailabilityV1Response
     */
    public function getCourierOrderAvailabilityV1(senderPlaceV1 $senderPlaceV1);

    /**
     * @param dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1
     * @return Model\importDeliveryBusinessEventV1Response
     */
    public function importDeliveryBusinessEventV1(dpdParcelBusinessEventV1 $dpdParcelBusinessEventV1);

    /**
     * @param parcelsAppendV1 $parcelsAppendV1
     * @return Model\appendParcelsToPackageV1Response
     */
    public function appendParcelsToPackageV1(parcelsAppendV1 $parcelsAppendV1);
}
