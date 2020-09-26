<?php

namespace App;

class Order extends Model
{
    //
    protected $fillable = ['staffid', 'productid', 'amount'];

    public function staffs() {
        return $this->belongsToMany("App\Staff");
    }

    public function products() {
        return $this->belongsToMany("App\Product");
    }
}
