<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user(){
        $this->assertDatabaseHas('users',[
            'email'=>'cj@cj.com'
        ]);
    }
    public function test_sections(){
        $this->assertDatabaseHas('sections',[
            'name'=>'Silver'
        ]);
    }
    public function test_Grade(){
        $this->assertDatabaseHas('sections',[
            'name'=>'A'
        ]);
    }
    public function test_Nationalism(){
        $this->assertDatabaseHas('nationalities',[
            'name'=>'Albanian'
        ]);
    }
    public function test_bloodGroup(){
        $this->assertDatabaseHas('blood_groups',[
            'name'=>'O+'
        ]);
    }
    public function test_Skills(){
        $this->assertDatabaseMissing('skills',[
            'name'=>'Naughty'
        ]);
    }
}
