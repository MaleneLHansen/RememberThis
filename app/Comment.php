<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment'; 
    protected $fillable = ['body'];

    public function project(){
    	return $this->belongsTo('App\Project');
    }

    public function scopeActive($query){
    	return $query->where('status', 1);
    }
}
