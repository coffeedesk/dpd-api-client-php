<?php


 function autoload_3cb3e75f53a22875ed343c1286b19656($class)
{
    $classes = array(
        'DpdApi\InfoService\Model\DPDInfoServicesObjEventsService' => __DIR__ .'/DPDInfoServicesObjEventsService.php',
        'DpdApi\InfoService\Model\markEventsAsProcessedV1' => __DIR__ .'/markEventsAsProcessedV1.php',
        'DpdApi\InfoService\Model\authDataV1' => __DIR__ .'/authDataV1.php',
        'DpdApi\InfoService\Model\markEventsAsProcessedV1Response' => __DIR__ .'/markEventsAsProcessedV1Response.php',
        'DpdApi\InfoService\Model\Exception' => __DIR__ .'/Exception.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV4' => __DIR__ .'/getEventsForCustomerV4.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV4Response' => __DIR__ .'/getEventsForCustomerV4Response.php',
        'DpdApi\InfoService\Model\customerEventsResponseV2' => __DIR__ .'/customerEventsResponseV2.php',
        'DpdApi\InfoService\Model\customerEventV2' => __DIR__ .'/customerEventV2.php',
        'DpdApi\InfoService\Model\customerEventDataV2' => __DIR__ .'/customerEventDataV2.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV3' => __DIR__ .'/getEventsForCustomerV3.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV3Response' => __DIR__ .'/getEventsForCustomerV3Response.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV2' => __DIR__ .'/getEventsForCustomerV2.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV2Response' => __DIR__ .'/getEventsForCustomerV2Response.php',
        'DpdApi\InfoService\Model\customerEventsResponseV1' => __DIR__ .'/customerEventsResponseV1.php',
        'DpdApi\InfoService\Model\customerEventV1' => __DIR__ .'/customerEventV1.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV1' => __DIR__ .'/getEventsForCustomerV1.php',
        'DpdApi\InfoService\Model\getEventsForCustomerV1Response' => __DIR__ .'/getEventsForCustomerV1Response.php',
        'DpdApi\InfoService\Model\getEventsForWaybillV1' => __DIR__ .'/getEventsForWaybillV1.php',
        'DpdApi\InfoService\Model\getEventsForWaybillV1Response' => __DIR__ .'/getEventsForWaybillV1Response.php',
        'DpdApi\InfoService\Model\customerEventsResponseV3' => __DIR__ .'/customerEventsResponseV3.php',
        'DpdApi\InfoService\Model\customerEventV3' => __DIR__ .'/customerEventV3.php',
        'DpdApi\InfoService\Model\customerEventDataV3' => __DIR__ .'/customerEventDataV3.php',
        'DpdApi\InfoService\Model\eventsSelectTypeEnum' => __DIR__ .'/eventsSelectTypeEnum.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3cb3e75f53a22875ed343c1286b19656');

// Do nothing. The rest is just leftovers from the code generation.
{
}
