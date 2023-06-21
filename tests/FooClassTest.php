<?php

declare(strict_types=1);

namespace Colopl\PackageSkeleton\Tests;

use Colopl\PackageSkeleton\FooClass;
use PHPUnit\Framework\TestCase;

final class FooClassTest extends TestCase
{
    public function testBar(): void
    {
        self::assertTrue(
            (new FooClass())->bar()
        );
    }

    public function testBaz(): void
    {
        self::assertSame(
            [],
            (new FooClass())->baz()
        );
    }
}
