<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';
    public $timestamps = false;
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'threshold'
    ];
    public function questions(){
        return $this->belongsToMany(Question::class, 'test_questions');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'tests_students');
    }
    public function classes(){
        return $this->belongsToMany(Classes::class, 'tests_classes');
    }
}
