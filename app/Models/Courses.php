<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

        public $timestamps = false;

    protected $table = 'course';

    protected $primaryKey = 'code';

    protected $fillable = [
        'code', 'name', 'course_credit', 'lab_credit', 'type', 'short_description',
        'minimal_requirement', 'study_material_summary', 'learning_media', 'study_program',
        'creator_user_id'
    ];

    protected $casts = [
        'code' => 'string',
    ];
}
