<?php

namespace Tests\Feature\Http\Controllers\Api\V1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Tag;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\Sanctum;

class TagTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        Sanctum::actingAs(User::factory()->create());
        $tag = Tag::factory(3)->create();
        $this
            ->getJson('/api/v1/tags')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonCount(3, 'data')
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'type',
                        'attributes' => [
                            'name'
                        ],
                        'relationships' => [
                            'recipes' => []
                        ]
                    ],
                ]
            ]);
    }

    public function test_show()
    {
        Sanctum::actingAs(User::factory()->create());
        $tag = Tag::factory()->create();
        $this
            ->getJson('/api/v1/tags/' . $tag->id)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'type',
                    'attributes' => [
                        'name'
                    ],
                    'relationships' => [
                        'recipes' => []
                    ]
                ]
            ]);
    }
}
