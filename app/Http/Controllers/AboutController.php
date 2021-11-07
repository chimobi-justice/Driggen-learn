<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['IsAuthUser', 'IsAuthInstructor']);
    }

    public function index() 
    {
        return view('frontend.pages.about');
    }
}
