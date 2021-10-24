<?php

namespace SkillUp\FabricMethod\Service;

use SkillUp\FabricMethod\Entity\ProtocolInterface;
use SkillUp\FabricMethod\Entity\SecondPartProtocol;

/**
 * Class SecondPartProtocolService
 *
 * Конкретный сервис для работы с конкретным типом протоколов, реализующий метод createProtocol(), который
 * создает протокол конкретного типа SecondPartProtocol, реализующего интерфейс ProtocolInterface
 *
 * @package SkillUp\FabricMethod\Service
 */
class SecondPartProtocolService extends AbstractProtocolService
{
    /**
     * @return ProtocolInterface
     */
    function createProtocol(): ProtocolInterface
    {
        return new SecondPartProtocol();
    }
}
