<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
    	'name', 'address', 'tel', 'user_id'
    ];
}
