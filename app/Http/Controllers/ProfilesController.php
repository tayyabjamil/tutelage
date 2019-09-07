<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function showAllProfile()
    {
        return response()->json(Profile::all());
    }

    
    
    public function create(Request $request)
    {
        $profile = Profile::create($request->all());
        return response()->json($profile, 201);
    }
}