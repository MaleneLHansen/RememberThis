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
    protected $table = 'user';

    protected $fillable = [
        'name', 'email', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects(){
        return $this->hasMany('App\Project');
    }

    public function contacts(){
        return $this->hasMany('App\Contact')->whereIn('status', [1, 2]);
    }

    public function projecttypes(){
        return $this->hasMany('App\ProjectType')->whereIn('status', [1,2]);
    }

    public function qoutes(){
        return $this->hasMany('App\Qoute')->where('active', 1);
    }
}
