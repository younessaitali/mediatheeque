@extends('layouts.nav_bar')
@section('content')
<div class="cart-section container">
    <div>
                        <div class="alert alert-success">
            </div>
        
        
        
        <h2>1 item(s) in Shopping Cart</h2>
  
        <div class="cart-table">
                            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href=""><img src="/img/books/1.jpg" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="">Laptop 13</a></div>
                        <div class="cart-table-description">13 inch, 2 TB SSD, 32GB RAM</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="" method="POST">
                            <!-- delete method + crcsf-->
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
                    <div>$1513.19</div>
                </div>
            </div> <!-- end cart-table-row -->
                       
            
        </div> <!-- end cart-table -->
  
        
          
        
        <div class="cart-totals">
            <div class="cart-totals-left">
                free shepping 
            </div>
  
            <div class="cart-totals-right">
                <div>
                    Subtotal <br>
                                            Tax (13%)<br>
                    <span class="cart-totals-total">Total</span>
                </div>
                <div class="cart-totals-subtotal">
                    $5275.20 <br>
                                            $685.78 <br>
                    <span class="cart-totals-total">$5960.98</span>
                </div>
            </div>
        </div> <!-- end cart-totals -->
  
        <div class="cart-buttons">
            <a href="#" class="button">Continue Shopping</a>
            <a href="/chekout" class="button-primary">Proceed to Checkout</a>
        </div>
  
        
        
        <h3>You have no items Saved for Later.</h3>
  
        
    </div>
  
  </div> <!-- end cart-section -->
@endsection