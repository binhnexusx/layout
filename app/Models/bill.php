<?php

namespace App\Models;
use App\Models\bill_detail;
use App\Models\customer;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = "bills";
    public function bill_detail() : hasOne {
        return $this->hasOne(bill_detail::class,'id_bill');
    }
    public function customer () : BelongsTo{
        return $this->belongsTo(customer::class,'id_customer');
    }
}
