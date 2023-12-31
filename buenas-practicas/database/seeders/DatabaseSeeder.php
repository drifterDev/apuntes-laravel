<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Recipe;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create(['email' => 'admin@admin.com']);
        User::factory(20)->create();
        Category::factory(12)->create();
        Recipe::factory(100)->create();
        Tag::factory(40)->create();

        // Many to many
        $recipes = Recipe::all();
        $tags = Tag::all();

        foreach ($recipes as $recipe) {
            $recipe->tags()->attach($tags->random(rand(2, 4)));
        }
    }
}
