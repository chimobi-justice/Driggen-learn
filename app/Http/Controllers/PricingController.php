<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['IsAuthUser', 'IsAuthInstructor']);
    }

    public function index() 
    {
        return view('frontend.pages.Pricing');
    }
}
