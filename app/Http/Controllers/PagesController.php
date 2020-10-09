<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function plans()
    {
          
        return view('plans');
    }

}
