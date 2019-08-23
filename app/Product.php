<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name', 'status', 'quantity', 'price', 'description', 'image', 'category_id'
    ];
}
