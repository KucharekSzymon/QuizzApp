<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test_questions extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'test_id', 'user_id'
    ];
}
