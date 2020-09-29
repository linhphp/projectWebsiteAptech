<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillDetail extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'bill_id', 
        'product_id', 
        'name_product',
        'quantity',
        'price',
    ];
}
