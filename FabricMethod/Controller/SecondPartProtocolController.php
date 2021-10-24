<?php

namespace SkillUp\FabricMethod\Controller;

use SkillUp\FabricMethod\Service\AbstractProtocolService;
use SkillUp\FabricMethod\Service\SecondPartProtocolService;

/**
 * Class SecondPartProtocolController
 *
 * @package SkillUp\FabricMethod\Controller
 */
class SecondPartProtocolController
{
    /** @var AbstractProtocolService */
    protected $service;

    /**
     * SecondPartProtocolController constructor
     */
    public function __construct(AbstractProtocolService $service)
    {
        $this->service = new SecondPartProtocolService();
    }

    /**
     * Edit Action
     */
    public function editAction()
    {
        //Some client logic
        $protocol = $this->service->createProtocol();
        //Some client logic
    }
}