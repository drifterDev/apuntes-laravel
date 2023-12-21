<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    public function test_set_name_in_lowercase(): void
    {
        $post = new Post;
        $post->name = 'Proyecto TEST';
        $this->assertEquals('proyecto test', $post->name);
    }

    public function test_get_slug(): void
    {
        $post = new Post;
        $post->name = 'Proyecto TEST';
        $this->assertEquals('proyecto-test', $post->slug);
    }

    public function test_get_href(): void
    {
        $post = new Post;
        $post->name = 'proyecto TEST';
        $this->assertEquals('blog/proyecto-test', $post->href());
    }
}
