<?php

namespace SkillUp\Mediator\Components;

/**
 * Interface AlarmClockInterface
 * @package SkillUp\Mediator\Components
 */
interface AlarmClockInterface extends BaseComponentInterface
{
    public const ON_ALARM = 'alarmclock.alarm';

    /**
     * @return mixed
     */
    public function turnOff();

    /**
     * Звенеть
     * @return mixed
     */
    public function doRing();
}
