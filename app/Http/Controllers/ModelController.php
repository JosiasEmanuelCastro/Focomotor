<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model;

class ModelController extends Controller
{
    public function index($trademark)
    {
    	return Model::where('trademark_id', $trademark)->get();
    }
}
