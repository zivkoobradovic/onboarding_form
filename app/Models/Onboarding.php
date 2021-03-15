<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'contact_info' => 'object',
        'platform' => 'object',
        'product' => 'object',
        'techSupport' => 'object',
        'oto' => 'object',
        'integrationType' => 'object',
    ];

    public function manager () {
        return $this->hasOne(Manager::class, 'id', 'manager_id');
    }
}
