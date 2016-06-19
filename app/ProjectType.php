<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $table = 'projettype';

    protected $fillable = 'projecttype';

    public function projects(){
    	return $this->hasMany('App\Project');
    }

}
