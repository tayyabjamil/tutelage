<?php

namespace App\Http\Controllers;

use App\Ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{

    public function showAllRating()
    {
        return response()->json(Ratings::all());
    }
    
}