<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table = "type_products";
    public function products() : hasMany {
        return $this->hasMany(product::class,'type_id');
    }
}
