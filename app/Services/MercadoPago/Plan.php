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

    public static function create($name, $price, $external_reference)
    {

        $response = Http::post(self::$mp_base_url . "preapproval_plan?access_token=" . env('MP_ACCESS_TOKEN'), [
            "auto_recurring" => array(
                "currency_id" => "ARS",
                "transaction_amount" => $price,
                "notification_url" => "https://focomotor.herokuapp.com/notifications/webhook",
                "frequency" => 1,
                "frequency_type" => "months"
               
            ),
              "back_url" => "https://focomotor.herokuapp.com/usuario",
              "collector_id" => env('MP_COLLECTOR_ID'),
              "external_reference" => $external_reference,
              "reason" => $name,
        ]);

        $data = $response->json();

        return (object)($data);
    }

    public static function subscribeToPlan($plan_id)
    {

        $response = Http::get(self::$mp_base_url . "preapproval_plan/$plan_id?access_token=" . env('MP_ACCESS_TOKEN'));

        $data = $response->json();

        //dd($data);

        return (object)($data);
    }
}