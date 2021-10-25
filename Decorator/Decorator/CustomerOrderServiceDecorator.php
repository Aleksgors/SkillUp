<?php

namespace SkillUp\Decorator\Decorator;

/**
 * Class CustomerOrderServiceDecorator
 * @package SkillUp\Decorator\Decorator
 */
class CustomerOrderServiceDecorator extends AbstractOrderServiceDecodator
{
    /**
     * @inheritDoc
     */
    protected function beforeActions()
    {
        echo 'Preparing Order for update by Customer';
    }

    /**
     * @inheritDoc
     */
    protected function afterActions()
    {
        echo 'Send notifications to Order Manager';
    }
}