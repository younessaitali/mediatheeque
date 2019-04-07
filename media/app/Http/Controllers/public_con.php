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
        return view("books");
    }


    public function movies()
    {
        return view("movies");
    }


    public function inscription()
    {
        return view("inscription");
    }


    public function magazins()
    {
        return view("magazins");
    }


    public function journal()
    {
        return view("journal");
    }


    public function cart()
    {
        return view("cart");
    }


    public function shop()
    {
        $products = products::inRandomOrder()->take(12)->get();

        return view("shop")->with('products', $products);
    }



    public function test()
    {
        $products = products::inRandomOrder()->take(12)->get();


        return view("test")->with('products', $products);
    }
}
