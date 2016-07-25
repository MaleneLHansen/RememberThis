<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $fillable = ['name', 'description'];

    protected $dates = ['beginDate'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function projecttype()
    {
        return $this->belongsTo('App\ProjectType');
    }
    
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at', 'desc')->take(3)->active();
    }

    public function scopeActive($query){
    	return $query->where('status', 1);
    }

    public function allcomments()
    {
    	return $this->hasMany('App\Comment')->where('status', 1);
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

}
