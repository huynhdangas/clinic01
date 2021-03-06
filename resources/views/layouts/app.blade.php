<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dang Sang Clinic</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- datepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- them vao -->
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">

    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


    <!-- css tu admin -->
    <link rel="stylesheet" href="{{asset('template/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">
    <script src="{{asset('template/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>


    <style type="text/css">
        
        ul li a{
            font-size: 16px;
            font-weight: 400;
        }
    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2 style="color: #007bff; font-weight: 700;">Dang Sang Clinic</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        @if(auth()->user()->role->name === 'patient')
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff;" href="{{ route('my.booking') }}">{{ __('My Booking') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff;" href="">{{ __('LS kham benh') }}</a>
                            </li>
                        @endif


                        <!-- Authentication Links -->

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #fff;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    User: {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-white">
            @yield('content')
        </main>
    </div>

    <!-- js picker date -->
    <script>
        var dateToday = new Date();
        $( function() {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                showButtonPanel: true,
                numberOfMonths:2,
                minDate:dateToday,
            })
        } );
        
    </script>
    <!-- js tu admin -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('template/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
    <script src="{{asset('template/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('template/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('template/plugins/screenfull/dist/screenfull.js')}}"></script>
    <script src="{{asset('template/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('template/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('template/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('template/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('template/plugins/d3/dist/d3.min.js')}}"></script>
    <script src="{{asset('template/plugins/c3/c3.min.js')}}"></script>
    <script src="{{asset('template/js/tables.js')}}"></script>
    <script src="{{asset('template/js/widgets.js')}}"></script>
    <script src="{{asset('template/js/charts.js')}}"></script>
    <script src="{{asset('template/dist/js/theme.min.js')}}"></script>
    <!-- end js admin -->
    <style type="text/css">
        body {
            background-color: #fff;
            font-weight: 600;
        }
        .ui-corner-all {
            background: #007bff;
            color: #fff;
        }
        .table-head {
            height:50px;
        }
        .table-head tr,
        .table-head th {
            background: #007bff;
            height:50px;
            line-height: 50px;
            color: #fff !important;
        }
        label.btn{
            padding: 0;
        }
        label.btn input{
            opacity: 0; 
            position: absolute;
        }
        label.btn span{
            text-align: center; 
            padding: 6px 12px; 
            display: block;
            min-width: 80px;
        }
        label.btn input:checked+span{
            background-color: #007bff; 
            color: #fff;
        }



    
    </style>
</body>
</html>
