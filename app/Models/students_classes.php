<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students_classes extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'class_id', 'user_id'
    ];
}
