<?php

namespace App\Http\Controllers;

use App\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{

    public function showAllTeachers()
    {
        return response()->json(Teachers::all());
    }

}