<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Models\ManualArticle;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //dd($request->condition);

        $search = $request->q;
        $location = $request->location;
        $fuel = $request->fuel;
        $kilometers = $request->kilometers ? explode(",",$request->kilometers) : null;
        $price = $request->price ? explode(",",$request->price) : null;
        $year = $request->year;
        $condition = $request->condition;
        $sort = $request->sort ? $request->sort : 'DESC';
        $order = $request->order ? $request->order : 'created_at';

        $articles = DB::table('articles')
                ->whereNull('deleted_at')
                ->whereNotNull('published_at')
                ->when($location, function ($query, $location) {
                    return $query->where('location->address->town', $location)
                            ->orWhere('location->address->city', $location);
                })
                ->when($search, function ($query, $search) {
                    return $query->where('title', 'like', "%$search%");
                })
                ->when($year, function ($query, $year) {
                    return $query->where('year', '=', $year);
                })
                ->when($fuel, function ($query, $fuel) {
                    return $query->where('fuel', 'like', "%$fuel%");
                })
                ->when($condition, function ($query, $condition) {
                    return $query->where('condition', 'like', "$condition");
                })
                ->when($kilometers, function ($query, $kilometers) {
                    return $query->whereBetween('kilometers', [$kilometers[0], $kilometers[1]]);
                })
                ->when($price, function ($query, $price) {
                    return $query->whereBetween('price', [$price[0], $price[1]]);
                });

        $query = $articles->join('categories', 'categories.id', '=', 'articles.type_id');
        
        $queryPaginate = clone $query;
        
        $articles = $queryPaginate->orderBy('articles.' . $order, $sort)->paginate(3);

        $queryLocation = clone $query;

        $countLocations = $queryLocation->groupBy('location')->select(DB::raw('count(*) as total, location'))
        ->get();

        $queryFuel = clone $query;

        $countFuel = $queryFuel->groupBy('fuel')->select(DB::raw('count(*) as total, fuel'))
        ->get();

        $queryCondition = clone $query;

        $countCondition = $queryCondition->groupBy('condition')->select(DB::raw('count(*) as total, articles.condition'))
        ->get();

        $queryDate = clone $query;

        $countDate = $queryDate->groupBy('year')->select(DB::raw('count(*) as total, articles.year'))
        ->get();

        $queryCount = clone $query;

        return view('list', compact('articles', 'countLocations', 'countFuel', 'countCondition', 'countDate', 'queryCount'));
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
            return redirect()->route('articles.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $image = $request->file('feature_image');

        $path = ImageService::saveImage($image, "images");

        $article = new Article();

        $tree = json_decode($request->tree);
        
        $article->type_id = $tree[0]->id;
        $article->category_id = end($tree)->id;
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

        return redirect('dashboard', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $article = Article::whereSlug($request->slug)->first();

        $article->views++;

        $article->save();

        return view('articles.show', compact('article'));
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
