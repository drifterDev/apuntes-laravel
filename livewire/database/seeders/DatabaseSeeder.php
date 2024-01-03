<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Reply;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['email' => 'i@admin.com']);
        User::factory(9)->create();
        Category::factory(10)
            ->hasThreads(20)
            ->create();

        Reply::factory(400)->create();
    }
}
