<?php

namespace Fixtures;

class ImportWrapper
{
    protected $import;

    public function __construct(Import $import)
    {
        $this->import = $import;
    }
}
