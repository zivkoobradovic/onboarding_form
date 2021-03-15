<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegrationCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function integrations () {
        return $this->hasMany(Integration::class, 'integration_category_id');
    }
}
