<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'vendor_type_id',
        'name',
        'mobile',
        'date_of_birth',
        'gender',
        'address',
        'image',
    ];

    public function setDateOfBirthAttribute($date)
    {
        $this->attributes['date_of_birth'] = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

    public function getDateOfBirthAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    public function foods()
    {
        return $this->belongsToMany('App\Models\Food');
    }

    public function getFoodListAttribute()
    {
        return $this->foods()->lists('id')->toArray();
    }


    /*
     * delete Method Override
     */

    public function delete()
    {
        $this->foods()->detach();
        parent::delete();
    }

}
