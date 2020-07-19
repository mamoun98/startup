<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
      'photo', 'name', 'email','mobile','city_id', 'id_number','gender_id', 'address', 'birthday','social_id',
      'family', 'Certificate', 'join_date','department_id','job_type_id', 'salary', 'curreny_id','per_id',
      'status_id', 'bank_id', 'branch_id','bank_account','iban'

    ];

    public function getPhotoAttribute($photo){
        return asset($photo);
    }


    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }
    public function gender()
    {
        return $this->belongsTo('App\Gender');
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
    public function job_type()
    {
        return $this->belongsTo('App\Job_type');
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
