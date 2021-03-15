<?php

namespace App\Models;

use App\Models\Onboarding;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manager extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function onboardings () {
        return $this->hasMany(Onboarding::class, 'manager_id');
    }
}
