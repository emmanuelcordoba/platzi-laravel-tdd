<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_slug(): void
    {
        $tag = new Tag();
        $tag->name = 'Proyecto PHP';
        $this->assertEquals('proyecto-php', $tag->slug);
    }
}
