<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::where('parent_id', 0)->get();
        
        return [
            'items' => $category,
            'children_node' => "Categoria", 
        ];
    }

    public function show($category)
    {
        $category = Category::find($category);

       
        return [
                'items' => $category->childrens,
                'children_node' => $category->type->name, 
            ];

         
       
    }
}
