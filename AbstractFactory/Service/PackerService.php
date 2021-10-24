<?php

namespace SkillUp\AbstractFactory\Service;

use SkillUp\AbstractFactory\Packet\Builder\BuilderInterface;

/**
 * Class PackerService
 * @package SkillUp\AbstractFactory\Service
 */
class PackerService
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function sendPacket(array $data)
    {
        $packet = $this->builder->build($data);

        // ...
        // send logic
    }
}
