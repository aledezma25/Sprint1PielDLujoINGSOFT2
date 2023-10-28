<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Bolsos Dama',
            'slug' => 'bolsosdama'
        ]);
        Category::create([
            'name' => 'Billeteras Caballero',
            'slug' => 'billeterascaballero'
        ]);
        Category::create([
            'name' => 'Maletas',
            'slug' => 'maletas'
        ]);
        Category::create([
            'name' => 'Gorras',
            'slug' => 'gorras'
        ]);
        Category::create([
            'name' => 'Correas',
            'slug' => 'correas'
        ]);
        Category::create([
            'name' => 'Guantes',
            'slug' => 'guantes'
        ]);
        Category::create([
            'name' => 'Carteras Dama',
            'slug' => 'carterasdama'
        ]);
        Category::create([
            'name' => 'Canguros',
            'slug' => 'canguros'
        ]);
    }
}
