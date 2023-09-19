<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()
            ->count(10) // Количество записей, которые вы хотите создать
            ->create();
    }
}
