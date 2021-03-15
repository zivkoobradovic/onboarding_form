<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function categorie () {
        return $this->hasOne(ProductCategory::class, 'id');
    }
}
