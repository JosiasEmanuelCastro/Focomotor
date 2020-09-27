<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Plan;
use App\Models\Combo;

class PlansTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_it_should_return_a_plan_created()
    {
        $this->withoutExceptionHandling();

        Plan::create([
            "role_id" => 1,
            "name" => "Gratuito",
            "articles_limit" => 1,
            "price" => 0,
        ]);

        //$response->dump();

        $this->assertDatabaseHas('plans', [
            "role_id" => 1,
            "name" => "Gratuito",
            "articles_limit" => 1,
            "price" => 0,
        ]);
    }

    public function test_it_should_return_a_combo_created()
    {
        $this->withoutExceptionHandling();

        Combo::create([
            "name" => "+1",
            "articles_extra" => 1,
            "price" => 150,
        ]);

        //$response->dump();

        $this->assertDatabaseHas('combos', [
            "name" => "+1",
            "articles_extra" => 1,
            "price" => 150,
        ]);
    }
}
