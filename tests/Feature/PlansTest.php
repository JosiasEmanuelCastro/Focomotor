<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Plan;
use App\Models\User;
use App\Models\Combo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlansTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->refreshDatabase();
        $this->beginDatabaseTransaction();

        $this->user = User::create([
            "name" => "Demo",
            "password" => "secret",
            "plan_id" => 1,
            "password_confirmation" => "secret",
            "email" => "demo@focomotor.com",
            "location" => '{"city": "Olavarria", "province": "Buenos Aires", "country": "Argentina"}',
            "telephone" => 4444444,
        ]);

    }
    
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

    public function test_it_should_return_an_error_if_the_user_cannont_make_any_more_posts()
    {
        $this->withoutExceptionHandling();

        Storage::fake('images');

        $file = UploadedFile::fake()->image('ford-fiesta.png');

        $response1 = $this->actingAs($this->user)
            ->post('/articles', [
                "tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "year" => "2020",
                "fuel" => "Naftero",
                "price" => 200000,
                "condition" => "Nuevo",
                "kilometers" => 0,
                "feature_image" => $file,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        $response2 = $this->actingAs($this->user)
            ->post('/articles', [
                "tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "year" => "2010",
                "fuel" => "Naftero",
                "price" => 10000,
                "condition" => "Usado",
                "kilometers" => 50000,
                "feature_image" => $file,
                "description" => "Soy otro vehiculo. Prueba de que no me puedo crear",
            
            ]);

        //$response->dump();

        $this->assertDatabaseCount('articles', 1);

        $response1->assertStatus(201);
        $response2->assertStatus(403);
    }
}
