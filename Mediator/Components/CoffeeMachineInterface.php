<?php

namespace SkillUp\Mediator\Components;

/**
 * Interface CoffeeMachineInterface
 * @package SkillUp\Mediator\Components
 */
interface CoffeeMachineInterface extends BaseComponentInterface
{
    /**
     * @return mixed
     */
    public function makeCoffee();
}
