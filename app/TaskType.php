<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    protected $table = 'tasktype';
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function scopeNotdeleted($query){
        return $query->whereIn('status', [1, 2]);
    }
}
