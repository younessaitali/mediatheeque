<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mediatheque |  @yield('title', '')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        @yield('extra-css')
        
    </head>
    <body>
      <div id="page-container">
         <div id="content-wrap">
            <header>
                    <div class="top-nav container">
                        <div class="logo">Mediatheque</div>
                            <div class="centre">
                            <ul><a href="/">Home</a>
                                  <div class="dropdown">
                                  <li><button class="dropbtn"><a href="/categories">Categories<span class="fa fa-caret-down" ></span></a></button></li>
                                     <div class="dropdown-content">
                                        <a href="/categories/movies">Movies</a>
                                        <a href="/categories/books">Books</a>
                                        <a href="/categories/magazins">Magazins</a>
                                        <a href="/categories/journal">Journal</a>  
                                </div>
                            </div>
                           <li> <a href="/event">Event</a></li>
                            <li><a href="/about">About</a></li>
                           <li> <a href="/contact">Contact us</a></li>
                            </div><!-- end of centre -->
                        </ul>
                        
                            <div class="icon">
                            <a href="#"><span class="search" ><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            <a href="/cart"><span class="search" ><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            <a href="/user"><span class="user" ><i class="fa fa-user" aria-hidden="true"></i></span></a>
                            </div>
                    </div> <!-- end top-nav -->
                        @yield('hero_container')
                    
                </header>
                @yield('content')
            </div>
                <footer>
                        <div class="footer-content container">
                            <div class="made-with">Made with <i class="fa fa-heart"></i> by youness and sanae</div>
                        
                            <div class="emailBox">
                                <label class="test "for="emailAddress">Votre adresse email</label><br>
                                
                                    <input id="emailAddress" type="email" size="40" maxLength="50" required
                                         placeholder="nomutilisateur@example.com" pattern=".+@example.com">
                                         <span class="emailAddress"><i class="fa fa-envelope-o fa-fw"aria-hidden="true"></i></span>
                                              
                                        
                            </div>

                        </div> <!-- end footer-content -->
                    </footer>
                    @yield('extra-js')
                </div>
            </body>
                </html>