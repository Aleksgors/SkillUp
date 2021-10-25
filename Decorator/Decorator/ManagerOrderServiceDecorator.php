<?php

namespace SkillUp\Decorator\Decorator;

/**
 * Class ManagerOrderServiceDecorator
 * @package SkillUp\Decorator\Decorator
 */
class ManagerOrderServiceDecorator extends AbstractOrderServiceDecodator
{
    /**
     * @inheritDoc
     */
    protected function beforeActions()
    {
        echo 'Preparing order for update by manager';
    }

    /**
     * @inheritDoc
     */
    protected function afterActions()
    {
        echo 'Send notifications to customer';
    }
}