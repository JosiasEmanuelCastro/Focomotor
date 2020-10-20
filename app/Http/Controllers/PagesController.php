<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {

        $articles = Article::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('index', compact('articles'));
        
    }

    public function plans()
    {

        $plans = Plan::where('role_id', 2)->get();
         
        return view('plans', compact('plans'));
    }

}
