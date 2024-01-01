<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function mapping(): void
    {
        $collection = collect([1, 2, 3]);

        $result = $collection->map(function ($items) {
            return $items * 2;
        });

        self::assertEquals([2, 4, 6], $result->all());
    }
}
