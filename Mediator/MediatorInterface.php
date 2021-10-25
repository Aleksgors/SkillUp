<?php

namespace SkillUp\Mediator;

use SkillUp\Mediator\Components\BaseComponentInterface;

/**
 * Interface MediatorInterface
 * @package SkillUp\Mediator
 */
interface MediatorInterface
{
    /**
     * @param BaseComponentInterface $sender
     * @param string $event
     * @return mixed
     */
    public function notify(BaseComponentInterface $sender, string $event);
}
