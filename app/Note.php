<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
    protected $table = 'note';
    protected $fillable = ['name'];
}
