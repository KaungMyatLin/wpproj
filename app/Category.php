<?php

namespace App;

class Category extends Model
{
    //
    protected $fillable = ['name'];

    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function products() {
        return $this->hasMany("App\Product");
    }
}
