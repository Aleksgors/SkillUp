<?php

namespace SkillUp\Facade\Service;

/**
 * Interface ArchiveService
 * @package SkillUp\Facade\Service
 */
interface ArchiveServiceInterface
{
    /**
     * @param string $file
     */
    public function unZip(string $file): void;
}
