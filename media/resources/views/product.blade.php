@extends('layouts.nav_bar')
@section('content')
 <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src={{$product->images[0]}} alt="product" class="active" id="currentImage">
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                <img src="{{$product->images[0]}}" alt="product">
                </div>

                                                        <div class="product-section-thumbnail">
                        <img src={{$product->images[0]}} alt="product">
                    </div>
                                        <div class="product-section-thumbnail">
                        <img src={{$product->images[0]}} alt="product">
                    </div>
                                        <div class="product-section-thumbnail">
                        <img src={{$product->images[0]}} alt="product">
                    </div>
                                                </div>
        </div>
        <div class="product-section-information">
        <h1 class="product-section-title">{{$product->title}}</h1>
            <div class="product-section-subtitle">{{$product->description}}</div>
            <div><div class="badge badge-success">In Stock</div></div>
            <div class="product-section-price">${{$product->price}}</div>

            <p>{{$product->description}}</p>
           
            @if ($product->option_id==1)

                   <select id="mySelect" onchange="optionselected()">
                       <option value="1" selected>Buy</option>
                     </select>
              
                
            @endif

            @if ($product->option_id==2)
            
                     <select id="mySelect" onchange="optionselected()">
                         <option value="2" selected >Rent</option>
                     </select>
                  

            @endif

            @if ($product->option_id==3)
            
                
                    <select id="mySelect" onchange="optionselected()">
                        <option value="1" selected >Buy</option>
                        <option value="2">Rent</option>
                    </select>


            @endif

            <p>&nbsp;</p>

                            <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="title" value="{{$product->title}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <input type="hidden" name="option" id="option_v" value="">
                           


                            <button type="submit" class="button button-plain" name="P_option"  value="add">Add to Cart</button>
                            <button type="submit" class="button button-plain" name="P_option" value="buy">Buy now</button>
                       


                </form>
                    </div>
    </div> <!-- end product-section -->

    <img src={{$product->images[0]}} alt="product">

@endsection
@section('extra-js')
    <script>
        @if ($product->option_id==1)

        x=1;
        document.getElementById("option_v").value = x;

        @endif

        @if ($product->option_id==2)

        x=2;
        document.getElementById("option_v").value = x;

        @endif


        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();

        

        function optionselected() {



            @if ($product->option_id==1)

                    x=1;
                    document.getElementById("option_v").value = x;

            @endif

            @if ($product->option_id==2)

                    x=2;
                    document.getElementById("option_v").value = x;

            @endif

             @if ($product->option_id==3)

                  var sele = document.getElementById("mySelect").value;
                    document.getElementById("option_v").value = sele;

            @endif
}

    </script>


@endsection