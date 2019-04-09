@extends('layouts.nav_bar')
@section('content')
<div class="cart-section container">
    <div>
                        <div class="alert alert-success">
            </div>
        
            @if (Cart::count() > 0)
        
        <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
  
        <div class="cart-table">

                @foreach (Cart::content() as $item)

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
                    <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="cart-options">Remove</button>
                        </form>
  
                        <form action="" method="POST">
                            <!--  + crcsf-->
  
                            <button type="submit" class="cart-options">Save for Later</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-id="8b486433ba8a9e4089eafa927840a692" data-productQuantity="10">
                                                                <option selected>1</option>
                                                                <option >2</option>
                                                                <option >3</option>
                                                                <option >4</option>
                                                                <option >5</option>
                                                        </select>
                    </div>
                    <div>${{$item->model->price}}</div>
                </div>
            </div> <!-- end cart-table-row -->
                       
             @endforeach
        </div> <!-- end cart-table -->
  
        <div class="cart-buttons">
        <a href="{{route('shop.index')}}" class="button">Continue Shopping</a>
                <a href="/chekout" class="button-primary">Proceed to Checkout</a>
            </div>
          
        @else

                <h3>No items in Cart!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <div class="spacer"></div>

         @endif

  
    
  
        
        
        <h3>You have no items Saved for Later.</h3>
  
        
    </div>
  
  </div> <!-- end cart-section -->
@endsection