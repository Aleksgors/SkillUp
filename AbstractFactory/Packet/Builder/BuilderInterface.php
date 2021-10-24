<?php

namespace SkillUp\AbstractFactory\Packet\Builder;

interface BuilderInterface
{
    /**
     * @return object
     */
    public function build(array $data);
}
