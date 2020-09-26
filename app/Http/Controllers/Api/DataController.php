<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}
