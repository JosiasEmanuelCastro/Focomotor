<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trademark;

class TrademarkController extends Controller
{
    public function index($category)
    {
    	return Trademark::where('category_id', $category)->get();
    }
}
