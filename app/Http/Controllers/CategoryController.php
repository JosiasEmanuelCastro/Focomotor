<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
    	return Category::where('parent', 0)->get();
    }

    public function show($category)
    {
        $category = Category::find($category);

       
        return [
                'items' => $category->subCategories,
                'children_node' => $category->type->name, 
            ];

         
       
    }
}
