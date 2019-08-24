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

    public function create(Request $request)
    {
        $student = Students::create($request->all());

        return response()->json($student, 201);
    }

    // public function update($id, Request $request)
    // {
    //     $author = Author::findOrFail($id);
    //     $author->update($request->all());

    //     return response()->json($author, 200);
    // }

    public function delete($id)
    {
        Students::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}