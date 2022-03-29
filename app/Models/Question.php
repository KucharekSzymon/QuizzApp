<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    public $timestamps = false;
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
        'answ_1',
        'answ_2',
        'answ_3',
        'answ_4',
        'correct'
    ];
    public function tests(){
        return $this->belongsToMany(Test::class, 'test_questions');
    }
}
