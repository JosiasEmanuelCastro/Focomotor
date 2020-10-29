<?php

namespace App\Http\Controllers\Api;

use App\Models\Model;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\Trademark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function getLocations($finder)
    {
    	// https://nominatim.openstreetmap.org/search?city=Santa%20fe&countrycodes=ar&format=json

    	$response = Http::get("https://nominatim.openstreetmap.org/search?city=$finder&countrycodes=ar&addressdetails=1&format=json");
		$data = $response->json();

		return array_filter($data, function($v, $k){
			return ($k == 'town');
		}, ARRAY_FILTER_USE_BOTH);
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

	public function saveMarks()
    {
    	
    	$marks = Trademark::all();

    	foreach ($marks as $mark) {

			$category = Category::create([
				'name' => $mark->name,
				'parent' => $mark->category_id,
				'type_id' => 2,
			]);

			$models = $mark->models;

			foreach ($models as $model){
				Category::create([
					'name' => $model->name,
					'parent' => $category->id,
					'type_id' => 3,
				]);
			}

    	}

    	return "Data is updated";

	}
	
	public function notifications()
	{
		\MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));

		
		//dd(request()->all());

		Log::info('Mercado pago.', ['webhook' => request()->all()]);
		Log::info('Mercado pago.', ['Type' => request()->input('type')]);

		switch(request()->input('type')) {
			case "payment":
				//$payment = \MercadoPago\Payment::find_by_id($_POST["id"]);
				Log::info('Mercado pago.', ['Res' => request()->input('data.id')]);
				return;
				break;
			case "plan":
				$plan = \MercadoPago\Plan::find_by_id($_POST["id"]);
				break;
			case "subscription":
				$plan = \MercadoPago\Subscription::find_by_id($_POST["id"]);
				return;
				break;
			case "invoice":
				$plan = \MercadoPago\Invoice::find_by_id($_POST["id"]);
				break;
			case "test":
				return "HI!!";
				break;
			default: return 0;
		}

		
	}
}
