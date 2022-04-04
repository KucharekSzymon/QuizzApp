<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tests_classes extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'test_id', 'classes_id'
    ];
}
