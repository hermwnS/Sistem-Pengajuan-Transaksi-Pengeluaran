<?php

namespace Tests\Feature;

use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    public function test_database_seeder_class_exists(): void
    {
        $this->assertTrue(class_exists(\Database\Seeders\DatabaseSeeder::class));
    }
}
