<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_login()
    {
        $response = $this-> get ('/login');
        $response->assertStatus(200);
    }

    public function test_createStudent()
    {
        $response = $this-> get ('/students/create');
        $response->assertStatus(302);
    }
    public function test_users()
    {
        $response = $this-> get ('/users');
        $response->assertStatus(302);
    }
    public function test_classes()
    {
        $response = $this-> get ('/classes');
        $response->assertStatus(302);
    }
    public function test_account()
    {
        $response = $this-> get ('/my_account');
        $response->assertStatus(302);
    }
    public function test_sections()
    {
        $response = $this-> get ('/sections');
        $response->assertStatus(302);
    }
    public function test_subjects()
    {
        $response = $this-> get ('/subjects');
        $response->assertStatus(302);
    }
    public function test_dorms()
    {
        $response = $this-> get ('/dorms');
        $response->assertStatus(302);
    }
}
