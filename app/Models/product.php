<?php

namespace App\Models;
use App\Models\type_products;
use Illuminate\Database\Eloquent\Model;
use App\Models\type_product;
use App\Models\bill_detail;
class product extends Model
{
    protected $table = "products";
    public function type_products () : BelongsTo{
        return $this->belongsTo(type_product::class,'type_id');
    }
    public function bill_detail () : BelongsTo{
        return $this->belongsTo(bill_detail::class,'id_product');
    }
}
