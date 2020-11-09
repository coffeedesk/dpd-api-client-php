<?php

namespace DpdApi\Service\Model;

class DPDPackageObjServicesService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'generateProtocolV1' => 'DpdApi\\Service\\Model\\generateProtocolV1',
      'dpdServicesParamsV1' => 'DpdApi\\Service\\Model\\dpdServicesParamsV1',
      'pickupAddressDSPV1' => 'DpdApi\\Service\\Model\\pickupAddressDSPV1',
      'sessionDSPV1' => 'DpdApi\\Service\\Model\\sessionDSPV1',
      'packageDSPV1' => 'DpdApi\\Service\\Model\\packageDSPV1',
      'parcelDSPV1' => 'DpdApi\\Service\\Model\\parcelDSPV1',
      'authDataV1' => 'DpdApi\\Service\\Model\\authDataV1',
      'generateProtocolV1Response' => 'DpdApi\\Service\\Model\\generateProtocolV1Response',
      'documentGenerationResponseV1' => 'DpdApi\\Service\\Model\\documentGenerationResponseV1',
      'sessionDGRV1' => 'DpdApi\\Service\\Model\\sessionDGRV1',
      'packageDGRV1' => 'DpdApi\\Service\\Model\\packageDGRV1',
      'parcelDGRV1' => 'DpdApi\\Service\\Model\\parcelDGRV1',
      'statusInfoDGRV1' => 'DpdApi\\Service\\Model\\statusInfoDGRV1',
      'generateProtocolV2' => 'DpdApi\\Service\\Model\\generateProtocolV2',
      'generateProtocolV2Response' => 'DpdApi\\Service\\Model\\generateProtocolV2Response',
      'packagesPickupCallV3' => 'DpdApi\\Service\\Model\\packagesPickupCallV3',
      'dpdPickupCallParamsV3' => 'DpdApi\\Service\\Model\\dpdPickupCallParamsV3',
      'pickupCallSimplifiedDetailsDPPV1' => 'DpdApi\\Service\\Model\\pickupCallSimplifiedDetailsDPPV1',
      'pickupPackagesParamsDPPV1' => 'DpdApi\\Service\\Model\\pickupPackagesParamsDPPV1',
      'pickupCustomerDPPV1' => 'DpdApi\\Service\\Model\\pickupCustomerDPPV1',
      'pickupPayerDPPV1' => 'DpdApi\\Service\\Model\\pickupPayerDPPV1',
      'pickupSenderDPPV1' => 'DpdApi\\Service\\Model\\pickupSenderDPPV1',
      'packagesPickupCallV3Response' => 'DpdApi\\Service\\Model\\packagesPickupCallV3Response',
      'packagesPickupCallResponseV3' => 'DpdApi\\Service\\Model\\packagesPickupCallResponseV3',
      'statusInfoPCRV2' => 'DpdApi\\Service\\Model\\statusInfoPCRV2',
      'errorDetailsPCRV2' => 'DpdApi\\Service\\Model\\errorDetailsPCRV2',
      'packagesPickupCallV4' => 'DpdApi\\Service\\Model\\packagesPickupCallV4',
      'packagesPickupCallV4Response' => 'DpdApi\\Service\\Model\\packagesPickupCallV4Response',
      'packagesPickupCallV1' => 'DpdApi\\Service\\Model\\packagesPickupCallV1',
      'dpdPickupCallParamsV1' => 'DpdApi\\Service\\Model\\dpdPickupCallParamsV1',
      'contactInfoDPPV1' => 'DpdApi\\Service\\Model\\contactInfoDPPV1',
      'protocolDPPV1' => 'DpdApi\\Service\\Model\\protocolDPPV1',
      'packagesPickupCallV1Response' => 'DpdApi\\Service\\Model\\packagesPickupCallV1Response',
      'packagesPickupCallResponseV1' => 'DpdApi\\Service\\Model\\packagesPickupCallResponseV1',
      'protocolPCRV1' => 'DpdApi\\Service\\Model\\protocolPCRV1',
      'statusInfoPCRV1' => 'DpdApi\\Service\\Model\\statusInfoPCRV1',
      'packagesPickupCallV2' => 'DpdApi\\Service\\Model\\packagesPickupCallV2',
      'dpdPickupCallParamsV2' => 'DpdApi\\Service\\Model\\dpdPickupCallParamsV2',
      'packagesPickupCallV2Response' => 'DpdApi\\Service\\Model\\packagesPickupCallV2Response',
      'packagesPickupCallResponseV2' => 'DpdApi\\Service\\Model\\packagesPickupCallResponseV2',
      'appendParcelsToPackageV1' => 'DpdApi\\Service\\Model\\appendParcelsToPackageV1',
      'parcelsAppendV1' => 'DpdApi\\Service\\Model\\parcelsAppendV1',
      'parcelsAppendSearchCriteriaPAV1' => 'DpdApi\\Service\\Model\\parcelsAppendSearchCriteriaPAV1',
      'parcelAppendPAV1' => 'DpdApi\\Service\\Model\\parcelAppendPAV1',
      'appendParcelsToPackageV1Response' => 'DpdApi\\Service\\Model\\appendParcelsToPackageV1Response',
      'parcelsAppendResponseV1' => 'DpdApi\\Service\\Model\\parcelsAppendResponseV1',
      'invalidFieldPAV1' => 'DpdApi\\Service\\Model\\invalidFieldPAV1',
      'parcelsAppendParcelPAV1' => 'DpdApi\\Service\\Model\\parcelsAppendParcelPAV1',
      'getCourierOrderAvailabilityV1' => 'DpdApi\\Service\\Model\\getCourierOrderAvailabilityV1',
      'senderPlaceV1' => 'DpdApi\\Service\\Model\\senderPlaceV1',
      'getCourierOrderAvailabilityV1Response' => 'DpdApi\\Service\\Model\\getCourierOrderAvailabilityV1Response',
      'getCourierOrderAvailabilityResponseV1' => 'DpdApi\\Service\\Model\\getCourierOrderAvailabilityResponseV1',
      'courierOrderAvailabilityRangeV1' => 'DpdApi\\Service\\Model\\courierOrderAvailabilityRangeV1',
      'generateProtocolsWithDestinationsV1' => 'DpdApi\\Service\\Model\\generateProtocolsWithDestinationsV1',
      'dpdServicesParamsV2' => 'DpdApi\\Service\\Model\\dpdServicesParamsV2',
      'DeliveryDestinations' => 'DpdApi\\Service\\Model\\DeliveryDestinations',
      'sessionDSPV2' => 'DpdApi\\Service\\Model\\sessionDSPV2',
      'Packages' => 'DpdApi\\Service\\Model\\Packages',
      'packageDSPV2' => 'DpdApi\\Service\\Model\\packageDSPV2',
      'Parcels' => 'DpdApi\\Service\\Model\\Parcels',
      'parcelDSPV2' => 'DpdApi\\Service\\Model\\parcelDSPV2',
      'pickupAddressDSPV2' => 'DpdApi\\Service\\Model\\pickupAddressDSPV2',
      'deliveryDestination' => 'DpdApi\\Service\\Model\\deliveryDestination',
      'DepotList' => 'DpdApi\\Service\\Model\\DepotList',
      'protocolDepot' => 'DpdApi\\Service\\Model\\protocolDepot',
      'generateProtocolsWithDestinationsV1Response' => 'DpdApi\\Service\\Model\\generateProtocolsWithDestinationsV1Response',
      'documentGenerationResponseV2' => 'DpdApi\\Service\\Model\\documentGenerationResponseV2',
      'DestinationDataList' => 'DpdApi\\Service\\Model\\DestinationDataList',
      'destinationsData' => 'DpdApi\\Service\\Model\\destinationsData',
      'nonMatchingData' => 'DpdApi\\Service\\Model\\nonMatchingData',
      'sessionDGRV2' => 'DpdApi\\Service\\Model\\sessionDGRV2',
      'packageDGRV2' => 'DpdApi\\Service\\Model\\packageDGRV2',
      'parcelDGRV2' => 'DpdApi\\Service\\Model\\parcelDGRV2',
      'statusInfoDGRV2' => 'DpdApi\\Service\\Model\\statusInfoDGRV2',
      'generateSpedLabelsV1' => 'DpdApi\\Service\\Model\\generateSpedLabelsV1',
      'generateSpedLabelsV1Response' => 'DpdApi\\Service\\Model\\generateSpedLabelsV1Response',
      'generateProtocolsWithDestinationsV2' => 'DpdApi\\Service\\Model\\generateProtocolsWithDestinationsV2',
      'generateProtocolsWithDestinationsV2Response' => 'DpdApi\\Service\\Model\\generateProtocolsWithDestinationsV2Response',
      'generateSpedLabelsV4' => 'DpdApi\\Service\\Model\\generateSpedLabelsV4',
      'generateSpedLabelsV4Response' => 'DpdApi\\Service\\Model\\generateSpedLabelsV4Response',
      'generateSpedLabelsV3' => 'DpdApi\\Service\\Model\\generateSpedLabelsV3',
      'generateSpedLabelsV3Response' => 'DpdApi\\Service\\Model\\generateSpedLabelsV3Response',
      'generateSpedLabelsV2' => 'DpdApi\\Service\\Model\\generateSpedLabelsV2',
      'generateSpedLabelsV2Response' => 'DpdApi\\Service\\Model\\generateSpedLabelsV2Response',
      'importDeliveryBusinessEventV1' => 'DpdApi\\Service\\Model\\importDeliveryBusinessEventV1',
      'dpdParcelBusinessEventV1' => 'DpdApi\\Service\\Model\\dpdParcelBusinessEventV1',
      'dpdParcelBusinessEventDataV1' => 'DpdApi\\Service\\Model\\dpdParcelBusinessEventDataV1',
      'importDeliveryBusinessEventV1Response' => 'DpdApi\\Service\\Model\\importDeliveryBusinessEventV1Response',
      'importDeliveryBusinessEventResponseV1' => 'DpdApi\\Service\\Model\\importDeliveryBusinessEventResponseV1',
      'findPostalCodeV1' => 'DpdApi\\Service\\Model\\findPostalCodeV1',
      'postalCodeV1' => 'DpdApi\\Service\\Model\\postalCodeV1',
      'findPostalCodeV1Response' => 'DpdApi\\Service\\Model\\findPostalCodeV1Response',
      'findPostalCodeResponseV1' => 'DpdApi\\Service\\Model\\findPostalCodeResponseV1',
      'generatePackagesNumbersV1' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV1',
      'openUMLFeV1' => 'DpdApi\\Service\\Model\\openUMLFeV1',
      'packageOpenUMLFeV1' => 'DpdApi\\Service\\Model\\packageOpenUMLFeV1',
      'parcelOpenUMLFeV1' => 'DpdApi\\Service\\Model\\parcelOpenUMLFeV1',
      'packageAddressOpenUMLFeV1' => 'DpdApi\\Service\\Model\\packageAddressOpenUMLFeV1',
      'servicesOpenUMLFeV2' => 'DpdApi\\Service\\Model\\servicesOpenUMLFeV2',
      'serviceCarryInOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceCarryInOpenUMLFeV1',
      'serviceCODOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceCODOpenUMLFeV1',
      'serviceCUDOpenUMLeFV1' => 'DpdApi\\Service\\Model\\serviceCUDOpenUMLeFV1',
      'serviceDeclaredValueOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceDeclaredValueOpenUMLFeV1',
      'serviceDedicatedDeliveryOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceDedicatedDeliveryOpenUMLFeV1',
      'servicePalletOpenUMLFeV1' => 'DpdApi\\Service\\Model\\servicePalletOpenUMLFeV1',
      'serviceDutyOpenUMLeFV1' => 'DpdApi\\Service\\Model\\serviceDutyOpenUMLeFV1',
      'serviceGuaranteeOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceGuaranteeOpenUMLFeV1',
      'serviceInPersOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceInPersOpenUMLFeV1',
      'servicePrivPersOpenUMLFeV1' => 'DpdApi\\Service\\Model\\servicePrivPersOpenUMLFeV1',
      'serviceRODOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceRODOpenUMLFeV1',
      'serviceSelfColOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceSelfColOpenUMLFeV1',
      'serviceTiresOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceTiresOpenUMLFeV1',
      'serviceTiresExportOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceTiresExportOpenUMLFeV1',
      'generatePackagesNumbersV1Response' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV1Response',
      'packagesGenerationResponseV1' => 'DpdApi\\Service\\Model\\packagesGenerationResponseV1',
      'sessionPGRV1' => 'DpdApi\\Service\\Model\\sessionPGRV1',
      'packagePGRV1' => 'DpdApi\\Service\\Model\\packagePGRV1',
      'invalidFieldPGRV1' => 'DpdApi\\Service\\Model\\invalidFieldPGRV1',
      'parcelPGRV1' => 'DpdApi\\Service\\Model\\parcelPGRV1',
      'generatePackagesNumbersV2' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV2',
      'generatePackagesNumbersV2Response' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV2Response',
      'packagesGenerationResponseV2' => 'DpdApi\\Service\\Model\\packagesGenerationResponseV2',
      'sessionPGRV2' => 'DpdApi\\Service\\Model\\sessionPGRV2',
      'packagePGRV2' => 'DpdApi\\Service\\Model\\packagePGRV2',
      'ValidationDetails' => 'DpdApi\\Service\\Model\\ValidationDetails',
      'validationInfoPGRV2' => 'DpdApi\\Service\\Model\\validationInfoPGRV2',
      'parcelPGRV2' => 'DpdApi\\Service\\Model\\parcelPGRV2',
      'generatePackagesNumbersV3' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV3',
      'openUMLFeV2' => 'DpdApi\\Service\\Model\\openUMLFeV2',
      'packageOpenUMLFeV2' => 'DpdApi\\Service\\Model\\packageOpenUMLFeV2',
      'servicesOpenUMLFeV3' => 'DpdApi\\Service\\Model\\servicesOpenUMLFeV3',
      'serviceDpdPickupOpenUMLFeV1' => 'DpdApi\\Service\\Model\\serviceDpdPickupOpenUMLFeV1',
      'generatePackagesNumbersV3Response' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV3Response',
      'generatePackagesNumbersV4' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV4',
      'openUMLFeV3' => 'DpdApi\\Service\\Model\\openUMLFeV3',
      'packageOpenUMLFeV3' => 'DpdApi\\Service\\Model\\packageOpenUMLFeV3',
      'servicesOpenUMLFeV4' => 'DpdApi\\Service\\Model\\servicesOpenUMLFeV4',
      'serviceFlagOpenUMLF' => 'DpdApi\\Service\\Model\\serviceFlagOpenUMLF',
      'serviceDutyOpenUMLeFV2' => 'DpdApi\\Service\\Model\\serviceDutyOpenUMLeFV2',
      'generatePackagesNumbersV4Response' => 'DpdApi\\Service\\Model\\generatePackagesNumbersV4Response',
      'DPDServiceException' => 'DpdApi\\Service\\Model\\DPDServiceException',
      'Exception' => 'DpdApi\\Service\\Model\\Exception',
      'DeniedAccessWSException' => 'DpdApi\\Service\\Model\\DeniedAccessWSException',
      'SchemaValidationException' => 'DpdApi\\Service\\Model\\SchemaValidationException',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://dpdservices.dpd.com.pl/DPDPackageObjServicesService/DPDPackageObjServices?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param generateProtocolV1 $parameters
     * @return generateProtocolV1Response
     */
    public function generateProtocolV1(generateProtocolV1 $parameters)
    {
      return $this->__soapCall('generateProtocolV1', array($parameters));
    }

    /**
     * @param generateProtocolV2 $parameters
     * @return generateProtocolV2Response
     */
    public function generateProtocolV2(generateProtocolV2 $parameters)
    {
      return $this->__soapCall('generateProtocolV2', array($parameters));
    }

    /**
     * @param packagesPickupCallV3 $parameters
     * @return packagesPickupCallV3Response
     */
    public function packagesPickupCallV3(packagesPickupCallV3 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV3', array($parameters));
    }

    /**
     * @param packagesPickupCallV4 $parameters
     * @return packagesPickupCallV4Response
     */
    public function packagesPickupCallV4(packagesPickupCallV4 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV4', array($parameters));
    }

    /**
     * @param packagesPickupCallV1 $parameters
     * @return packagesPickupCallV1Response
     */
    public function packagesPickupCallV1(packagesPickupCallV1 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV1', array($parameters));
    }

    /**
     * @param packagesPickupCallV2 $parameters
     * @return packagesPickupCallV2Response
     */
    public function packagesPickupCallV2(packagesPickupCallV2 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV2', array($parameters));
    }

    /**
     * @param appendParcelsToPackageV1 $parameters
     * @return appendParcelsToPackageV1Response
     */
    public function appendParcelsToPackageV1(appendParcelsToPackageV1 $parameters)
    {
      return $this->__soapCall('appendParcelsToPackageV1', array($parameters));
    }

    /**
     * @param getCourierOrderAvailabilityV1 $parameters
     * @return getCourierOrderAvailabilityV1Response
     */
    public function getCourierOrderAvailabilityV1(getCourierOrderAvailabilityV1 $parameters)
    {
      return $this->__soapCall('getCourierOrderAvailabilityV1', array($parameters));
    }

    /**
     * @param generateProtocolsWithDestinationsV1 $parameters
     * @return generateProtocolsWithDestinationsV1Response
     */
    public function generateProtocolsWithDestinationsV1(generateProtocolsWithDestinationsV1 $parameters)
    {
      return $this->__soapCall('generateProtocolsWithDestinationsV1', array($parameters));
    }

    /**
     * @param generateSpedLabelsV1 $parameters
     * @return generateSpedLabelsV1Response
     */
    public function generateSpedLabelsV1(generateSpedLabelsV1 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV1', array($parameters));
    }

    /**
     * @param generateProtocolsWithDestinationsV2 $parameters
     * @return generateProtocolsWithDestinationsV2Response
     */
    public function generateProtocolsWithDestinationsV2(generateProtocolsWithDestinationsV2 $parameters)
    {
      return $this->__soapCall('generateProtocolsWithDestinationsV2', array($parameters));
    }

    /**
     * @param generateSpedLabelsV4 $parameters
     * @return generateSpedLabelsV4Response
     */
    public function generateSpedLabelsV4(generateSpedLabelsV4 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV4', array($parameters));
    }

    /**
     * @param generateSpedLabelsV3 $parameters
     * @return generateSpedLabelsV3Response
     */
    public function generateSpedLabelsV3(generateSpedLabelsV3 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV3', array($parameters));
    }

    /**
     * @param generateSpedLabelsV2 $parameters
     * @return generateSpedLabelsV2Response
     */
    public function generateSpedLabelsV2(generateSpedLabelsV2 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV2', array($parameters));
    }

    /**
     * @param importDeliveryBusinessEventV1 $parameters
     * @return importDeliveryBusinessEventV1Response
     */
    public function importDeliveryBusinessEventV1(importDeliveryBusinessEventV1 $parameters)
    {
      return $this->__soapCall('importDeliveryBusinessEventV1', array($parameters));
    }

    /**
     * @param findPostalCodeV1 $parameters
     * @return findPostalCodeV1Response
     */
    public function findPostalCodeV1(findPostalCodeV1 $parameters)
    {
      return $this->__soapCall('findPostalCodeV1', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV1 $parameters
     * @return generatePackagesNumbersV1Response
     */
    public function generatePackagesNumbersV1(generatePackagesNumbersV1 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV1', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV2 $parameters
     * @return generatePackagesNumbersV2Response
     */
    public function generatePackagesNumbersV2(generatePackagesNumbersV2 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV2', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV3 $parameters
     * @return generatePackagesNumbersV3Response
     */
    public function generatePackagesNumbersV3(generatePackagesNumbersV3 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV3', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV4 $parameters
     * @return generatePackagesNumbersV4Response
     */
    public function generatePackagesNumbersV4(generatePackagesNumbersV4 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV4', array($parameters));
    }

}
