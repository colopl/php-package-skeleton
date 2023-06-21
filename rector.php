<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

use const DIRECTORY_SEPARATOR as DS;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . DS . 'src',
        __DIR__ . DS . 'tests',
    ]);
    $rectorConfig->sets([
        SetList::PHP_80,
        SetList::PHP_81,
    ]);
};
