<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Queries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
class QueryController extends Controller
{

    public function getPeopleQueries()
    {
        return response()->json(Queries::all());
    }
 
    public function create(Request $request)
    {
        $query = Queries::create($request->all());
        return response()->json($query, 201);
    }   
    // public function getQueries()
    // {
    //     return $this->belongsto('Queries'); //->where('id', '1')->get();;
    // }
    public function getUserQueries(Request $request)
    {
        $queries = DB::table('Queries')
        ->where('profile_id',  $request->input('id'))
        ->get();

        return response()->json($queries, 200); 
    }
   
}