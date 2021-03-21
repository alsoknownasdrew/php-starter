<?php

declare(strict_types=1);

namespace AppTest;

use App\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    public function testGreetsName(): void
    {
        self::assertSame('Hello World!', Greeter::greet('World'));
    }
}
