<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;

class admin_product_controller extends Controller
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
        $product = products::all();
        return view("vendor.multiauth.admin.pages.product.index")->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vendor.multiauth.admin.pages.product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'title'         => 'required',
            // 'description'   => 'required',
            //  'price'         => 'required',
            //  'promo_price'   => 'required',
            //'categories_id' => 'required',
            //  'photos'        => 'required',
            //'photos.*'        => 'image|mimes:jpeg,png,jpg,gif,svg'
            //   'option_id'     => 'required',
            //   'quantity'      => 'required',
            //  'tags'          => 'required',
        ]);
        $i = 0;
        $images = array();
        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $photo) {
                // $photo->move('/img');
                $filename = $photo->getClientOriginalName();
                $photo->move(public_path() . '/img/', $filename);
                $images[$i] = '/img/' . $filename;
                $i++;
            }
        }
        // $images = json_encode($request->photos);

        $tags = json_encode($request->tags);
        //  return var_dump($images);

        products::create([
            'title'         =>  $request->title,
            'description'   =>  $request->description,
            'price'         =>  $request->price,
            'promo_price'   =>  $request->promo_price,
            'categories_id' =>  $request->categories_id,
            'images'        =>  $images,
            'option_id'     =>  $request->option_id,
            'stars'         => 5,
            'quantity'      =>  $request->quantity,
            'tags'          =>  $tags,
            'disp'          => 1,
            'mult'          => 0,
        ]);
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
}
