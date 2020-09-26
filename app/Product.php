<?php

namespace App;

class Product extends Model
{
    //
    protected $fillable = ['productname', 'price', 'catname'];

    public function category() {
        return $this->belongsToMany("App\Category");
    }
    
    public function productDetail() {
        return $this->hasMany("App\ProductDetail");
    }

    public function orders() {
        return $this->hasMany("App\Order");
    }
}
