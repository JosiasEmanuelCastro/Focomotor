<?php

namespace App\Services;

use MercadoPago\SDK;
use MercadoPago\Card;
use MercadoPago\Plan;
use MercadoPago\Customer;
use MercadoPago\Preapproval;
use MercadoPago\Subscription;

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

class MercadoPago {

    public function __construct()
    {
        SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
    }

    public function addCustomer()
    {
        $customer = new Customer();
        $customer->email = "focomotor@hotmail.com";
        $customer->save();

        dd($customer);

        return $customer->id;
    }

    public function createPlan()
    {
        $plan = new Plan();

        $plan->description = "Daily premium package";
        $plan->auto_recurring = array(
            "frequency" => 1,
            "frequency_type" => "days",
            "transaction_amount" => 100
        );
      
        $plan->save();

        return $plan;

    }

    public function subscribe()
    {

        //$this->addCustomer();

        $subscription = new Subscription();

        $plan = $this->createPlan();

        //dd($plan);

        $customer = Customer::get("152185126-hdpVA4cypWLMUr");

        //$cards = Card::all();

        //dd($customer);
        
        $card = new Card();
        $card->token = "2c93808475095bec017509d10076019e";
        $card->customer_id = $customer->id;
        $card->save();
        
        $subscription->plan_id = $plan->id;
        
        $subscription->payer = array("id" => "152185126-hdpVA4cypWLMUr");
        
        $subscription->save();

        dd($subscription);
    }

    public function preApproval(Type $var = null)
    {

        $preapproval_data = new Preapproval();

        $preapproval_data->payer_email = "ale_16_ar@yahoo.com";
        $preapproval_data->back_url = "https://webxander.com";
        $preapproval_data->reason = "Daily subscription to premium package";
        $preapproval_data->external_reference = "OP-1234";
        $preapproval_data->auto_recurring = array( 
          "frecuency" => 1,
          "frequency_type" => "daily",
              "transaction_amount" => 100,
              "currency_id" => "ARS",
              //"start_date" => "2020-12-10T14:58:11.778-03:00",
              //"end_date" => "2015-06-10T14:58:11.778-03:00"
        );
      
        $preapproval_data->save();
    }
}