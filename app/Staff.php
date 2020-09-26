<?php

namespace App;

class Staff extends Model
{
    //
    protected $fillable = ['email', 'password', 'contactno', 'gender'];
    
    protected $table = "staffs";

    public function orders() {
        return $this->hasMany("App\Order");
    }
}
