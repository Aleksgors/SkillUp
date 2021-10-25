<?php

namespace SkillUp\Decorator\Decorator;

use SkillUp\Decorator\Entity\OrderInterface;
use SkillUp\Decorator\Service\OrderServiceInterface;

/**
 * Class AbstractOrderServiceDecodator
 * @package SkillUp\Decorator\Decorator
 */
abstract class AbstractOrderServiceDecodator implements OrderServiceInterface
{
    /**
     * @var OrderServiceInterface
     */
    protected $decoratedService;

    /**
     * AbstractOrderServiceDecodator constructor
     */
    public function __construct(OrderServiceInterface $decoratedService)
    {
        $this->decoratedService = $decoratedService;
    }

    /**
     * @inheritDoc
     */
    public function updateOrder(OrderInterface $order, array $updateData): OrderInterface
    {
        $this->beforeActions();
        $this->mainActions($order, $updateData);
        $this->afterActions();

        return $order;
    }

    /**
     * Некие действия перед вызовом методов декорируемого объекта (сервиса)
     */
    protected function beforeActions()
    {

    }

    /**
     * Вызов метода декорируемого объекта (сервиса) или переопределение этого метода
     *
     * @param OrderInterface $order
     * @param array $updateData
     */
    protected function mainActions(OrderInterface $order, array $updateData)
    {
        $this->decoratedService->updateOrder($order, $updateData);
    }

    /**
     * Некие действия после вызова методов декорируемого объекта (сервиса)
     */
    protected function afterActions()
    {

    }
}