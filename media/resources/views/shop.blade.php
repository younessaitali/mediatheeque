@extends('layouts.nav_bar')

@section('title', 'Products')

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
    @endcomponent

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li class="Movies"><a href="#">Movies</a></li>
                <li class="Movies"><a href="#">BOOKs</a></li>
                <li class="Movies"><a href="#">Journal</a></li>
                <li class="Movies"><a href="#">Magazins</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                    <h1 class="stylish-heading">Featured</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="#">Low to High</a> 
                    <a href="#">High to Low</a>

                </div>
            </div>

            <div class="products text-center">

                    @foreach ($products as $product )

                    <div class="product">
                            <a href=""><img src={{$product->_tags['img_path'][0]}} alt="product"></a>
                            <a href=""><div class="product-name">{{ $product->title}}</div></a>
                            <div class="product-price">${{$product->price}}</div>
                        </div><!-- end products -->
                      
                    @endforeach
    
@endsection

@section('extra-js')
   
@endsection
