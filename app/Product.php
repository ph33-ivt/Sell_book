<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name', 'status', 'price', 'quantity', 'description', 'image', 'category_id'
    ];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
    public function orderdetails(){
    	return $this->hasMany('App\OrderDetail');
    }
}
