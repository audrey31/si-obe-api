<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'syllabi';

    protected $fillable = [
        'title', 'head_of_study_program', 'author', 'course_id', 'creator_user_id'
    ];
}
