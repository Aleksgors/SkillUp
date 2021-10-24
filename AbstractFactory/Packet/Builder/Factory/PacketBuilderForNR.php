<?php

namespace SkillUp\AbstractFactory\Packet\Builder\Factory;

use SkillUp\AbstractFactory\Packet\Builder\FinalRequestBuilderInterface;
use SkillUp\AbstractFactory\Packet\Builder\RequestReviewBuilderInterface;

class PacketBuilderForNR implements PacketBuilderFactoryInterface
{

    /**
     * @inheritDoc
     */
    public function createRequestReviewBuilder(): RequestReviewBuilderInterface
    {
        //Возвращает Билдер пакетов рассмотрения заявок для НР
    }

    /**
     * @inheritDoc
     */
    public function createFinalRequestBuilder(): FinalRequestBuilderInterface
    {
        //Возвращает Билдер пакетов подведения итогов для НР
    }
}