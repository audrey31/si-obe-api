<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAllCourses() {
        $courses = Courses::all();
        
        return response()->json([
            'status' => 'success',
            'syllabi' => $courses
        ], 200);
    }

    public function getCoursesById($id) {
        $courses = Courses::where("code", $id)->firstOrFail();

        if ($courses){
            return response()->json([
                'success' => true,
                'data' => $courses,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Courses tidak terdapat di database',
            ], 400);
        }
    }

    public function store(Request $request) {
        $courses = Courses::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'course_credit' => $request->input('course_credit'),
            'lab_credit' => $request->input('lab_credit'),
            'type' => $request->input('type'),
            'short_description' => $request->input('short_description'),
            'minimal_requirement' => $request->input('minimal_requirement'),
            'study_material_summary' => $request->input('study_material_summary'),
            'learning_media' => $request->input('learning_media'),
            'study_program' => $request->input('study_program'),
            'creator_user_id' => $request->input('creator_user_id')
        ]);


        if ($courses){
            return response()->json([
                'success' => true,
                'message' => 'Courses berhasil disimpan',
                'data' => $courses,
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Courses gagal disimpan',
            ], 400);
        }
    }

    public function delete($id) {
        $courses = Courses::where("code", $id)->delete();

        return response()->json([
            "status" => "success",
            "message" => "Syllabus berhasil dihapus"
        ], 200);
    }

    public function update(Request $request, $id) {
        $courses = Courses::find($id);

        $courses->code = $request->input('code');
        $courses->name = $request->input('name');
        $courses->course_credit = $request->input('course_credit');
        $courses->lab_credit = $request->input('lab_credit');
        $courses->type = $request->input('type');
        $courses->short_description = $request->input('short_description');
        $courses->minimal_requirement = $request->input('minimal_requirement');
        $courses->study_material_summary = $request->input('study_material_summary');
        $courses->learning_media = $request->input('learning_media');
        $courses->study_program = $request->input('study_program');
        $courses->creator_user_id = $request->input('creator_user_id');
        $courses->save();

        return response()->json([
            "status" => "success",
            "message" => "Syllabus berhasil diubah",
            "data" => $courses
        ], 200);
    }

}
