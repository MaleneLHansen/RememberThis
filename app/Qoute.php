<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qoute extends Model
{
    protected $table = 'qoute';

    protected $fillable = ['text', 'type'];


}
