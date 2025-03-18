<?php

namespace App\Models;
use App\Models\bill;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = "bill_details";
    public function product() : hasMany {
        return $this->hasMany(product::class,'id_product');
    }
    public function bill () : BelongsTo{
        return $this->belongsTo(bill::class,'id_bill');
    }
}
