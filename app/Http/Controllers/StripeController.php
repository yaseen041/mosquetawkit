<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Payments;
use Stripe\Stripe;
use Stripe\Checkout\Session;
class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        $paymentId = $request->input('payment_id');
        $amount = $request->input('amount');
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Payment for Invoice #' . $paymentId,
                        ],
                        'unit_amount' => $amount * 100,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('payment.success') . '?session={CHECKOUT_SESSION_ID}&order='. $paymentId,

                // 'success_url' => route('payment.success', ['session_id' => '{CHECKOUT_SESSION_ID}', 'payment_id' => $paymentId]),
                'cancel_url' => route('payment.cancel'),
            ]);
            return redirect($session->url, 303);
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function paymentSuccess(Request $request)
    {
        $sessionId = $request->get('session');
        $paymentId = $request->get('order');
        // echo "<pre>";
        // print_r($sessionId);
        // echo "<br>";
        // print_r($paymentId);
        // exit;
        if (!$sessionId) {
            return redirect()->route('payment/history')->with('error', 'Invalid payment session.');
        }
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $session = Session::retrieve($sessionId);
            if ($session->payment_intent) {
                $status = Payments::where('id', $paymentId)->update([
                    'trx_id' => $session->payment_intent,
                    'trx_amount' => $session->amount_total / 100,
                    'trx_status' => $session->payment_status,
                    'trx_email' => $session->customer_details->email,
                    'trx_date' => date('Y-m-d H:i:s', $session->created),
                    'status' => 1,
                ]);
                return redirect("payment/history")->with('success', 'Payment successful!');
            }
            return redirect("payment/history")->withErrors('Payment could not be verified');
        } catch (\Exception $e) {
            return redirect("payment/history")->withErrors('An error occurred during payment processing.');
        }
    }

    public function paymentSuccess_old(Request $request)
    {
        $sessionId = $request->get('session_id');
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $session = Session::retrieve($sessionId);
        if ($session->payment_intent) {
            $status = User::where('id', Auth::user()->id)->update([
                'trx_id' => $session->payment_intent,
                'trx_amount' => $session->amount_total / 100,
                'trx_status' => $session->payment_status,
                'trx_email' => $session->customer_details->email,
                'trx_date' => date('Y-m-d H:i:s', $session->created),
                'status' => '1',
            ]);
            return redirect()->route('payment/history')->with('success', 'Payment successful!');
        }
        return redirect()->route('payment/history')->with('error', 'Payment could not be verified.');
    }

    public function paymentCancel()
    {
        return redirect("payment/history")->withErrors('Payment canceled.');
    }
}