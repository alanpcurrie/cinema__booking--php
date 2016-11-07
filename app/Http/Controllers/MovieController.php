<?php

namespace App\Http\Controllers;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('cards.index', compact('movies'));
    }

}
