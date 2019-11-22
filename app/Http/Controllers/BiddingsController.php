<?php

namespace App\Http\Controllers;

use App\Biddings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
class BiddingsController extends Controller
{


    public function createBiddings(Request $request)
    {
        $bids = Biddings::create($request->all());
        return response()->json($bids, 201);
    }
    
  
    public function getBiddingsResponces(Request $request)
    {

        $data = [];
        $biddings = DB::table('biddings')
        ->where('queries_id',  $request->input('query_id'))
        ->get();

        // for ($i=0; $i < (sizeof($biddings)) ; $i++) {
        //     $temProfile = DB::table('profiles')
        //     ->where('id',  $biddings[$i]->profile_id)
        //     ->get();
        //     array_push($data, $temProfile);
        // }

        // $finalResult = $biddings->merge($data);
      
        return response()->json($biddings, 200); 
    }

    public function getBiddingsProfiles(Request $request)
    {

        $data = [];
        $biddings = DB::table('biddings')
        ->where('queries_id',  $request->input('query_id'))
        ->get();

        for ($i=0; $i < (sizeof($biddings)) ; $i++) {
            $temProfile = DB::table('profiles')
            ->where('id',  $biddings[$i]->profile_id)
            ->get();
            array_push($data, $temProfile);
        }

      
        return response()->json($data, 200); 
    }
    
   
}

