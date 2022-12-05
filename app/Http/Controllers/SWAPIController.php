<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SWAPIController extends Controller
{
    public $search;
    public $actors;

    public function index(Request $request)
    {
        if(!empty($request->search))
        {
            $this->actors = Http::get('https://swapi.dev/api/people',[
                'search' => $request->search
            ])->object()->results;
        }
        

        //var_dump($actors['results'][0]);
        //$actors = $actors['results'][0];

        return view('swapi.index')->with('actors', $this->actors)->with('search', $this->search);
    }

    public function movies($actorId)
    {
        $actors = collect(Http::get('https://swapi.dev/api/people/'.$actorId)->object()->films);

        $moviesUrl = $actors->map(function($movie, $key) {									
            return $movie;
            });
        
        $movies = collect();    

        foreach($moviesUrl as $movie)
        {
            $movies->add([HTTP::get($movie)->object()->title]);
        }

        return view('swapi.movies', compact('movies'));
    }
}
