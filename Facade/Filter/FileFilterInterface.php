<?php

namespace SkillUp\Facade\Filter;

/**
 * Interface FileFilterInterface
 * @package SkillUp\Facade\Filter
 */
interface FileFilterInterface
{
    /**
     * @param array $fileList
     * @return mixed
     */
    public function filter(array $fileList): array;
}
