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
    public function mapSpread(): void
    {
        $collection = collect([["Rifky", "Muhamad"], ["Dyone", "Strankers"]]);

        $result = $collection->mapSpread(function ($firstName, $lastName) {
            $fullName = $firstName . " " . $lastName;
            return new Person($fullName);
        });

        self::assertEquals([
            new Person("Rifky Muhamad"),
            new Person("Dyone Strankers")
        ], $result->all());
    }
}
