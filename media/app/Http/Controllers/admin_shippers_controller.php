<?php

namespace App\Http\Controllers;

use App\shipper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_shippers_controller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only' => 'show']);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $shipper = shipper::all();

        return view('vendor.multiauth.admin.pages.shipper.index')->with('shipper', $shipper);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.multiauth.admin.pages.shipper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        shipper::create([
            'phone' => $request->phone,
            'c_name' => $request->c_name,
            'adresse' => $request->adress,
            'id_id' => $request->id_id,
        ]);
        $shipper = shipper::all();

        return view('vendor.multiauth.admin.pages.shipper.index')->with('shipper', $shipper);
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
        $shipper = shipper::where('id', $id)->firstorfail();
        return view('vendor.multiauth.admin.pages.shipper.edite')->with('shipper', $shipper);
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
        $shipper = shipper::find($id);
        $shipper->c_name = $request->c_name;
        $shipper->adresse = $request->adress;
        $shipper->phone = $request->phone;
        $shipper->save();

        $shipper = shipper::all();

        return view('vendor.multiauth.admin.pages.shipper.index')->with('shipper', $shipper);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        shipper::where('id', $id)->delete();
        return back();
    }
}
