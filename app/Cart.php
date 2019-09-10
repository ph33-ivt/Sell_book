<?php

namespace App;



class Cart
{
    public $items=null;
    public $totalquantity=0;
    public $totalprice=0;

    public function __construct($oldCart)
    {
    	if($oldCart){
    		$this->items= $oldCart->items;
    		$this->totalquantity= $oldCart->totalquantity;
    		$this->totalprice= $oldCart->totalprice;
    	}
    }
    public function add($item, $id)
    {
    	$storedItem= ['quantity'=>0, 'price'=>$item->price, 'item'=>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$storedItem=$this->items[$id];
    		}
    	}
    	$storedItem['quantity']++;
    	$storedItem['price']= $item->price * $storedItem['quantity'];
    	$this->items[$id]=$storedItem;
    	$this->totalquantity++;
    	$this->totalprice+= $item->price;
    }
}
