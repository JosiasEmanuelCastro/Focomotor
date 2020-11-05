<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Models\ManualArticle;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'category_id' => ['integer'],
            'kilometers' => ['required', 'integer'],
            'year' => ['required', 'integer', 'min:1900', 'max:2050'],
            'condition' => ['required', 'string'],
            'fuel' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'feature_image' => ['required', 'image', 'max:2048'],
            'images' => 'array',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json( [ 'errors' => $validator->errors() ], 400 );
        }

        $image = $request->file('feature_image');

        $path = ImageService::saveImage($image, "images");

        $article = new Article();

        $category = json_decode($request->category);
        $mark = json_decode($request->mark);
        $model = json_decode($request->model);
        
        //dd($request->location);
        
        $article->type_id = $category->id;
        $article->category_id = $model ? $model->id : $mark->id;
        $article->kilometers = $request->kilometers;
        $article->year = $request->year;
        $article->fuel = $request->fuel;

        if (isset($request->title)) {
            $article->title = $request->title; 
        } else {
            $article->title = $article->title;
        }

        $article->slug  = Str::slug($article->title);
        $article->condition = $request->condition;   
        $article->price = $request->price;
        $article->description = $request->description;
        $article->doors = $request->doors;
        $article->feature_image = $path;
        $article->user_id = Auth::id();

        $article->location = $request->location ? $request->location : auth()->user()->location;

        $article->save();

        //$pathImages = array();

        if(isset($request->images)){
            foreach ($request->images as $image) {

                $path = ImageService::saveImage($image, "images");

                $imageModel = new ArticleImage();
                $imageModel->image_path = $path;
                $imageModel->article_id = $article->id;
                $imageModel->save();
            }

        }

        return response()->json( [ 'data' => $article ]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
