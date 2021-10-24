<?php

namespace SkillUp\AbstractFactory\Packet\Builder\Factory;

use SkillUp\AbstractFactory\Packet\Builder\FinalRequestBuilderInterface;
use SkillUp\AbstractFactory\Packet\Builder\RequestReviewBuilderInterface;

interface PacketBuilderFactoryInterface
{
    /**
     * @return RequestReviewBuilderInterface
     */
    public function createRequestReviewBuilder(): RequestReviewBuilderInterface;

    /**
     * @return FinalRequestBuilderInterface
     */
    public function createFinalRequestBuilder(): FinalRequestBuilderInterface;
}
