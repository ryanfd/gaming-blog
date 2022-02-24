<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // home page
    public function index()
    {
        return view('index');
    }

    // about page
    // public function about()
    // {

    // }
}
