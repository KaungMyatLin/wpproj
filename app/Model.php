<?php

namespace App;

use Illuminate\Database\Eloquent\Model as baseModel;

class Model extends baseModel
{
    //
    protected $hidden = ['created_at', 'updated_at'];
}
