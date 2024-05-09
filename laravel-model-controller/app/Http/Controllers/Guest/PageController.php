<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.welcome');
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
