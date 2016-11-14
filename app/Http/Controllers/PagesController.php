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

    public function feature()
    {
        return view('/pages/feature');
    }

    public function admin()
    {
        return view('/accounts/admin');
    }
}
