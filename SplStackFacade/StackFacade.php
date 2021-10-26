<?php

namespace SkillUp\SplStackFacade;

use SplStack;

class StackFacade implements StackInterface
{
    /**
     * @var SplStack
     */
    protected $splStack;

    /**
     * StackFacade constructor
     */
    public function __construct()
    {
        $this->splStack = new SplStack();
    }

    /**
     * @inheritDoc
     */
    public function addElement($element)
    {
        $this->splStack->push($element);
    }

    /**
     * @inheritDoc
     */
    public function getLastElement()
    {
        $this->splStack->pop();
    }

    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
        return $this->splStack->count() === 0;
    }
}