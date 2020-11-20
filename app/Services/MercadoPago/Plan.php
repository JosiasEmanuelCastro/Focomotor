<?php

namespace App\Services\MercadoPago;

use Illuminate\Support\Facades\Http;

/** Test User
 * 
 * TEST
 * Usuario
 *   "id": 656571240,
 *   "nickname": "TETE957723",
 *   "password": "qatest1506",
 *   "site_status": "active",
 *   "email": "test_user_89352529@testuser.com"
 * 
 * Vendedor
 * "id": 656573464,
 * "nickname": "TT362956",
 * "password": "qatest8658",
 * "site_status": "active",
 * "email": "test_user_54977200@testuser.com"
 *  
 * PROD 
 * Usuario 1
 * "id": 656572906,
 *   "nickname": "TT244556",
 *   "password": "qatest5052",
 *   "site_status": "active",
 *   "email": "test_user_87219470@testuser.com"
 * 
 * Usuario 2
 * 
 *   "id": 656573300,
 *   *"nickname": "TESTMOKTH0J7",
 *   "password": "qatest9248",
 *   "site_status": "active",
 *   "email": "test_user_35594770@testuser.com"
 * 
 * - Vendedor
 * 
 *  "id": 656573171, 
 *   "nickname": "TETE2053225",
 *   "password": "qatest2363",
 *   "site_status": "active",
 *   "email": "test_user_8392275@testuser.com"
 * 
 * ID 2c93808475095bec017509d10076019e
 * 
 */

class Plan {


    public static $mp_base_url = "https://api.mercadopago.com/";

    public static function create($name, $price)
    {

        $response = Http::post(self::$mp_base_url . "preapproval_plan?access_token=TEST-1267169749580878-111416-e19ed95bb3136925ea145f0e9277535d-672482647", [
                "auto_recurring" => array(
                    "currency_id" => "ARS",
                    "transaction_amount" => $price,
                    "notification_url" => "https://focomotor.herokuapp.com/notifications/webhook",
                    "frequency" => 1,
                    "frequency_type" => "months"
                
                ),
                "back_url" => "https://focomotor.herokuapp.com/usuario",
                "reason" => $name
            ]);

        $data = $response->json();

        return (object)($data);
    }

    public static function subscribeToPlan($plan_id)
    {

        $response = Http::get(self::$mp_base_url . "preapproval_plan/$plan_id?access_token=" . config('mpago.access_token'));

        $data = $response->json();

        //dd($data);

        return (object)($data);
    }

    public static function addSubscription2($plan, $payer)
    {

        $response = Http::post(self::$mp_base_url . "preapproval?access_token=" . config('mpago.access_token'), [
            
            "auto_recurring" => [
                "currency_id" => "ARS",
                "transaction_amount" => $plan->price,
                "frequency" => 1,
                "frequency_type" => "months"
            ],
            "back_url" => "http://www.mercadopago.com.ar/",
            "external_reference" => "PLAN" . $plan->id . "REF" . auth()->user()->id,
            "reason" => $plan->name,
            "status" => "pending",
            
            "payer_email" => $payer->email
        ]);

        $data = $response->json();

        //dd($data);

        return (object)($data);

        /*

            curl --location --request POST 'https://api.mercadopago.com/preapproval' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer ENV_ACCESS_TOKEN' \
--data-raw '{
  "auto_recurring": {
    "currency_id": "ARS",
    "transaction_amount": 1100,
    "frequency": 1,
    "frequency_type": "months",
    "end_date": "2022-07-20T11:59:52.581-04:00"
  },
  "back_url": "http://www.mercadopago.com.ar/",
  "collector_id": 100200300,
  "external_reference": "1245AT234562",
  "payer_email": "test_user_XXXX@testuser.com",
  "reason": "Suscripción Pase Mensual Gold - Particular",
  "status": "pending"
}'

        */



    }

    public static function addSubscription($plan_id, $payer)
    {

        $response = Http::post(self::$mp_base_url . "preapproval?access_token=" . config('mpago.access_token'), [
            "preapproval_plan_id" => $plan_id,
            "card_token_id" => $payer->token,
            "payer_email" => $payer->email
        ]);

        $data = $response->json();

        dd($data);

        return (object)($data);



    }
}