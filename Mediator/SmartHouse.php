<?php

namespace SkillUp\Mediator;

use SkillUp\Mediator\Components\AlarmClockInterface;
use SkillUp\Mediator\Components\BaseComponentInterface;
use SkillUp\Mediator\Components\CalendarInterface;
use SkillUp\Mediator\Components\CoffeeMachineInterface;

/**
 * Class SmartHouse
 * @package SkillUp\Mediator
 */
class SmartHouse implements MediatorInterface
{
    /**
     * @var CalendarInterface
     */
    protected $calendar;

    /**
     * @var CoffeeMachineInterface
     */
    protected $coffeeMachine;

    /**
     * @var AlarmClockInterface
     */
    protected $alarmClock;

    /**
     * SmartHouse constructor
     */
    public function __construct(
        CalendarInterface $calendar,
        CoffeeMachineInterface $coffeeMachine,
        AlarmClockInterface $alarmClock
    ) {
        $this->calendar = $calendar;
        $this->calendar->setMediator($this);
        $this->alarmClock = $alarmClock;
        $this->alarmClock->setMediator($this);
        $this->coffeeMachine = $coffeeMachine;
        $this->coffeeMachine->setMediator($this);
    }

    /**
     * @param BaseComponentInterface $sender
     * @param string $event
     */
    public function notify(BaseComponentInterface $sender, string $event)
    {
        switch ($event) {
            case AlarmClockInterface::ON_ALARM:
                if (!$this->calendar->isWeekend()) {
                    $this->alarmClock->doRing();
                    $this->coffeeMachine->makeCoffee();
                    $this->calendar->getToDoList();
                } else {
                    $this->alarmClock->turnOff();
                }

                break;
        }
    }
}