<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function testDatabase()
    {
        factory(Post::class)->create();

        $this->assertDatabaseHas('posts', [
            'title' => 'post title',
        ]);
    }
}
