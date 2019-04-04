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
                    <div class="product">
        <a href=""><img src="img/books/1.jpg" alt="product"></a>
        <a href=""><div class="product-name">Laptop 1</div></a>
        <div class="product-price">$2132.21</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Laptop 12</div></a>
        <div class="product-price">$2484.42</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Laptop 22</div></a>
        <div class="product-price">$1971.70</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Desktop 1</div></a>
        <div class="product-price">$3039.34</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Phone 2</div></a>
        <div class="product-price">$1219.92</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Phone 4</div></a>
        <div class="product-price">$1456.58</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Phone 8</div></a>
        <div class="product-price">$1282.44</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Tablet 3</div></a>
        <div class="product-price">$694.24</div>
    </div>
                    <div class="product">
        <a href="#"><img src="img/books/1.jpg" alt="product"></a>
        <a href="#"><div class="product-name">Tablet 5</div></a>
        <div class="product-price">$1192.00</div>
    </div>
            </div> <!-- end products -->

    
@endsection

@section('extra-js')
   
@endsection
