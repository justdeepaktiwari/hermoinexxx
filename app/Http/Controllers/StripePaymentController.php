<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
use Stripe;
use Hash;
use Auth;

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
        // dd($request->all());
        $request->validate([
            'card_name' => ['required', 'string', 'max:20'],
            'amount' => ['required', 'numeric'],
            'number' => ['required', 'numeric'],
            'cvc' => ['required', 'numeric'],
            'exp_month' => ['required', 'numeric', 'lt:13', 'gt:0'],
            'exp_year' => ['required', 'numeric', 'gt:'.date("Y")],
            'description' => ['required', 'string'],
        ]);

        $user_info = (array)json_decode($request->user_info);
        // dd($user_info);
        $password = $user_info["password"];
        $email = $user_info['email'];
        $credentials = ['email' => $email, 'password' => $password];
        $subscription_id = $user_info["subscription_id"];

        unset($user_info["_token"]);
        if(!User::where("email", $user_info["email"])->exists()){
            $user_info["password"] = Hash::make($user_info["password"]);
            $user_info["subscription_id"] = 4;
            User::create($user_info);
        }

        if(Auth::attempt($credentials)){
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
                                'amount' => $request->amount*100,
                                'currency' => 'usd',
                                'source' => $res->id,
                                'description' => $request->description,
                            ]);
                            
                if($response->status == "succeeded"){
                    User::where("email", $user_info["email"])->update(["subscription_id" => $subscription_id]);
                }
                return response()->json($response, 201);
            }catch(\Throwable $e){
                return response()->json($e->getMessage(), 500);
            }
        }else{
            return response()->json(["message" => "you are member enter correct password!"], 422);
        }
    }

    public function processStep(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        // $user_info = 
        // dd($request->all());
    }
}