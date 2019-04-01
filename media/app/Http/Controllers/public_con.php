<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class public_con extends Controller
{
    public function index()
    {
        return view("home");
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
}
