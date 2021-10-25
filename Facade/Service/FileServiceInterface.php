<?php

namespace SkillUp\Facade\Service;

/**
 * Interface FileServiceInterface
 * @package SkillUp\Facade\Service
 */
interface FileServiceInterface
{
    /**
     * @param string $fileName
     * @return string
     */
    public function download(string $fileName): string;

    /**
     * @return string[]
     */
    public function getFileList(): array;
}
