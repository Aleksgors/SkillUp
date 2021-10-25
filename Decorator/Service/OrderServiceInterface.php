<?php

namespace SkillUp\Decorator\Service;

use SkillUp\Decorator\Entity\OrderInterface;

/**
 * Interface OrderServiceInterface
 * @package SkillUp\Decorator\Service
 */
interface OrderServiceInterface
{
    /**
     * @param OrderInterface $order
     * @param array $updateData
     * @return OrderInterface
     */
    public function updateOrder(OrderInterface $order, array $updateData): OrderInterface;
}
