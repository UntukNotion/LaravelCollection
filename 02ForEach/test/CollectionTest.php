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
    public function forEach(): void
    {
        $toCollection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        
        foreach ($toCollection as $key => $value) {
            self::assertEquals($key + 1, $value);
        }
    }
}
