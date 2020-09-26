<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_it_should_return_an_user_registered()
    {
        $this->withoutExceptionHandling();

        $user = "Demo";

        $response = $this->post('/register', [
            "name" => $user,
            "password" => "secret",
            "password_confirmation" => "secret",
            "email" => "demo@focomotor.com",
            "location" => '{"city": "Olavarria", "province": "Buenos Aires", "country": "Argentina"}',
            "telephone" => 4444444
            ,
        ]);

        //$response->dump();

        $response->assertRedirect("/profile");
        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            "name" => $user,
            'email' => 'demo@focomotor.com',
        ]);
    }

    public function test_it_should_return_an_error_if_name_is_empty()
    {
        //$this->withoutExceptionHandling();

        $user = "";

        $this->get('/register');

        $response = $this->post('/register', [
            "name" => $user,
            "password" => "secret",
            "password_confirmation" => "secret",
            "email" => "demo@focomotor.com",
            "location" => '{"city": "Olavarria", "province": "Buenos Aires", "country": "Argentina"}',
            "telephone" => 4444444
            ,
        ]);

        //$response->dump();

        $response->assertRedirect("/register");
        $response->assertStatus(302);

        $this->assertDatabaseCount('users', 0);
    }
}
