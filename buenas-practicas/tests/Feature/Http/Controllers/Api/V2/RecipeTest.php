<?php

namespace Tests\Feature\Http\Controllers\Api\V2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Tests\TestCase;

class RecipeTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        Sanctum::actingAs(User::factory()->create());
        Category::factory()->create();
        $recipes = Recipe::factory(5)->create();
        $this
            ->getJson('/api/v2/recipes')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount(5, 'data')
            ->assertJsonStructure([
                'data' => [],
                'links' => [],
                'meta' => [],
            ]);
    }
}
