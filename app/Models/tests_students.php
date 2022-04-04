<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tests_students extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'test_id', 'student_id'
    ];
}
