<?php

namespace SkillUp\SplStackFacade;

/**
 * Interface StackInterface
 * @package SkillUp\SplStackFacade
 */
interface StackInterface
{
    /**
     * @param mixed $element
     * @return mixed
     */
    public function addElement($element);

    /**
     * @return mixed
     */
    public function getLastElement();

    /**
     * @return bool
     */
    public function isEmpty(): bool;
}