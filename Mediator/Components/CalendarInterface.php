<?php

namespace SkillUp\Mediator\Components;

/**
 * Interface CalendarInterface
 * @package SkillUp\Mediator\Components
 */
interface CalendarInterface extends BaseComponentInterface
{
    /**
     * @return mixed
     */
    public function getToDoList();

    /**
     * @return mixed
     */
    public function isWeekend();
}
