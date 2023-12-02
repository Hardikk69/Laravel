<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    function about() {
        return view('about');
    }
}
