<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function showAllStudents()
    {
        return response()->json(Students::all());
    }

    public function showOneStudent($id)
    {
        return response()->json(Students::find($id));
    }
    public function delete($id)
    {
        Students::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function update($id, Request $request)
    {
        $student = Students::findOrFail($id);
        $student->update($request->all());

        return response()->json($student, 200);
    }
    // public function deletebyid($id)
    // {
    //     Students::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
    // public function delete(Student $student)
    // {
    //     $student->delete();

    //     return response()->json(null, 204);
    // }
    public function create(Request $request)
    {
        $student = Students::create($request->all());

        return response()->json($student, 201);
    }

  
}