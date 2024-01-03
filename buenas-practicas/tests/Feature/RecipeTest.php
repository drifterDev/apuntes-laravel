<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Tag;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\Sanctum;
use Illuminate\Http\UploadedFile;

class RecipeTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_index()
    {
        Sanctum::actingAs(User::factory()->create());
        Category::factory()->create();
        $recipes = Recipe::factory(3)->create();
        $this
            ->getJson('/api/recipes')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount(3, 'data')
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'type',
                        'attributes' => [
                            'category',
                            'author',
                            'title',
                            'description',
                            'ingredients',
                            'instructions',
                            'image',
                        ]
                    ],
                ]
            ]);
    }

    public function test_show()
    {
        Sanctum::actingAs(User::factory()->create());
        Category::factory()->create();
        $recipe = Recipe::factory()->create();
        $this
            ->getJson('/api/recipes/' . $recipe->id)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'type',
                    'attributes' => [
                        'category',
                        'author',
                        'title',
                        'description',
                        'ingredients',
                        'instructions',
                        'image',
                    ]
                ]
            ]);
    }

    public function test_delete()
    {
        Sanctum::actingAs(User::factory()->create());
        Category::factory()->create();
        $recipe = Recipe::factory()->create();
        $this
            ->deleteJson('/api/recipes/' . $recipe->id)
            ->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function test_store()
    {
        Sanctum::actingAs(User::factory()->create());
        $category = Category::factory()->create();
        $tag = Tag::factory()->create();

        $data = [
            'category_id' => $category->id,
            'title' => $this->faker->sentence,
            'ingredients' => $this->faker->paragraph,
            'instructions' => $this->faker->text,
            'description' => $this->faker->text,
            'tags' => $tag->id,
            'image' => UploadedFile::fake()->image('recipe.png'),
        ];

        $this
            ->postJson('/api/recipes', $data)
            ->assertStatus(Response::HTTP_CREATED);

        $this->assertDatabaseHas('recipes', [
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }

    public function test_update()
    {
        Sanctum::actingAs(User::factory()->create());
        $category = Category::factory()->create();
        $recipe = Recipe::factory()->create();
        $tag = Tag::factory()->create();

        $data = [
            'category_id' => $category->id,
            'title' => $this->faker->sentence,
            'ingredients' => $this->faker->paragraph,
            'instructions' => $this->faker->text,
            'description' => $this->faker->text,
            'tags' => $tag->id,
            'image' => UploadedFile::fake()->image('recipe.png'),
        ];

        $this
            ->putJson('/api/recipes/' . $recipe->id, $data)
            ->assertStatus(Response::HTTP_OK);

        $this->assertDatabaseHas('recipes', [
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}
