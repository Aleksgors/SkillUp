<?php

namespace SkillUp\Facade;

use SkillUp\Facade\Filter\FileFilterInterface;
use SkillUp\Facade\Service\ArchiveServiceInterface;
use SkillUp\Facade\Service\FileServiceInterface;

/**
 * Class FtpFacade
 * @package SkillUp\Facade
 */
class FtpFacade implements FtpInterface
{
    /**
     * @var FileFilterInterface
     */
    protected $filter;

    /**
     * @var FileServiceInterface
     */
    protected $fileService;

    /**
     * @var ArchiveServiceInterface
     */
    protected $archiveService;

    /**
     * FtpFacade constructor
     * @param FileServiceInterface $fileService
     * @param ArchiveServiceInterface $archiveService
     * @param FileFilterInterface $fileFilter
     */
    public function __construct(
        FileServiceInterface $fileService,
        ArchiveServiceInterface $archiveService,
        FileFilterInterface $fileFilter
    ) {
        $this->fileService = $fileService;
        $this->archiveService = $archiveService;
        $this->filter = $fileFilter;
    }

    /**
     * @inheritDoc
     */
    public function downloadFiles(string $uri): void
    {
        $fileList = $this->filter->filter($this->fileService->getFileList());

        foreach ($fileList as $fileName) {
            $fileDist = $this->fileService->download($fileName);
            $this->archiveService->unZip($fileDist);
        }
    }
}
