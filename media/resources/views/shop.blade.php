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
                @foreach ($categories as $category )
            <li class="Movies"><a href="{{route('shop.index',['category'=>$category->id])}}">{{$category->name}}</a></li>
                @endforeach
               
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">

                    <h1 class="stylish-heading">{{$cat_name}}</h1>
              
                    
             
                    
               
            <div>
                    <strong>Price: </strong>
                    <a href="{{route('shop.index',['category'=>request()->category,'sort' =>1])}}">Low to High</a> 
                    <a href="{{route('shop.index',['category'=>request()->category,'sort' => 2])}}">High to Low</a>

                </div>
          
                    


             
            </div>

            <div class="products text-center">

                    @foreach ($products as $product )

                    <div class="product">
                    <a href="{{route('product.show',$product->id)}}"><img src={{$product->images[0]}} alt="product"></a>
                            <a href="{{route('product.show',$product->id)}}"><div class="product-name">{{ $product->title}}</div></a>
                            <div class="product-price">${{$product->price}}</div>
                        </div><!-- end products -->
                      
                    @endforeach

                    <div class="spacer"></div>
                    {{ $products->appends(request()->input())->links() }}
            </div>
        </div>
@endsection


@section('extra-js')
   




@endsection
