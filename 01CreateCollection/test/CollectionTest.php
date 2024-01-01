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
    public function createCollection(): void
    {
        // Membuat/mengubah array menjadi collection
        $toCollection = collect([1, 2, 3]);

        // Membuat/menguabh collection menjadi array
        $toArray = $toCollection->all();

        self::assertEquals([1, 2, 3], $toArray);
    }
}
