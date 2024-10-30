<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Category::factory()->count(10)->create();
        \App\Models\Category::factory()->count(5)->active()->create();
    }
}