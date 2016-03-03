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
        'address'
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
     * Boot Method
     */
    public static function boot()
    {
        parent::boot();

        static::deleted(function ($post) {
            $post->foods()->detach( $post->food_list );
        });

//        static::restored(function ($user) {
//            foreach($user->getTrashedArticles() as $article) {
//                $article->restore();
//            }
//        });
    }

}
