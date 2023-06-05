<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\hari;
use App\Models\jamtayang_seat;
use App\models\jamtayang;
class moviecontroller extends Controller
{
    public function index()
    {
        $movies = movie::get();

        foreach ($movies as $movie) {
            $id = $movie->jam_id;
        }
    $jamtayang= jamtayang_seat::all();

        // $jamtayangseats = Jamtayang_Seat::whereIn('jam_id', $ids)->get();
        // return view('movies', compact('movies', 'jamtayangseats', 'ids'));
        return view('movies', compact('movies','jamtayang'));
    }
    

    public function show(Request $request) 
    {   
        $jamtayangSeat = movie::where('id', $request->movie_id)
                    ->where('jam_id', $request->jam_id)
                    ->findOrFail($request->movie_id);

        $movie = $jamtayangSeat->movie;
        return view('detail-test', compact('movie'));
    }
    
    
   

}


