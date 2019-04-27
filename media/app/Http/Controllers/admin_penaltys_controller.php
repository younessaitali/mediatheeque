<?php

namespace App\Http\Controllers;

use App\penaltys;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_penaltys_controller extends Controller
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

        $penaltys = penaltys::all();

        return view('vendor.multiauth.admin.pages.penaltys.index', compact('penaltys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.multiauth.admin.pages.penaltys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { }

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
        $penaltys = penaltys::where('id', $id)->firstorfail();
        return view('vendor.multiauth.admin.pages.penaltys.edite')->with('penaltys', $penaltys);
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
        $penaltys = penaltys::find($id);
        $penaltys->id_category =  $penaltys->id_category;
        $penaltys->penalty = $request->penaltys;

        $penaltys->save();

        $penaltys = penaltys::all();

        return view('vendor.multiauth.admin.pages.penaltys.index')->with('penaltys', $penaltys);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penaltys::where('id', $id)->delete();
        return back();
    }
}
