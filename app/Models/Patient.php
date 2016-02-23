<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'date_of_birth',
        'gender',
        'address'
    ];

    public function setDateOfBirthAttribute($date)
    {
        $this->attributes['date_of_birth'] = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

//    public function getDateOfBirthAttribute($date)
//    {
//        $this->attributes['date_of_birth'] = Carbon::createFromFormat('Y-m-d', $date);
//    }
}
