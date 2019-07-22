
@extends('layouts.nav_bar')

@section('extra')

@endsection
@section('hero_container')
    

                    <div class="hero container">
                        <div class="categorys">
                                
                            <h1><a href="/categories">Categories</a></h1>
                            <div class="hero-buttons">
                                <a href="{{route('shop.index',['category'=>1])}}" class="button button-white"><span class="fa fa-film" ></span>Movies</a>
                                <a href="{{route('shop.index',['category'=>2])}}" class="button button-white"><span class="fa fa-book" ></span>Books</a>
                                <a href="{{route('shop.index',['category'=>3])}}" class="button button-white"><i class="fa fa-newspaper-o"></i>Magazins</a>
                                <a href="{{route('shop.index',['category'=>4])}}" class="button button-white"><span class="fa  fa-newspaper-o" ></span>Journal</a>
                            </div>
                        </div> <!-- end categorys -->
                
                        <div class="ac-image">
                            {{-- <a name="slide_href"> <img  name="slide"  alt="hero image"  width="1480" height="720" ></a>  --}}













{{-- 
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 
                                <ol class="carousel-indicators">
                                 @foreach( $slide as $photo )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                 @endforeach
                                </ol>
                               
                                <div class="carousel-inner" role="listbox">
                                  @foreach( $slide as $photo )
                                     <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                         <img class="d-block img-fluid" src="{{ $photo->images[0] }}" alt="{{ $photo->title }}">
                                            <div class="carousel-caption d-none d-md-block">
                                               <h3>{{ $photo->title }}</h3>
                                               <p>{{ $photo->descriptoin }}</p>
                                            </div>
                                     </div>
                                  @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div> --}}








                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">


                                @foreach ($slide as $item)
                                        
                                    
                                <div class="carousel-item @if($loop->first) active @endif">
                                 <a href="{{route('product.show',$item->id)}}"> <img class="d-block w-100" src={{$item->images[0]}} alt="First slide"   width="1480" height="720"></a>
                                </div>
                               

                                @endforeach

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                            
                                    
                              




                        </div>
                    </div> <!-- end hero -->
@endsection


 @section('content')  
        <div class="pr-show container">
            <h1>Mega season sale</h1>
            <div class="product-photos container">
                 <div class="big-image">
                    <a href="{{route('product.show',$BigMega->id)}}"><img src={{$BigMega->images[0]}} alt="product"></a>
                    <div class="description"> 
                         <h2>   </h2>
                         <a href="#"><h3></h3></a>
                     </div><!-- end description -->

                 </div><!-- end big-image -->
                 <div class="p_6x6 container">
                     <h2></h2>
                     <div class="photo6x6 container">
                        @foreach ($Megaseason as $Megaseason)
                        <div class="photo">
                            <a href="{{route('product.show',$Megaseason->id)}}"><img src={{$Megaseason->images[0]}} alt="product"></a>
                            <a href="{{route('product.show',$Megaseason->id)}}"><div class="product-name">{{ $Megaseason->title}}</div></a>
                            <div class="product-price">{{$Megaseason->price}}$</div>
                        </div><!-- end photo_6 --> 
                        @endforeach

                     </div><!-- end photo6x6  -->
                
                </div> <!-- end p_6x6 containe -->
            </div> <!-- end product_photo end -->

        </div><!-- end pr-show container -->
        <div class="featured-section">
                <div class="container">
                    <h1 class="text-center">Featured</h1>
            
                    <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>
            
                    <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a>
                    </div>
            
            
                    <div class="products text-center">
                        @foreach ($products as $product )
                              <div class="product">
                                    <a href="{{route('product.show',$product->id)}}"><img src={{$product->images[0]}} alt="product"></a>
                              <a href="{{route('product.show',$product->id)}}"><div class="product-name">{{ $product->title}}</div></a>
                              <div class="product-price">{{$product->price}}$</div>
                              </div>
                        @endforeach
                    </div> <!-- end products -->
            
                    <div class="text-center button-container">
                        <a href="{{route('shop.index')}}" class="button">View more products</a>
                    </div>
            
   <div class="featured-section">
    <div class="container">
        <h1 class="text-center">Popular 2019</h1>

        <p class="section-description text-center">description</p>

        <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>


        <div class="products text-center">

                @foreach ($_products as $product )

            <div class="product">
                <a href="{{route('product.show',$product->id)}}"><img src={{$product->images[0]}} alt="product"></a>
                <a href="{{route('product.show',$product->id)}}"><div class="product-name">{{ $product->title}}</div></a>
                <div class="product-price">{{ $product->title}}$</div>
            </div>
           
            @endforeach
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="{{route('shop.index')}}" class="button">View more products</a>
        </div>
        
                </div> <!-- end container -->
            
            </div> <!-- end featured-section -->


            {{-- <div class="caleb">
                    <div class="ml-calendar">
                        <section class="calendar-left">
                            <div class="sidebar">
                                <p class="subheading">Today</p>
                                <h1>Tuesday, <br/>January 1st </h1>
                                <h3 class="primary-color">4 Items</h3>
                                <ul class="calendar-events">
                                    <li>
                                        <p><strong>8:00 AM</strong><br/>
                                        Team Meeting</p>
                                    </li>
                                    <li>
                                        <p><strong>10:00 AM</strong><br/>
                                        Call Jane</p>
                                    </li>
                                    <li>
                                        <p><strong>12:00 PM</strong><br/>
                                        Lunch with John</p>
                                    </li>
                                    <li>
                                        <p><strong>7:00 PM</strong><br/>
                                        Dinner with Jane</p>
                                    </li>
                                </ul>
                            <p><a href="#" class="calendar-btn"><i class="fas fa-plus"></i> Add new item</a></p>
                            </div><!-- end of  sidebar-->
                        </section>
                        <section class="calendar-right">
                            <div class="calendar">
                                <section class="calendar-header">
                                    <h2><strong>January</strong> 2019</h2>
                                    <div class="calendar-nav">
                                        <a href="#"><i class="fas fa-arrow-left"></i></a><a href="#">Today</a><a href="#"><i class="fas fa-arrow-right"></i></a>&nbsp;
                                    </div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day day-name">Mon</div>
                                    <div class="calendar-day day-name">Tue</div>
                                    <div class="calendar-day day-name">Wed</div>
                                    <div class="calendar-day day-name">Thu</div>
                                    <div class="calendar-day day-name">Fri</div>
                                    <div class="calendar-day day-name">Sat</div>
                                    <div class="calendar-day day-name">Sun</div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day inactive">
                                        <span class="calendar-date">31</span>
                                    </div>
                                    <div class="calendar-day active">
                                        <span class="calendar-date">1</span>
                                        <br/><span class="calendar-event">4</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">2</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">3</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">4</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">5</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">6</span>
                                    </div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day">
                                        <span class="calendar-date">7</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">8</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">9</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">10</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">11</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">12</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">13</span>
                                    </div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day">
                                        <span class="calendar-date">14</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">15</span>
                                        <br/><span class="calendar-event">5</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">16</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">17</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">18</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">19</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">20</span>
                                    </div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day">
                                        <span class="calendar-date">21</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">22</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">23</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">24</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">25</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">26</span>
                                        <br/><span class="calendar-event">1</span>
                                    </div>
                                    <div class="calendar-day weekend">
                                        <span class="calendar-date">27</span>
                                    </div>
                                </section>
                                <section class="calendar-row">
                                    <div class="calendar-day">
                                        <span class="calendar-date">28</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">29</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">30</span>
                                    </div>
                                    <div class="calendar-day">
                                        <span class="calendar-date">31</span>
                                        <br/><span class="calendar-event">3</span>
                                    </div>
                                    <div class="calendar-day inactive">
                                        <span class="calendar-date">1</span>
                                    </div>
                                    <div class="calendar-day weekend inactive">
                                        <span class="calendar-date">2</span>
                                    </div>
                                    <div class="calendar-day weekend inactive">
                                        <span class="calendar-date">3</span>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div><br><br><br>
                        <div class="clear"></div>
                        <br><br>
            </div> --}}
        </div>
        @endsection



        @section('extra-js')
        <script src="{{ asset('js/app.js')}}"></script>
            <script>

            
                // var i = 0;
                // var j = 0; 			
                // var images = [];	
                // var slide_url =[];
                // var time = 3000;	

                // @foreach ($slide as $item)
               
                // images[j] = {{$item->images[0]}};
                // slide_url[j] = {{route('product.show',$item->id)}}
                // j++;
                // @endforeach
                
                // function changeImg(){
                // 	document.slide.src = images[i];
                //     document.slide_href.href = images[i];
                
                // 	if(i < images.length - 1){
                	  
                // 	  i++; 
                // 	} else { 
                		
                // 		i = 0;
                // 	}
                
                	
                // 	setTimeout("changeImg()", time);
                // }

               
                // window.onload=changeImg;
            
            
            </script>
        @endsection


      
