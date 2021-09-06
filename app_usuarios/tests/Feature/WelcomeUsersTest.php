<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function bienvenido_user_nickname(){
        $this->get('/saludo/Elsy/Arenivar')
        ->assertStatus(200)
        ->assertSee('Bienvenido Elsy, tu apodo es Arenivar');
    }

    /** @test */
    function bienvenido_user_no_nickname(){
        $this->get('/saludo/Elsy/')
        ->assertStatus(200)
        ->assertSee('Bienvenido Elsy, no tienes apodo');
    }



}
