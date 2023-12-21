<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function testHome(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAbout(): void
    {
        $response = $this->get('about');
        $response->assertStatus(200);
    }
}
