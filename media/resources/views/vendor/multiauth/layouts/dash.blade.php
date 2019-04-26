<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ ucfirst(config('multiauth.prefix')) }} | login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
      <!-- Left Panel -->

      <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <a class="navbar-brand" href="{{ route('admin.home') }}">
                {{ config('app.name', 'Laravel') }} {{ ucfirst(config('multiauth.prefix')) }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('admin.home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>


                    @admin('super')
                    <a href="{{ route('admin.show') }}"><h3 class="menu-title">Employers</h3></a><!-- /.menu-title -->
               
                    @endadmin
                 
              
                    <h3 class="menu-title">Add and Edite </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{route('admin.categorie')}}">View</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Add</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Edit</a></li>

                        </ul>
                    </li>
                  
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest('admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.login')}}">{{ ucfirst(config('multiauth.prefix')) }} Login</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                                {{ auth('admin')->user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @admin('super')
                                <a class="dropdown-item" href="{{ route('admin.show') }}">{{ ucfirst(config('multiauth.prefix')) }}</a>
                                <a class="dropdown-item" href="{{ route('admin.roles') }}">Roles</a>
                            @endadmin
                                <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                            <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
                        @yield('content')
        </div>
    </div><!-- /#right-panel -->


    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script src="{{ asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('assets/js/widgets.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>


</body>

</html>