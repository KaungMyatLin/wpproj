<?php

namespace App;

class ProductDetail extends Model
{
    //
    protected $fillable = ['image', 'pid'];

    public function Product() {
        return $this->belongsToMany("App\Product");
    }
}
