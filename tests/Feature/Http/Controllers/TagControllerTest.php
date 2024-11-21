<?php

namespace Tests\Feature\Http\Controllers;

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
}
