<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $table = 'projecttype';

    protected $fillable = ['name'];

    public function projects(){
    	return $this->hasMany('App\Project');
    }

}
