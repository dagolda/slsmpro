<?php
namespace Bo\AdminBundle\Libs\Others;

class PdfPathManager
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function getPath()
    {
        return $this->targetDir;
    }
}