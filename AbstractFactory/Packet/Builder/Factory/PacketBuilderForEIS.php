<?php

namespace SkillUp\AbstractFactory\Packet\Builder\Factory;

use SkillUp\AbstractFactory\Packet\Builder\FinalRequestBuilderInterface;
use SkillUp\AbstractFactory\Packet\Builder\RequestReviewBuilderInterface;

class PacketBuilderForEIS implements PacketBuilderFactoryInterface
{

    /**
     * @inheritDoc
     */
    public function createRequestReviewBuilder(): RequestReviewBuilderInterface
    {
        //Возвращает Билдер пакетов рассмотрения заявок для ЕИС
    }

    /**
     * @inheritDoc
     */
    public function createFinalRequestBuilder(): FinalRequestBuilderInterface
    {
        //Возвращает Билдер пакетов подведения итогов для ЕИС
    }
}