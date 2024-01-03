<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        Sanctum::actingAs(User::factory()->create());
        $category = Category::factory(3)->create();
        $this
            ->getJson('/api/categories')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount(3, 'data')
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'type',
                        'attributes' => [
                            'name'
                        ]
                    ],
                ]
            ]);
    }

    public function test_show()
    {
        Sanctum::actingAs(User::factory()->create());
        $category = Category::factory()->create();
        $this
            ->getJson('/api/categories/' . $category->id)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'type',
                    'attributes' => [
                        'name'
                    ]
                ]
            ]);
    }
}
