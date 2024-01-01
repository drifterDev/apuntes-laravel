<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => 'recipe',
            'attributes' => [
                'category' => $this->category->name,
                'author' => $this->user->name,
                'title' => $this->title,
                'description' => $this->description,
                'ingredients' => $this->ingredients,
                'instructions' => $this->instructions,
                'image' => $this->image,
                // Trae solamente el nombre de cada una y las une en un string
                'tags' => $this->tags->pluck('name')->implode(', ')
            ]
        ];
    }
}
