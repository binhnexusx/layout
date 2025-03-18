<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\bill;
class customer extends Model
{
    protected $table = "customer";
    public function bill() : hasMany {
        return $this->hasMany(bill::class,'id_customer');
    }
}
