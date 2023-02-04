<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('payment.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        // $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
        //     $res = $stripe->tokens->create([
        //                 'card' => [
        //                     'number' => $request->number,
        //                     'exp_month' => $request->exp_month,
        //                     'exp_year' => $request->exp_year,
        //                     'cvc' => $request->cvc,
        //                 ],
        //             ]);
        //             Stripe\Stripe::setApiKey(env("STRIPE_KEY"));

        //             $response = $stripe->charges->create([
        //                             'amount' => $request->amount,
        //                             'currency' => 'usd',
        //                             'source' => $res->id,
        //                             'description' => $request->description,
        //                         ]);
        // dd($response);
        try{
            $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
            $res = $stripe->tokens->create([
                        'card' => [
                            'number' => $request->number,
                            'exp_month' => $request->exp_month,
                            'exp_year' => $request->exp_year,
                            'cvc' => $request->cvc,
                        ],
                    ]);
            
            Stripe\Stripe::setApiKey(env("STRIPE_KEY"));

            $response = $stripe->charges->create([
                            'amount' => $request->amount,
                            'currency' => 'usd',
                            'source' => $res->id,
                            'description' => $request->description,
                        ]);

            return response()->json([[$response]], 201);
        }catch(\Exception $e){
            return response()->json([['response' => $e]], 500);
        }
    }
}