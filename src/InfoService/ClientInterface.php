<?php

namespace DpdApi\InfoService;


use DpdApi\InfoService\Model\eventsSelectTypeEnum;

interface ClientInterface
{
    /**
     * ClientInterface constructor.
     * @param string $login
     * @param string $password
     * @param string $channel
     * @param string|null $wsdl
     */
    public function __construct($login, $password, $channel, $wsdl = null);

    /**
     * @param string $waybill
     * @param eventsSelectTypeEnum|string $eventsSelectTypeEnum
     * @param string|null $language
     * @return Model\getEventsForWaybillV1Response
     */
    public function getEventsForWaybillV1($waybill, $eventsSelectTypeEnum, $language);

    /**
     * @param int|null $limit
     * @param string|null $language
     * @return Model\getEventsForCustomerV4Response
     */
    public function getEventsForCustomerV4($limit, $language);

    /**
     * @param string $confirmId
     * @return Model\markEventsAsProcessedV1Response
     */
    public function markEventsAsProcessedV1($confirmId);
}
