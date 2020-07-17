<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jop_type extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
