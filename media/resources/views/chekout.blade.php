@extends('layouts.nav_bar')
@section('content')
<div class="container">

        
        
        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="" method="POST" id="payment-form">
                    <!-- !!!!!! -->
                    <h2>Billing Details</h2>
                    
                    @auth
                    <div class="form-group">
                        <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" required>
                                            </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{auth()->user()->Adresse}}" required>
                    </div>
    
                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{auth()->user()->City}}" required>
                        </div>
                      
                    </div> <!-- end half-form -->
    
                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{auth()->user()->Code_postale}}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="" required>
                        </div>
                    </div> <!-- end half-form -->
                    @endauth 
                    
                    @guest
                    <div class="form-group">
                        <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                                            </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="" required>
                    </div>
    
                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="" required>
                        </div>
                      
                    </div> <!-- end half-form -->
    
                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="" required>
                        </div>
                    </div> <!-- end half-form -->
    
                    @endguest
                    
                    <div class="spacer"></div>
    
                    <h2>Payment Details</h2>
    
                    <div class="form-group">
                        <label for="cc_number">Name on Card</label>
                        <input type="text" class="form-control" id="cc_number" name="cc_number" value="">
                    </div>
    
                    <div class="half-form">
    
                        <div class="form-group">
                            <label for="expiry">Expiry</label>
                            <input type="text" class="form-control" id="expiry" name="expiry" value="">
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC Code</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" value="">
                        </div>
                    </div>
                    <div class="spacer"></div>
    
                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
    
    
                </form>
    
                                    <div class="mt-32">or</div>
                    <div class="mt-32">
                        <h2>Pay with PayPal</h2>
    
                        <form method="post" id="paypal-payment-form" action="">
                            <!-- !!!!  -->                            
                            <section>
                                <div class="bt-drop-in-wrapper">
                                    <div id="bt-dropin"></div>
                                </div>
                            </section>
    
                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <button class="button-primary" type="submit"><span>Pay with PayPal</span></button>
                        </form>
                    </div>
                            </div>
    
    
    
            <div class="checkout-table-container">
                <h2>Your Order</h2>
    
                <div class="checkout-table">
                        @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src={{$item->model->images[0]}} alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{$item->model->title}}</div>
                                <div class="checkout-table-description">{{$item->model->description}}</div>
                                <div class="checkout-table-price">${{$item->model->price}}</div>
                            </div>
                        </div> <!-- end checkout-table -->
    
                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">{{$item->qty}}</div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    @endforeach
                </div> <!-- end checkout-table -->
    
                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                                                Tax (%)<br>
                        <span class="checkout-totals-total">Total</span>
    
                    </div>
    
                    <div class="checkout-totals-right">
                            ${{ Cart::subtotal() }} <br>
                            ${{Cart::tax()}} <br>
                        <span class="checkout-totals-total">${{ Cart::total() }}</span>
    
                    </div>
                </div> <!-- end checkout-totals -->
            </div>
    
        </div> <!-- end checkout-section -->
    </div> 
@endsection