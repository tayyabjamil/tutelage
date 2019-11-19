<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    // public function showAllProfile()
    // {
    //     return response()->json(Profile::all());
    // }
    public function showAllQueries()
    {
        return response()->json(Queries::all());
    }
    
    public function create(Request $request)
    {
        $profile = Profile::create($request->all());
        return response()->json($profile, 201);
    }

    public function getUserProfile(Request $request)
    {
        $Profile = DB::table('Profiles')
        ->where('id',  $request->input('id'))
        ->get();
        return response()->json($Profile, 200); 
    }
    
   
}