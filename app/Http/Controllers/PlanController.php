<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use App\Services\MercadoPago\Plan as MPlan;

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

        $payer = [ 'email' => "test_user_49708417@testuser.com" ];

        //$payer = [ 'email' => auth()->user()->email ];

        $mp_plan = MPlan::addSubscription2($plan, (Object)$payer);

        //dd($mp_plan);

        $subscription = new Subscription();

        $subscription->plan_id = $plan->id;
        $subscription->user_id = auth()->user()->id;
        $subscription->articles_limit = $plan->articles_limit;
        $subscription->external_id = $mp_plan->id;
        $subscription->external_reference = $mp_plan->external_reference;
        $subscription->status = $mp_plan->status;
        $subscription->price = $mp_plan->auto_recurring['transaction_amount'];

        $subscription->save();

        //dd($plan);

        //return view('users.subscription', compact('plan'));

        return Redirect::to($mp_plan->init_point);
    }

    public function process_payment(Request $request)
    {
        //dd($request->all());

        $plan = Plan::find($request->plan);

        $payer = [ 'token' => $request->token, 'email' => $request->email ];

        MPlan::addSubscription($plan->external_id, (Object)$payer);
        
    }
}
