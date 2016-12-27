<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages/home');

    }

    public function about()
    {
        return view('/pages/about');
    }

    public function contact()
    {
        return view('/pages/contact');
    }

    public function locations()
    {
        return view('/pages/locations');
    }

    public function showingnow()
    {
        return view('/pages/showingnow');
    }

    public function feature()
    {
        return view('/pages/feature');
    }

    public function kids()
    {
        return view('/pages/kids');
    }

    // public function admin()
    // {
    //     return view('/accounts/admin');
    // }
}
