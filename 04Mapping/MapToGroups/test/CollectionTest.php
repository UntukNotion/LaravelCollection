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
    public function mapToGroups(): void
    {
        $collection = collect([
            [
                "name" => "Dyone",
                "department" => "IT"
            ],
            [
                "name" => "Rifky",
                "department" => "IT"
            ],
            [
                "name" => "Strankers",
                "department" => "HR"
            ]
        ]);

        $result = $collection->mapToGroups(function ($item) {
            return [$item["department"] => $item["name"]];
        });

        self::assertEquals([
            'IT' => collect(["Dyone", "Rifky"]),
            'HR' => collect(["Strankers"])
        ], $result->all());
    }
}
