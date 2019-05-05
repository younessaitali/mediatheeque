<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;
use App\users;
use App\payment;
use App\orders;
use App\order_details;
use App\invoice;
use Illuminate\Support\Facades\Auth;



class chekout_con extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = users::find(auth()->id());
        if ($user->Sub_id != null) {
            return redirect()->route('invoice')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } else {
            return view('chekout');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $contents = Cart::content()->map(function ($item) {
            return $item->model->id . ', ' . $item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                ],
            ]);

            $payment = new payment();
            $payment->type = 'visa';
            $payment->granted = 1;
            $payment->save();


            if (Auth::check()) {

                $order = new orders();
                $order->user_id = auth()->id();
                $order->payment_id = $payment->id;
                $order->order_date = date("Y/m/d");
                $order->s_date = date("Y/m/d");
                $order->shipper_id = 1;
                $order->payment_date = date("Y/m/d");
                $order->status = 1;
                $order->discount = 0;
                $order->save();
            } else {
                $order = new orders();
                $order->user_id = 6;
                $order->payment_id = $payment->id;
                $order->order_date = date("Y/m/d");
                $order->s_date = date("Y/m/d");
                $order->shipper_id = 1;
                $order->payment_date = date("Y/m/d");
                $order->status = 1;
                $order->discount = 0;
                $order->save();
            }
            foreach (Cart::content() as $item) {
                order_details::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                    'price' => $item->model->price,
                    'type' => 'physical gadget',
                    'option_id' => $item->options->option,
                    'shipper_id' => 1,
                    'status' => 1,
                ]);
            }
            $invoice = new invoice();
            $invoice->admin_id = 1;
            $invoice->media_id = 1;
            $invoice->order_id = $order->id;
            $invoice->date = date("Y/m/d");
            $invoice->save();



            Cart::instance('default')->destroy();
            return redirect()->route('invoices.show', $invoice->id);
        } catch (CardErrorException $e) {
            // return back()->withErrors('Error! ' . $e->getMessage());
        }


        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function guest()
    {

        return view('chekout');
    }
}
