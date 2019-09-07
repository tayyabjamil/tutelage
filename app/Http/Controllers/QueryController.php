<?php

namespace App\Http\Controllers;

use App\Queries;
use Illuminate\Http\Request;

class QueryController extends Controller
{

    public function showAllQuery()
    {
        return response()->json(Queries::all());
    }
    
}