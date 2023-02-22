<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PhraseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_create_phrases(): void
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $this->actingAs($user);

        //given
        //when
        //then

        $response = $this->post(route('testing'),
        [
            'author' => 'Test author',
            'phrase' => 'Test phrase'
        ]);

        $this->assertCount(1, CrudPost::all());

        $post = CrudPost::first();

        $this->assertEquals($post->title, 'Test author');

    }
}
