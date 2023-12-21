<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    public function testEmail(): void
    {
        $result = Email::validate('asldfj@admin.com');
        $this->assertTrue($result);

        $result = Email::validate('hola@@.d.d');
        $this->assertFalse($result);
    }
}
