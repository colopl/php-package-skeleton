<?php

declare(strict_types=1);

namespace Colopl\PackageSkeleton;

final class FooClass
{
    public function bar(): bool
    {
        return true;
    }

    /**
     * @return array<void>
     */
    public function baz(): array
    {
        return [];
    }
}
