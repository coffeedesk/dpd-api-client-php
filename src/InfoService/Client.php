<?php

namespace DpdApi\InfoService;

use DpdApi\InfoService\Model\authDataV1;
use DpdApi\InfoService\Model\DPDInfoServicesObjEventsService;
use DpdApi\InfoService\Model\eventsSelectTypeEnum;
use DpdApi\InfoService\Model\getEventsForCustomerV4;
use DpdApi\InfoService\Model\getEventsForWaybillV1;
use DpdApi\InfoService\Model\markEventsAsProcessedV1;

class Client implements ClientInterface
{
    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /** @var string */
    private $channel;

    /** @var authDataV1 */
    private $authData;

    /** @var DPDInfoServicesObjEventsService */
    private $infoService;

    public function __construct($login, $password, $channel, $wsdl = null, $options = [])
    {
        $this->login = $login;
        $this->password = $password;
        $this->channel = $channel;

        $this->authData = new authDataV1();
        $this->authData->setLogin($login);
        $this->authData->setPassword($password);
        $this->authData->setChannel($channel);

        $this->infoService = new DPDInfoServicesObjEventsService($options, $wsdl);
    }

    /**
     * @param string $waybill
     * @param eventsSelectTypeEnum|string $eventsSelectTypeEnum
     * @param string|null $language
     * @return Model\getEventsForWaybillV1Response
     */
    public function getEventsForWaybillV1($waybill, $eventsSelectTypeEnum, $language)
    {
        $getEventsForWaybillV1 = new getEventsForWaybillV1();
        $getEventsForWaybillV1->setAuthDataV1($this->authData);
        $getEventsForWaybillV1->setWaybill($waybill);
        $getEventsForWaybillV1->setEventsSelectType($eventsSelectTypeEnum);
        $getEventsForWaybillV1->setLanguage($language);

        return $this->infoService->getEventsForWaybillV1($getEventsForWaybillV1);
    }

    /**
     * @param int|null $limit
     * @param string|null $language
     * @return Model\getEventsForCustomerV4Response
     */
    public function getEventsForCustomerV4($limit, $language)
    {
        $getEventsForCustomerV4 = new getEventsForCustomerV4();
        $getEventsForCustomerV4->setAuthDataV1($this->authData);
        $getEventsForCustomerV4->setLimit($limit);
        $getEventsForCustomerV4->setLanguage($language);

        return $this->infoService->getEventsForCustomerV4($getEventsForCustomerV4);
    }

    /**
     * @param string $confirmId
     * @return Model\markEventsAsProcessedV1Response
     */
    public function markEventsAsProcessedV1($confirmId)
    {
        $markEventsAsProcessedV1 = new markEventsAsProcessedV1();
        $markEventsAsProcessedV1->setAuthDataV1($this->authData);
        $markEventsAsProcessedV1->setConfirmId($confirmId);

        return $this->infoService->markEventsAsProcessedV1($markEventsAsProcessedV1);
    }
}
