<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            "role_id" => 1,
            "name" => "Gratuito",
            "articles_limit" => 1,
            "price" => 0,
        ]);

        Plan::create([
            "role_id" => 2,
            "name" => "x10 Clasificados",
            "articles_limit" => 10,
            "price" => 550,
        ]);

        Plan::create([
            "role_id" => 2,
            "name" => "x25 Clasificados",
            "articles_limit" => 25,
            "price" => 1100,
        ]);

        Plan::create([
            "role_id" => 2,
            "name" => "x50 Clasificados",
            "articles_limit" => 50,
            "price" => 1650,
        ]);

        Plan::create([
            "role_id" => 2,
            "name" => "x100 Clasificados",
            "articles_limit" => 100,
            "price" => 2750,
        ]);
    }
}
