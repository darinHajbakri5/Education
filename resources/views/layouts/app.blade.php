
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}">

<head>
    <title>Darin Education</title>


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    @endif
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark text-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hoverable"  href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                       {{__('layouts/app.language')}}
                    </a>
                    <ul class="dropdown-menu px-2">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link hoverable" href="{{ route('home1' ) }}">home page </a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link hoverable " href="{{ route('home')  }}">{{__('layouts/app.courses')}} </a>
                </li>     <li class="nav-item">
                    <a class="nav-link hoverable" href="{{ route('viewCart')   }}">{{__('layouts/app.my-courses')}} </a>
                </li>


                @if(Auth::user()->role =='teacher')
                    <li class="nav-item">
                        <a class="nav-link hoverable" href="{{ route('create' )}}">{{__('layouts/app.create-courses')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverable" href="{{ route('manage')  }}">{{__('layouts/app.manage')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverable" href="{{ route('student')  }}">{{__('course/student.student')}}</a>
                    </li>
                @endif
                    <form method="POST" action="{{ route('logout')  }}">
                        @csrf
                        <button  class="nav-link bg-dark text-white border-0 " >{{__('layouts/app.Logout')}} </button>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link hoverable" href="{{ route('register' ) }}">{{__('layouts/app.register')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hoverable" href="{{ route('login' ) }}">{{__('layouts/app.login')}} </a>
                    </li>

                @endauth


            </ul>
        </div>
    </nav>
    <main class="">
        <div class="">
            @yield('content')
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


<style>

    .hoverable{
      display:inline-block;
      backface-visibility: hidden;
      vertical-align: middle;
      position:relative;
      box-shadow: 0 0 1px rgba(0,0,0,0);
      tranform: translateZ(0);
      transition-duration: .3s;
      transition-property:transform;
    }

    .hoverable:before{
      position:absolute;
      pointer-events: none;
      z-index:-1;
      content: '';
      top: 100%;
      left: 5%;
      height:10px;
      width:90%;
      opacity:0;
      background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
      background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
      /* W3C */
      transition-duration: 0.3s;
      transition-property: transform, opacity;
    }

    .hoverable:hover, .hoverable:active, .hoverable:focus{
      transform: translateY(-5px);
    }
    .hoverable:hover:before, .hoverable:active:before, .hoverable:focus:before{
      opacity: 1;
      transform: translateY(-5px);
    }



    @keyframes bounce-animation {
      16.65% {
        -webkit-transform: translateY(8px);
        transform: translateY(8px);
      }

      33.3% {
        -webkit-transform: translateY(-6px);
        transform: translateY(-6px);
      }

      49.95% {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
      }

      66.6% {
        -webkit-transform: translateY(-2px);
        transform: translateY(-2px);
      }

      83.25% {
        -webkit-transform: translateY(1px);
        transform: translateY(1px);
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }


    /*everything below here is just setting up the page, so dont worry about it */


    @media (min-width: 768px) {
      .navbar{
        display: flex;
        flex-direction: row;
        float: none;
        display: inline-block;
      }
    }

    body {

      background-color: rgb(177, 108, 158);
      font-weight:600;
      text-align:center !important;
      color: white;
    }

    nav {
      background: none !important;
      text-transform:uppercase;
      li {
        margin-left: 3em;
        margin-right: 3em;
        a{
          transition: .5s color ease-in-out;
        }
      }
    }

    .page-title {
      opacity: .75 !important;
    }

    .card{
        color: #000
    }
    </style>

<script>
$(function(){
  var str = '#len'; //increment by 1 up to 1-nelemnts
  $(document).ready(function(){
    var i, stop;
    i = 1;
    stop = 4; //num elements
    setInterval(function(){
      if (i > stop){
        return;
      }
      $('#len'+(i++)).toggleClass('bounce');
    }, 500)
  });
});
</script>
