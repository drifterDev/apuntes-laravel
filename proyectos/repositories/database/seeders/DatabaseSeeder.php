<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Repository;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Repository::factory(40)->create();
    }
}
