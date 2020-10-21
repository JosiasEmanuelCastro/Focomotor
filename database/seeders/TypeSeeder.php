<?php

namespace Database\Seeders;

use App\Models\CategoryType;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryType::create([
            "name" => "Categoria",
        ]);

        CategoryType::create([
            "name" => "Marca",
        ]);

        CategoryType::create([
            "name" => "Modelo",
        ]);
    }
}
