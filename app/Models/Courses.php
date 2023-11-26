<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

        public $timestamps = false;

    protected $table = 'courses';

    protected $primaryKey = 'code';

    protected $fillable = [
        'code', 'name', 'course_credit', 'lab_credit', 'type', 'short_description',
        'minimal_requirement', 'study_material_summary', 'learning_media', 'study_program', 'creator_user_id'
    ];


    // public function studyProgram()
    // {
    //     return $this->belongsTo(StudyProgram::class, 'study_program_id');
    // }

    // public function creator()
    // {
    //     return $this->belongsTo(User::class, 'creator_user_id');
    // }

    // public function courseClasses(){
    //     return $this->hasMany(CourseClass::class);
    // }

    // public function syllabi()
    // {
    //     return $this->hasMany(Syllabus::class);
    // }
}
