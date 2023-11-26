<?php

namespace App\Http\Controllers;

use App\Models\Syllabus;
use Illuminate\Http\Request;

class SyllabusController extends Controller
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

    public function getAllSyllabus() {
        $syllabus = Syllabus::all();
        
        return response()->json([
            'status' => 'success',
            'syllabi' => $syllabus
        ], 200);
    }

    public function store(Request $request) {
        $syllabus = Syllabus::create([
            'course_id' => $request->input('course_id'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'head_of_study_program' => $request->input('head_of_study_program'),
            'creator_user_id' => $request->input('creator_user_id')
        ]);

        if ($syllabus){
            return response()->json([
                'success' => true,
                'message' => 'Syllabus berhasil disimpan',
                'data' => $syllabus,
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Syllabus gagal disimpan',
            ], 400);
        }
    }

    public function getSyllabusById($id) {
        $syllabus = Syllabus::find($id);

        if ($syllabus){
            return response()->json([
                'success' => true,
                'data' => $syllabus,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Syllabus tidak terdapat di database',
            ], 400);
        }
    }

    public function delete($id) {
        $syllabus = Syllabus::find($id)->delete();

        return response()->json([
            "status" => "success",
            "message" => "Syllabus berhasil dihapus"
        ], 200);
    }

    public function update(Request $request, $id) {
        $syllabus = Syllabus::find($id);
        
        $syllabus->course_id = $request->course_id;
        $syllabus->title = $request->title;
        $syllabus->author = $request->author;
        $syllabus->head_of_study_program = $request->head_of_study_program;
        $syllabus->creator_user_id = $request->creator_user_id;

        $syllabus->save();

        return response()->json([
            "status" => "success",
            "message" => "Syllabus berhasil diubah",
            'data' => $syllabus,
        ], 200);
    }
}
