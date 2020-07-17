<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
