<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;
use App\Models\Plan;

class ArticlesTest extends TestCase
{
    use RefreshDatabase;

    protected $plan;

    protected $user;

    protected $file;

    public function setUp(): void
    {
        parent::setUp();

        $this->refreshDatabase();
        $this->beginDatabaseTransaction();

        $this->createPlan();

        $this->user = User::create([
            "name" => "Demo",
            "password" => "secret",
            "plan_id" => $this->plan->id,
            "password_confirmation" => "secret",
            "email" => "demo@focomotor.com",
            "location" => '{"city": "Olavarria", "province": "Buenos Aires", "country": "Argentina"}',
            "telephone" => 4444444,
        ]);

        Storage::fake('images');
        $this->file = UploadedFile::fake()->image('ford-fiesta.png');
    }

    public function createPlan()
    {
        $this->plan = Plan::create([
            "name" => "Gratuito",
            "role_id" => 1, //1 = Usuario - 2 = Concesionaria
            "articles_limit" => 1,
            "price" => 0,
        ]);
    }
    
    public function test_it_should_return_an_articled_created_with_category_mark_and_model()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->post('/articles', [
                "tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "year" => "2020",
                "fuel" => "Naftero",
                "price" => 200000,
                "condition" => "Nuevo",
                "kilometers" => 0,
                "feature_image" => $this->file,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        //$response->dump();

        //Storage::disk('images')->assertExists('images/'.$file->hashName());

        $this->assertDatabaseHas('articles', [
            "category_id" => 1,
            "user_id" => $this->user->id,
            "year" => "2020",
            "fuel" => "Naftero",
            "price" => 200000,
            "condition" => "Nuevo",
            "kilometers" => 0,
            "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        $response->assertStatus(201);
    }

   
    public function test_it_should_return_an_articled_created_with_category_subcategory_and_title()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->post('/articles', [
                "tree" => [1, 1, 1],
                "title" => "Ligera",
                "user_id" => $this->user->id,
                "year" => "2020",
                "fuel" => "Naftero",
                "price" => 200000,
                "condition" => "Nuevo",
                "kilometers" => 0,
                "feature_image" => $this->file,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        //dd($response->category);

        $this->assertDatabaseHas('articles', [
            "category_id" => 1,
            "title" => "Ligera",
            "user_id" => $this->user->id,
            "year" => "2020",
            "fuel" => "Naftero",
            "price" => 200000,
            "condition" => "Nuevo",
            "kilometers" => 0,
            "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        $response->assertStatus(201);
    }

    public function test_it_should_return_an_articled_created_with_title()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->post('/articles', [
                "title" => "Basurero",
                "tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "year" => "2020",
                "fuel" => "Naftero",
                "price" => 200000,
                "condition" => "Nuevo",
                "kilometers" => 0,
                "feature_image" => $this->file,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        //dd($response->category);

        $this->assertDatabaseHas('articles', [
            "category_id" => 1,
            "title" => "Basurero",
            "user_id" => $this->user->id,
            "year" => "2020",
            "fuel" => "Naftero",
            "price" => 200000,
            "condition" => "Nuevo",
            "kilometers" => 0,
            "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        $response->assertStatus(201);
    }

    public function test_it_should_return_an_error_if_some_fields_are_required()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->post('/articles', [
                //"tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "kilometers" => 0,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
            
        ]);

        //$response->dump();

        $this->assertDatabaseCount('articles', 0);

    }

    public function test_it_should_return_an_articled_created_with_images()
    {
        $this->withoutExceptionHandling();

        $file1 = UploadedFile::fake()->image('ford-fiesta1.png');
        $file2 = UploadedFile::fake()->image('ford-fiesta2.png');
        $file3 = UploadedFile::fake()->image('ford-fiesta3.png');
        $file4 = UploadedFile::fake()->image('ford-fiesta4.png');

        $response = $this->actingAs($this->user)
            ->post('/articles', [
                "tree" => [1, 1, 1],
                "user_id" => $this->user->id,
                "year" => "2020",
                "fuel" => "Naftero",
                "price" => 200000,
                "condition" => "Nuevo",
                "kilometers" => 0,
                "feature_image" => $this->file,
                "description" => "Soy un vehiculo. Prueba de que ha sido creado",
                "images" => [$file1, $file2, $file3, $file4],
            
        ]);

        //$response->dump();

        //Storage::disk('images')->assertExists('images/'.$file->hashName());

        $this->assertDatabaseCount('article_images', 4);

        $response->assertStatus(201);
    }


}
