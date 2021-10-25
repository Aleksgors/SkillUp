<?php

namespace SkillUp\Facade;

/**
 * Class FtpInterface
 * @package SkillUp\Facade
 */
interface FtpInterface
{
    /**
     * @param string $uri
     */
    public function downloadFiles(string $uri): void;
}
