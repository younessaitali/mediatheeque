
@extends('layouts.nav_bar')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


@section('hero_container')
    

                    <div class="hero container">
                        <div class="categorys">
                                
                            <h1><a href="/categories">Categories</a></h1>
                            <div class="hero-buttons">
                                <a href="/categories/movies" class="button button-white"><span class="fa fa-film" ></span>Movies</a>
                                <a href="/categories/books" class="button button-white"><span class="fa fa-book" ></span>Books</a>
                                <a href="/categories/magazins" class="button button-white"><i class="fa fa-newspaper-o"></i>Magazins</a>
                                <a href="/categories/journal" class="button button-white"><span class="fa  fa-newspaper-o" ></span>Journal</a>
                            </div>
                        </div> <!-- end categorys -->
                
                        

                        <div id="myCarousel" class="carousel_slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < 4; $i++)
                                    <li data-target="#myCarousel" data-slide-to= ''$i'' class="active"></li>
                                    @endfor
                                </ol>
                              
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  @foreach ($carousel as $carousel)
                                  <div class="item">
                                        <img src={{$carousel->images[0]}}>
                                    </div>
                                  @endforeach
                                    
                                </div>
                            
                        </div>
                              
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                                </a>
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


            <div class="caleb">
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
        @endsection


      
