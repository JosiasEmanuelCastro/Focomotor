<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Services\MercadoPago;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PlanController extends Controller
{
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

        //dd($plan);

        $access_token = env('MP_ACCESS_TOKEN');

        $response = Http::post("https://api.mercadopago.com/preapproval?access_token=$access_token", [
            "auto_recurring" => array(
                "currency_id" => "ARS",
                "transaction_amount" => $plan->price,
                "notification_url" => "https://focomotor.herokuapp.com/notifications/webhook",
                "frequency" => 1,
                "frequency_type" => "months"
               
            ),
              "back_url" => "https://focomotor.herokuapp.com/usuario",
              "collector_id" => 496324,
              //"collector_id" => 657122006,
              "external_reference" => auth()->user()->email,
              "payer_email" => auth()->user()->email,
              "reason" => $plan->name,
              "status" => "pending"
        ]);

        $data = $response->json();

        $data = (object)($data);

        //dd($data);

        return Redirect::to($data->init_point);

        /*{
            "auto_recurring": {
              "currency_id": "ARS",
              "transaction_amount": 10,
              "frequency": 1,
              "frequency_type": "months"
             
            },
            "back_url": "https://webxander.com",
            "collector_id": 496324,
            "external_reference": "1245AT234562",
            "payer_email": "focomotor@hotmail.com",
            "reason": "Suscripción particular",
            "status": "pending"
          }
        */
    }
}
