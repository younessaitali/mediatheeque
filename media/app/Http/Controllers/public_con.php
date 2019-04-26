<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class public_con extends Controller
{
    public function index()
    {

        $products = products::inRandomOrder()->take(8)->get();
        $_products = products::inRandomOrder()->take(4)->get();

        return view("home")->with('products', $products)->with('_products', $_products);
    }


    public function categories()
    {
        return view("categories");
    }


    public function about()
    {
        return view("about");
    }


    public function contact()
    {
        return view("contact");
    }


    public function event()
    {
        return view("event");
    }


    public function hadik()
    {
        return view("hadik");
    }


    public function acount()
    {
        return view("acount");
    }


    public function books()
    {
        $products = products::where('categories_id', 2)->inRandomOrder()->take(9)->get();


        return view("books")->with('products', $products);
    }


    public function movies()
    {
        $products = products::where('categories_id', 1)->inRandomOrder()->take(12)->get();

        return view("movies")->with('products', $products);
    }





    public function magazins()
    {
        return view("magazins");
    }


    public function journal()
    {

        $products = products::inRandomOrder()->take(12)->get();

        return view("journal");
    }





    public function shop()
    {
        $products = products::inRandomOrder()->take(12)->get();

        return view("shop")->with('products', $products);
    }

    public function test()
    {
        return view('test');
    }
}
