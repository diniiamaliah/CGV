<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authorcontroller extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
