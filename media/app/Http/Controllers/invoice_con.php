<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
use App\orders;
use App\order_details;
use App\invoice;
use App\mediatheque;
use Bitfumes\Multiauth\Model\Admin;
use PDF;


class invoice_con extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = invoice::find($id);
        $order = orders::find($invoice->order_id);
        $order_details = order_details::where('order_id', $order->id)->get();
        $media = mediatheque::find($invoice->media_id);
        $admin = Admin::find($invoice->admin_id);
        $total = $this->total_order($order_details);



        return view('invoice')->with([
            'order' => $order,
            'order_details' => $order_details,
            'invoice' => $invoice,
            'media' => $media,
            'admin' => $admin,
            'total' => $total,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = invoice::find($id);
        $order = orders::find($invoice->order_id);
        $order_details = order_details::where('order_id', $order->id)->get();
        $media = mediatheque::find($invoice->media_id);
        $admin = Admin::find($invoice->admin_id);
        $total = $this->total_order($order_details);

        $data = [
            'invoice' => $invoice,
            'order' => $order,
            'media' => $media,
            'admin' => $admin,
            'total' => $total,
            'order_details' => $order_details,
        ];



        $pdf = PDF::loadView('invoice_pdf', $data);

        return $pdf->download('invoice.pdf');
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

    public function total_order($order_details)
    {
        $total = 0;

        foreach ($order_details as $item) {

            $total += ($item->price * $item->quantity);
        }

        return $total;
    }
}
