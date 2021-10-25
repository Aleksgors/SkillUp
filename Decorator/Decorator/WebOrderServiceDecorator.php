<?php

namespace SkillUp\Decorator\Decorator;

/**
 * Class WebOrderServiceDecorator
 * @package SkillUp\Decorator\Decorator
 */
class WebOrderServiceDecorator extends AbstractOrderServiceDecodator
{
    /**
     * @inheritDoc
     */
    protected function beforeActions()
    {
        echo 'Preparing order for update via Web Client';
    }

    /**
     * @inheritDoc
     */
    protected function afterActions()
    {
        echo 'Logging information about order after update via Web Client';
    }
}
