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
		}
	}
}
