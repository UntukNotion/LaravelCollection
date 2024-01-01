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
    public function collectionManipulation(): void
    {
        // membuat collection dari array kosong
        $collection = collect([]);

        // menambah data menggunakan push()
        $collection->push(1, 2, 3);

        // mengubah collection menjadi array
        $toArray = $collection->all();

        self::assertEqualsCanonicalizing([1, 2, 3], $toArray);

        // menghapus nilai paling akhir
        $toArray = $collection->pop();

        self::assertEquals(3, $toArray);
        self::assertEqualsCanonicalizing([1, 2], $collection->all());
    }
}
