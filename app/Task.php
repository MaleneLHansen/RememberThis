<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $fillable = ['name', 'description'];

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function notes(){
    	return $this->hasMany('App\Note');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    public function tasktype(){
    	return $this->belongsTo('App\TaskType');
    }

    
}
