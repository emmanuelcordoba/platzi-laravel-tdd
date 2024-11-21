<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_store(): void
    {
        $this->post('/tags', ['name' => 'PHP'])
             ->assertRedirect('/');
        $this->assertDatabaseHas('tags', ['name' => 'PHP']);
    }

    public function test_delete(): void
    {
        //$tag = Tag::factory()->create();
        // Una alternativa, sin configurar el factory del modelo.
        $tag = Tag::create(['name' => $this->faker->word()]);
        $this->delete("/tags/$tag->id")
            ->assertRedirect('/');
        $this->assertDatabaseMissing('tags', ['name' => $tag->name]);
    }
}
