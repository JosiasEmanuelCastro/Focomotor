<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Services\MercadoPago\Plan as MPlan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PlanController extends Controller
{

    public function store(Request $request)
    {
        try{

            $mp_plan = MPlan::create($request->name, $request->price, "1234C$request->limit");
            
            $plan = Plan::create([
                "role_id" => 2,
                "name" => $request->name,
                "articles_limit" => $request->limit,
                "price" => $request->price,
                "external_reference" => "1234C$request->limit",
                "external_id" => $mp_plan->id,
            ]);

            return $plan;

        }catch(\Exception $e){

            return $e->getMessage();

        }
        
        
    }

    public function getPlan()
    {
        // Agrega credenciales
        \MercadoPago\SDK::setAccessToken(env('MP_PROD_ACCESS_TOKEN'));

        // Crea un objeto de preferencia
        $preference = new \MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new \MercadoPago\Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        $preference->items = array($item);
        $preference->save();
    }

    public function subscribeMP()
    {

        $mercadoPago = new MercadoPago();

        $mercadoPago->subscribe();

    }

    public function subscribe($plan)
    {

        $plan = Plan::find($plan);

        $mp_plan = MPlan::subscribeToPlan($plan->external_id);

        return Redirect::to($mp_plan->init_point);
    }
}
