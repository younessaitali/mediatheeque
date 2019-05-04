<?php

namespace App\Http\Controllers;

use App\categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_categories_controller extends Controller
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

        $categorie = categorie::all();

        return view('vendor.multiauth.admin.pages.categories.view')->with('catagorie', $categorie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.multiauth.admin.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        categorie::create([
            'name' => $request->name,
            'p_id' => $request->pcategorie
        ]);
        $categorie = categorie::all();

        return view('vendor.multiauth.admin.pages.categories.view')->with('catagorie', $categorie);
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
        $categorie = categorie::where('id', $id)->firstorfail();
        return view('vendor.multiauth.admin.pages.categories.edite')->with('categorie', $categorie);
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
        $categorie = categorie::find($id);
        $categorie->name = $request->name;
        $categorie->p_id = $request->pcategorie;
        $categorie->save();

        $categorie = categorie::all();

        return view('vendor.multiauth.admin.pages.categories.view')->with('catagorie', $categorie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categorie::where('id', $id)->delete();
        return back();
    }
}
