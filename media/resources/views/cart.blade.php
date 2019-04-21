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
  
                    
  

                            <form action="{{ route('wish.store') }}" method="POST">
                                    {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$item->model->id}}">
                            <input type="hidden" name="title" value="{{$item->model->title}}">
                            <input type="hidden" name="price" value="{{$item->model->price}}">


                            <button type="submit" class="cart-options"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div>
                    <select class="quantity" element-id="{{$item->rowId}}" >
                        
                            @for ($i =1 ; $i <10+1 ; $i++)

                              <option {{$item->qty == $i ? 'selected':''}}>{{$i}}</option>
                            
                            @endfor
                                                        
                        </select>
                    </div>
                    <div>${{ price($item->price,$item->qty) }}</div>
                </div>
            </div> <!-- end cart-table-row -->
                       
             @endforeach
        </div> <!-- end cart-table -->



        <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                     
                        <!--!!!!!-->

                        Tax (%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        ${{ Cart::subtotal() }} <br>
                        ${{Cart::tax()}}<br>
                        <span class="cart-totals-total">${{ Cart::total() }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->




  
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

  
    
  
        
        
        
  
        
    </div>
  
  </div> <!-- end cart-section -->
@endsection
@section('extra-js')
    <script src="{{ asset('js/app.js')}}"></script>
   <script>
     (function(){
            const classname = document.querySelectorAll('.quantity')
            Array.from(classname).forEach(function(element){
                element.addEventListener('change',function(){
                    const id =  element.getAttribute('element-id')
                    axios.patch(`/cart/${id}`, {
                            quantity: this.value
                        })
                        .then(function (response) {
                            window.location.href = `{{ route('cart.index') }}`
                        })
                        .catch(function (error) {
                            console.log(error);
                            alert('qty');
                        });

                })
            })
        })();
   
   </script>
@endsection
