<?php

namespace Tests\Feature\Http\controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Repository;

class PageControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_home_page()
    {
        $respository = Repository::factory()->create();

        $this->get('/')
            ->assertStatus(200)
            ->assertSee($respository->title);
    }
}
