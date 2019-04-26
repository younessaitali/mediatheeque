<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\categorie;

class shop_con extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category_id = request()->category;
        $sort = request()->sort;
        $pagination = 9;
        $categories = categorie::all();
        if (empty($category_id)) {

            $products = products::take(12);
            $category_name = 'shop';
        } else {
            $products = products::where('categories_id', $category_id)->take(12);

            $cat_name = categorie::where('id', $category_id)->firstorFail();
            $category_name = $cat_name->name;
        }


        if ($sort == 1) {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif ($sort == 2) {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }






        return view("shop")->with([
            'products' => $products,
            'categories' => $categories,
            'cat_name' => $category_name,
        ]);
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
    { }

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
}
