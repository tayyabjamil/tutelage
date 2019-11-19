<?php

namespace App\Http\Controllers;

use App\profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class ProfilesController extends Controller
{
    public function createProfile(Request $request)
    {
        $query = Profiles::create($request->all());
        return response()->json($query, 201);
    }

    public function getUserProfile(Request $request)
    {
        $userProfile = DB::table('profiles')
        ->where('id',  $request->input('id'))
        ->get();

        return response()->json($userProfile, 200); 
    
    }

}