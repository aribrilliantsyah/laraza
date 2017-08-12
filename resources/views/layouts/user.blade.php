<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LARAZA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="{{asset('/css/blog-post.css')}}" rel="stylesheet">
   <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">


    <!-- Temporary navbar container fix -->
    <style>
    body{
        background: url({{asset('/img/bg.jpg')}});\
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md " style="background: rgba(8,8,8,0.7); border-bottom-right-radius:10px;border-bottom-left-radius:10px; ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('img/laraza.png')}}" width="30%" height="30%"></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                @yield('content')
                

            </div>

        

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">Search</h5>
                    <div class="card-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">Categories</h5>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Zakat Fitrah</a></li>
                                    <li><a href="#">Zakat Mal</a></li>
                                    <li><a href="#">Infaq dan Sodaqoh</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4" style="border-radius: 15px;">
                    <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">Web</h5>
                    <div class="card-block">
                        Web informasi Zakat, infaq dan Sodaqoh.

                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/tether/tether.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>

    
    @include('sweet::alert')

</body>

</html>
