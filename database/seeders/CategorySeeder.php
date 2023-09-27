<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Z-Otro',
            'Coliseo',
            'Césped Siténtico',
            'Polifuncional',
            'Walli',
            'Frontón'
         ];

        foreach ($categories as $category) {
            Category::create(['title' => $category, 'color' => '#ff0000']);
        }
    }
}
