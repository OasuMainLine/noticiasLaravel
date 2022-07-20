<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categories::create([
            'categories'=> "Finanzas"
        ]);

        Categories::create([
            'categories'=> "Deportes"
        ]);

        Categories::create([
            'categories'=> "Entretenimiento"
        ]);

        Categories::create([
            'categories'=> "Politica"
        ]);

        Categories::create([
            'categories'=> "Salud"
        ]);

        Categories::create([
            'categories'=> "Tecnologia"
        ]);

        Categories::create([
            'categories'=> "Viajes"
        ]);
    }
}
