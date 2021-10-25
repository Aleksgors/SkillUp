<?php

namespace SkillUp\Mediator\Components;

use SkillUp\Mediator\MediatorInterface;

/**
 * Interface BaseComponentInterface
 * @package SkillUp\Mediator\Components
 */
interface BaseComponentInterface
{
    /**
     * @param MediatorInterface $mediator
     * @return mixed
     */
    public function setMediator(MediatorInterface $mediator);
}
