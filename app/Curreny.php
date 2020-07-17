<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curreny extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
