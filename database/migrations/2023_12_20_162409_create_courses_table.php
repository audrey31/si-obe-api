<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course', function (Blueprint $table) {
            $table->string('code')->primary('code');
            $table->string('name');
            $table->integer('course_credit');
            $table->integer('lab_credit');
            $table->string('type');
            $table->text('short_description');
            $table->text('minimal_requirement');
            $table->text('study_material_summary');
            $table->text('learning_media');
            $table->string('study_program');
            $table->integer('creator_user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
