<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = [
            'title' => 'title',
            'body' => 'body',
        ];
        $response = $this->post('posts', $data);

        $response->assertRedirect('posts');

        $post = Post::orderByDesc('id')->first();
        $this->assertSame($data['title'], $post->title);
    }

    public function testEdit()
    {
        $post = factory(Post::class)->create();

        $response = $this->get("posts/{$post->id}/edit");

        $response->assertStatus(200);
    }

    public function postUpdate()
    {
        $post = factory(Post::class)->create();

        $data = [
            'title' => $post->title . 'changed',
            'body' => $post->body . 'changed',
        ];
        $response = $this->patch("posts/{$post->id}", $data);

        $respnose->assertRedirect('posts');

        $updatedPost = Post::find($post->id);
        $this->assertSame($data['title'], $updatedPost->title);
    }

    public function postDestroy()
    {
        $post = factory(Post::class)->create();

        $response = $this->delete("posts/{$post->id}");

        $reponse->assertRedirect('posts');

        $this->assertNull(Post::find($post->id));
    }
}
