<?php

namespace App\Http\Controllers;

use App\queries;
use Illuminate\Http\Request;

class QueryController extends Controller
{

    public function showAllQuery()
    {
        return response()->json(queries::all());
    }
    
}