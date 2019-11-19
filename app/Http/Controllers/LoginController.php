<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
class LoginController extends Controller
{



    public function login(Request $request)
    {
       
        $user = DB::table('profiles')
        ->where('email',  $request->input('email'))
        ->where('password', $request->input('password'))
        ->where('userType', $request->input('userType'))
        ->get();
        
        return response()->json($user, 200);   
    }    
}
