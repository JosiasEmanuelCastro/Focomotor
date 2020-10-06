<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\Trademark;
use App\Models\Model;

class DataController extends Controller
{
    public function getLocations($finder)
    {
    	// https://nominatim.openstreetmap.org/search?city=Santa%20fe&countrycodes=ar&format=json

    	$response = Http::get("https://nominatim.openstreetmap.org/search?city=$finder&countrycodes=ar&format=json");
		$data = $response->json();
		
		return $data;
    }

    public function saveData()
    {
    	
    	$vehicles = Vehicle::all();

    	foreach ($vehicles as $item) {

    		$category = Category::firstOrCreate(['name' => $item->categories]);

    		$trademark = Trademark::firstOrCreate(
    			['name' => $item->trademarks], 
    			['category_id' => $category->id]
    		);

    		$trademark = Model::create(
    			['name' => $item->models, 'trademark_id' => $trademark->id]
    		);
    	}

    	return Category::all();

    }
}
