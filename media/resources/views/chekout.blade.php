@extends('layouts.nav_bar')

@section('extra')
    
<script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')
<div class="container">

        
        
        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
            <form action="{{route('chekout.store')}}" method="POST" id="payment-form">
                    @csrf
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


                  <div class="form-group">
                    <label for="card-element">
                        Credit or debit card
                      </label>
                      <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                      </div>
                  
                      <!-- Used to display form errors. -->
                      <div id="card-errors" role="alert"></div>
                    
                  </div>


                  

                    <br><br>
                    <div class="spacer"></div>
                    <div class="spacer"></div>
    
                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
    
    
                </form>
    
    
    
    
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
@section('extra-js')
    <script>
                // Create a Stripe client.
            var stripe = Stripe('pk_test_PI3yQdIKgjamZo1TLZyvdOTB00fBHsnjli');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true

            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            document.getElementById('complete-order').disabled =true;

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });
            var options = {
                name: document.getElementById('name').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_zip: document.getElementById('postalcode').value
            }

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }
</script>
@endsection