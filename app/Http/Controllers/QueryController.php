<?php

namespace App\Http\Controllers;

use App\Queries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class QueryController extends Controller
{

    public function getPeopleQueries()
    {
        return response()->json(queries::all());
    }
    public function getUserQueries(Request $request)
    {
        $userQueries = DB::table('queries')
        ->where('profile_id',  $request->input('id'))
        ->get();

        return response()->json($userQueries, 200); 
    
    }

    public function createQuery(Request $request)
    {
        $query = Queries::create($request->all());
        return response()->json($query, 201);
    }

}