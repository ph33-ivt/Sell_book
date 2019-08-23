<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable=[
    	'quantity', 'price', 'order_id', 'product_id'
    ];
}
