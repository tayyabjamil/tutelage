<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function createCourses(Request $request)
    {
        $course = Courses::create($request->all());
        return response()->json($course, 201);
    }

  
    public function getUserCourses(Request $request)
    {
        $course = DB::table('courses')
        ->where('profile_id',  $request->input('profile_id'))
        ->get();

        return response()->json($course, 200); 
    }
}
