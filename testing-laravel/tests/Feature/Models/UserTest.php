<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; // migrate

    public function test_users(): void
    {
        User::factory()->create([
            'email' => 'admin@admin.com',
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'admin@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@admin.com'
        ]);
    }
}
