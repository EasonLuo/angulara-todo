<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable = ['title','note','importance','urgency','difficulty'];

    function scopeTodo($query){
    	$query->where
    }
}

