<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


class FunctionsTest extends TestCase
{
    public function test_example(): void
    {
        $result = validate_email('i@gmail.com');
        $this->assertTrue($result);

        $result = validate_email('i@@hola..c');
        $this->assertFalse($result);
    }
}
