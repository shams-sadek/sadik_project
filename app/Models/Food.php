<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $fillable = [
        'name'
    ];

    public function patients()
    {
        return $this->belongsToMany('App\Models\Patient');
    }

}
