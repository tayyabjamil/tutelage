<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
class LoginController extends Controller
{


// add validation on database side
    
    // $author = Author::create($request->all());

    // return response()->json($author, 201);

    public function login(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => '',
        //     // 'location' => 'required|alpha'
        // ]);
    
        $user = DB::table('profiles')
        ->where('email',  $request->input('email'))
        ->where('password', $request->input('password'))
        ->where('userType', $request->input('userType'))
        ->get();
        
        return response()->json($user, 200);   
    }    
}
