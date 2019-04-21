@extends('layouts.nav_bar')
@section('content')
<div class="cart-section container">
    <div>
                        <div class="alert alert-success">
            </div>
        
            @if (Cart::instance('wish')->count() > 0)
        
        <h2>{{ Cart::instance('wish')->count() }} item(s) in your wish list</h2>
  
        <div class="cart-table">

                @foreach (Cart::instance('wish')->content() as $item)

                            <div class="cart-table-row">
                <div class="cart-table-row-left">
                <a href="{{route('product.show',$item->model->id)}}"><img src={{$item->model->_tags['img_path'][0]}} alt="item" class="cart-table-img">{{$item->model->title}}</a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="">{{$item->model->title}}</a></div>
                        <div class="cart-table-description">{{$item->model->description}}</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                            
                        
                        <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$item->model->id}}">
                            <input type="hidden" name="title" value="{{$item->model->title}}">
                            <input type="hidden" name="price" value="{{$item->model->price}}">

                            <button type="submit" class="cart-options">Add to cart</button>
                        </form>
  

                        

                            <form action="{{route('wish.destroy',$item->rowId)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                            <button type="submit" class="cart-options">remove</button>
                        </form>
                    </div>
                    
                    <div>${{$item->model->price}}</div>
                </div>
            </div> <!-- end cart-table-row -->
                       
             @endforeach
        </div> <!-- end cart-table -->
        <a href="{{route('shop.index')}}" class="button">Continue Shopping</a>


    
          
        @else

                <h3>No items in your wish list!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <div class="spacer"></div>

         @endif

  
    
  
        
        
        
  
        
    </div>
  
  </div> <!-- end cart-section -->
@endsection