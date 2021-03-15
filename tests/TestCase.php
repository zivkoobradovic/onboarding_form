<?php

namespace Tests;

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function createTeam () {
        return Team::factory()->create();
    }

    public function createAuthUserWithTeam () {
        $user = User::factory()->hasTeam($this->createTeam()->id)->create();
        return $user;
    }
}
