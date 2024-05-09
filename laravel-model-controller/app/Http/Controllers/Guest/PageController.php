<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = movies::all();
        // dd($movies);
        return view('guests.welcome', compact('movies'));
    }

    public function about()
    {
        return view('guests.about');
    }
    public function contacts()
    {
        return view('guests.contacts');
    }
}
