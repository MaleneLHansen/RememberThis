<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    protected $table = 'tasktype';
    protected $fillable = ['name'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function tasks(){
    	return $this->hasMany('App\Task');
    }
}
