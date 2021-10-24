<?php

namespace SkillUp\FabricMethod\Service;

use SkillUp\FabricMethod\Entity\ProtocolInterface;

/**
 * Class AbstractProtocolService
 *
 * Абстрактный сервис для работы с протоколами, объявляющий метод createProtocol(), который
 * создает объект ProtocolInterface
 *
 * @package SkillUp\FabricMethod\Service
 */
abstract class AbstractProtocolService
{
    /**
     * @return ProtocolInterface
     */
    abstract function createProtocol(): ProtocolInterface;
}