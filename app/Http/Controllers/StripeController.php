<?php

namespace App\Http\Controllers;

use App\Entities\Plan;
use App\Entities\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Customer;
use Stripe\Stripe;

class StripeController extends Controller {
    public function checkout(Request $request)
    {
        $plan = Plan::query()->findOrFail($request->get('plan_id'));

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $plan->name,
                            'description' => "Plan que te da $plan->credits para comprar libros",
                            'metadata' => [
                                'id' => $plan->id,
                            ],
                        ],
                        'unit_amount' => $plan->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'customer_email' => Auth::user()->email,
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('wallet.index'),
        ]);

        Sale::create([
            'customer_id' => Auth::id(),
            'plan_id' => $plan->id,
            'price' => $plan->price * 100,
            'session_id' => $session->id,
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        Stripe::setApiKey(config('stripe.sk'));
        $session = Session::retrieve($request->get('session_id'));

        $sale = Sale::query()
            ->with(['customer.wallet', 'plan'])
            ->where('session_id', $session->id)
            ->first();

        $sale->customer->wallet->increment('credits', $sale->plan->credits);

        return to_route('wallet.index');
    }
}
