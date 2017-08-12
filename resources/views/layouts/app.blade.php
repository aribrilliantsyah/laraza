<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('/css/default.css')}}" rel="stylesheet">
    <link href="{{asset('/css/demo.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crafty+Girls" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">


    <style>

    body {
          font-family: 'Comfortaa';
          background-image: url({{asset ('img/bg.jpg') }});
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;

         }
    .panel-heading-custom {
          color: black;
          background: rgba(225,225,225,0.5);
          background: rgba(225,225,225,0.0);
          border-top-left-radius:15px ;  
          border-top-right-radius:15px ; 
         }
    .panel-custom {
          background: rgba(225,225,225,0.5);
          border-radius: 15px; 
         }
    .panel-title-custom {
          color: orange;
          font-family: 'Comfortaa';
         }
    table{
          
          background: rgb(255,255,255); 
         }
    .navbar-custom{
          color: white;
          background: rgba(8,8,8,0.5); 
          border-bottom-left-radius:20px ;  
          border-bottom-right-radius:20px ;
          
         }
    h1{
       font-family: 'Comfortaa';
    }
    hr{
      border-color: rgba(30,30,30,0.5);
    }

    </style>
    <!-- Scripts -->

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-custom navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                     @if (Auth::check())
                     <li><a href = "{{url('/home')}}">Dashboard</a></li>
                     @role('admin')
                     <li><a href = "{{route('laporan.index')}}">Laporan</a></li>
                     @endrole
                     @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><i class="fa fa-gear"></i></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @include('layouts._flash')
        @yield('create')
        @yield('content')
        @include('layouts.modal')

    </div>

    <!-- Scripts -->
    <script src="{{asset('/js/app.js')}}"></script>
    
    <script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    <script src="{{asset('/js/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    
    <script type="text/javascript">
      document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
    // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "check";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
        succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}

    </script>
    @include('sweet::alert')

    @include('layouts.tiny')

    @include('layouts.delete')
    
    
   
    
 @yield('scripts')
</body>
</html>
