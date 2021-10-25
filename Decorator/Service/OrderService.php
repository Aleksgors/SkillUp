<?php

namespace SkillUp\Decorator\Service;

use SkillUp\Decorator\Entity\OrderInterface;

/**
 * Class OrderService
 * @package SkillUp\Decorator\Service
 */
final class OrderService implements OrderServiceInterface
{
    /**
     * @inheritDoc
     */
    public function updateOrder(OrderInterface $order, array $updateData): OrderInterface
    {
        echo 'Order base updating...';
        return $order;
    }
}
