<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /* Virtual Field Generate */
    public function getRoleIdAttribute()
    {
        return $this->roles()->lists('id')->toArray();
    }

    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );

    }


    public function hasRole($role)
    {
        if(is_string($role)){
            return $this->roles->contains('name',$role);
        }

        return !! $role->intersect($this->roles)->count();
    }
}
