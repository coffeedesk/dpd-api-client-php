<?php

namespace DpdApi\InfoService\Model;

class DPDInfoServicesObjEventsService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'markEventsAsProcessedV1' => 'DpdApi\\InfoService\\Model\\markEventsAsProcessedV1',
      'authDataV1' => 'DpdApi\\InfoService\\Model\\authDataV1',
      'markEventsAsProcessedV1Response' => 'DpdApi\\InfoService\\Model\\markEventsAsProcessedV1Response',
      'Exception' => 'DpdApi\\InfoService\\Model\\Exception',
      'getEventsForCustomerV4' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV4',
      'getEventsForCustomerV4Response' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV4Response',
      'customerEventsResponseV2' => 'DpdApi\\InfoService\\Model\\customerEventsResponseV2',
      'customerEventV2' => 'DpdApi\\InfoService\\Model\\customerEventV2',
      'customerEventDataV2' => 'DpdApi\\InfoService\\Model\\customerEventDataV2',
      'getEventsForCustomerV3' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV3',
      'getEventsForCustomerV3Response' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV3Response',
      'getEventsForCustomerV2' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV2',
      'getEventsForCustomerV2Response' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV2Response',
      'customerEventsResponseV1' => 'DpdApi\\InfoService\\Model\\customerEventsResponseV1',
      'customerEventV1' => 'DpdApi\\InfoService\\Model\\customerEventV1',
      'getEventsForCustomerV1' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV1',
      'getEventsForCustomerV1Response' => 'DpdApi\\InfoService\\Model\\getEventsForCustomerV1Response',
      'getEventsForWaybillV1' => 'DpdApi\\InfoService\\Model\\getEventsForWaybillV1',
      'getEventsForWaybillV1Response' => 'DpdApi\\InfoService\\Model\\getEventsForWaybillV1Response',
      'customerEventsResponseV3' => 'DpdApi\\InfoService\\Model\\customerEventsResponseV3',
      'customerEventV3' => 'DpdApi\\InfoService\\Model\\customerEventV3',
      'customerEventDataV3' => 'DpdApi\\InfoService\\Model\\customerEventDataV3',
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
        $wsdl = 'https://dpdinfoservices.dpd.com.pl/DPDInfoServicesObjEventsService/DPDInfoServicesObjEvents?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param markEventsAsProcessedV1 $parameters
     * @return markEventsAsProcessedV1Response
     */
    public function markEventsAsProcessedV1(markEventsAsProcessedV1 $parameters)
    {
      return $this->__soapCall('markEventsAsProcessedV1', array($parameters));
    }

    /**
     * @param getEventsForCustomerV1 $parameters
     * @return getEventsForCustomerV1Response
     */
    public function getEventsForCustomerV1(getEventsForCustomerV1 $parameters)
    {
      return $this->__soapCall('getEventsForCustomerV1', array($parameters));
    }

    /**
     * @param getEventsForCustomerV2 $parameters
     * @return getEventsForCustomerV2Response
     */
    public function getEventsForCustomerV2(getEventsForCustomerV2 $parameters)
    {
      return $this->__soapCall('getEventsForCustomerV2', array($parameters));
    }

    /**
     * @param getEventsForWaybillV1 $parameters
     * @return getEventsForWaybillV1Response
     */
    public function getEventsForWaybillV1(getEventsForWaybillV1 $parameters)
    {
      return $this->__soapCall('getEventsForWaybillV1', array($parameters));
    }

    /**
     * @param getEventsForCustomerV3 $parameters
     * @return getEventsForCustomerV3Response
     */
    public function getEventsForCustomerV3(getEventsForCustomerV3 $parameters)
    {
      return $this->__soapCall('getEventsForCustomerV3', array($parameters));
    }

    /**
     * @param getEventsForCustomerV4 $parameters
     * @return getEventsForCustomerV4Response
     */
    public function getEventsForCustomerV4(getEventsForCustomerV4 $parameters)
    {
      return $this->__soapCall('getEventsForCustomerV4', array($parameters));
    }

}
