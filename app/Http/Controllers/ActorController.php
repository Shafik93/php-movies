<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Error;

class ActorController extends Controller
{

    public $filter;

    public function index(Request $request)
    {
        if (!empty($request->filter))
        {
            $actors = Actor::where('name', 'LIKE', '%'.$request->filter.'%')->get();
        }
        else
        {
            $actors = Actor::all();
        }

        return view('actors.index')->with('actors', $actors)->with('filter', $this->filter);
    }

}
