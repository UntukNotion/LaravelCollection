<?php

namespace Tests\Feature;

use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function mapInto(): void
    {
        $collection = collect(["Dyone"]);

        $result = $collection->mapInto(Person::class);

        self::assertEquals([new Person("Dyone")], $result->all());
    }
}
