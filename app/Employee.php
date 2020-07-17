<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function jop_type()
    {
        return $this->belongsTo('App\Jop_type');
    }
    public function per()
    {
        return $this->belongsTo('App\Per');
    }
    public function social()
    {
        return $this->belongsTo('App\Social');
    }
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
