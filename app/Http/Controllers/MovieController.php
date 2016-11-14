<?php
namespace App\Http\Controllers;


use App\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MovieController extends Controller
{
    public function index()
    {
         $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

}
