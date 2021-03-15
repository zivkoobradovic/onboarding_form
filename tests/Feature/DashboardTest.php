<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Onboarding;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function loged_user_can_see_dashboard () {
        $this->actingAs($this->createAuthUserWithTeam());
        $this->get('/dashboard')->assertStatus(200);
    }

    /** @test */
    public function auth_user_can_see_all_oboardings_on_dashboard () {
        /* $this->withoutExceptionHandling(); */
        $this->actingAs($this->createAuthUserWithTeam());
        $onboarding = Onboarding::factory()->create();
        $response = $this->get('/dashboard')->assertStatus(200);
        $response->assertSee($onboarding->contactPerson);
    }

    /** @test */
    public function auth_user_can_view_show_managers_page () {
        $this->withoutExceptionHandling();
        $this->actingAs($this->createAuthUserWithTeam());
        $this->get('/managers')->assertStatus(200);
    }


    /** @test */
    public function auth_user_can_view_all_managers () {
        $this->withoutExceptionHandling();
        $this->actingAs($this->createAuthUserWithTeam());
        $this->get('/managers')->assertStatus(200);
    }
    /** @test */
    /* public function auth_user_can_create_new_manager () {
        $this->withoutExceptionHandling();
        $this->actingAs($this->createAuthUserWithTeam());
        $this->get('/managers')->assertStatus(200);
    } */
}
