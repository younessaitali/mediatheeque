
@extends('layouts.nav_bar')


@section('hero_container')
    

                    <div class="hero container">
                        <div class="categorys">
                                
                            <h1>Categories</h1>
                            <div class="hero-buttons">
                                <a href="#" class="button button-white"><span class="fa fa-film" ></span>Movies</a>
                                <a href="#" class="button button-white"><span class="fa fa-book" ></span>Books</a>
                                <a href="#" class="button button-white">Magazins</a>
                                <a href="#" class="button button-white"><span class="fa  fa-newspaper-o" ></span>Journal</a>
                            </div>
                        </div> <!-- end categorys -->
                
                        <div class="ac-image">
                            <img src="img/test.png" alt="hero image">
                        </div>
                    </div> <!-- end hero -->
@endsection


 @section('content')  
        <div class="pr-show container">
            <h1>Mega season sale</h1>
            <div class="product-photos container">
                 <div class="big-image">
                     <img src="img/books/3.jpg"></img>
                     <div class="description"> 
                         <h2>   </h2>
                         <a href="#"><h3></h3></a>
                     </div><!-- end description -->

                 </div><!-- end big-image -->
                 <div class="p_6x6 container">
                     <h2></h2>
                     <div class="photo6x6 container">
                         <div class="photo">
                             <a href="#">
                                 <img src="img/books/2.jpg"></img>
                                 <h3></h3>
                             </a>
                         </div><!-- end photo_1 -->
                         <div class="photo">
                                <a href="#">
                                        <img src="img/books/4.jpg"></img>
                                        <h3></h3>
                                    </a>
                         </div><!-- end photo_2 -->
                         <div class="photo">
                                <a href="#">
                                        <img src="img/books/5.jpg"></img>
                                        <h3></h3>
                                    </a>
                         </div><!-- end photo_3 -->
                         <div class="photo">
                                <a href="#">
                                        <img src="img/books/6.jpg"></img>
                                        <h3></h3>
                                    </a>
                         </div><!-- end photo_4 -->
                         <div class="photo">
                                <a href="#">
                                        <img src="img/books/7.jpg"></img>
                                        <h3></h3>
                                    </a>
                         </div><!-- end photo_5 -->
                         <div class="photo">
                                <a href="#">
                                        <img src="img/books/8.jpg"></img>
                                        <h3></h3>
                                    </a>
                         </div><!-- end photo_6 -->
                     </div><!-- end photo6x6  -->
                
                </div> <!-- end p_6x6 containe -->
            </div> <!-- end product_photo end -->

        </div><!-- end pr-show container -->
        <div class="featured-section">
                <div class="container">
                    <h1 class="text-center">CSS Grid Example</h1>
            
                    <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>
            
                    <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a>
                    </div>
            
            
                    <div class="products text-center">
                        @foreach ($products as $product )
                              <div class="product">
                                    <a href="#"><img src={{$product->_tags['img_path'][0]}} alt="product"></a>
                              <a href="#"><div class="product-name">{{ $product->title}}</div></a>
                              <div class="product-price">{{$product->price}}$</div>
                              </div>
                        @endforeach
                    </div> <!-- end products -->
            
                    <div class="text-center button-container">
                        <a href="#" class="button">View more products</a>
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
                <a href="#"><img src={{$product->_tags['img_path'][0]}} alt="product"></a>
                <a href="#"><div class="product-name">{{ $product->title}}</div></a>
                <div class="product-price">{{ $product->title}}$</div>
            </div>
           
            @endforeach
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="#" class="button">View more products</a>
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


      
