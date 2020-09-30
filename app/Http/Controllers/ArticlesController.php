<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'model_id' => ['required', 'integer'],
            'kilometers' => ['required', 'integer'],
            'year' => ['required', 'integer', 'min:1900', 'max:2050'],
            'condition' => ['required', 'string'],
            'fuel' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'feature_image' => ['required', 'image'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('articles.create')
                        ->withErrors($validator)
                        ->withInput();
        }


            $path = $request->file('feature_image')->store('images');

            $article = new Article();

            $article->model_id = $request->model_id;
            $article->kilometers = $request->kilometers;
            $article->year = $request->year;
            $article->fuel = $request->fuel;
            $article->condition = $request->condition;   
            $article->price = $request->price;
            $article->description = $request->description;
            $article->feature_image = $path;
            $article->user_id = Auth::id();

            $article->save();

            return redirect('profile', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
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
