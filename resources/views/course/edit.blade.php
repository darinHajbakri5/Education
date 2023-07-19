@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">

        <div class="col-md-16">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center">

              <h4 class="card-title text-dark">{{__('course/edit.edit') }}</h4> </div>


                <div class="card-body">
                    <form method="POST" action="{{route('course.update', $course)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="title.en">{{__('course/create.title')}}</label>
                                <input type="text" class="form-control" id="title.en" name="title[en]" required value="{{$course->translate('en')->title}}">
                            </div>
                        </div>


                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="title.tr">{{__('course/create.title-tr')}}</label>
                                <input type="text" class="form-control" id="title.tr" name="title[tr]" required value="{{$course->translate('tr')->title}}">
                            </div>
                        </div>


                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="title.ar">{{__('course/create.title-ar')}}</label>
                                <input type="text" class="form-control" id="title.ar" name="title[ar]" required value="{{$course->translate('ar')->title}}">
                            </div>
                        </div>

                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="text.en">{{__('course/create.text')}} </label>
                                <input type="text" class="form-control" id="text.en" name="text[en]" required value="{{$course->translate('en')->text}}">
                            </div>
                        </div>

                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="text.tr">{{__('course/create.text-tr')}} </label>
                                <input type="text" class="form-control" id="text.tr" name="text[tr]" required value="{{$course->translate('tr')->text}}">
                            </div>
                        </div>

                   <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="text.ar">{{__('course/create.text-ar')}} </label>
                                <input type="text" class="form-control" id="text.ar" name="text[ar]" required value="{{$course->translate('ar')->text}}">
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="description.en">{{__('course/create.discription')}} </label>
                                <textarea class="form-control" id="description.en" name="description[en]" required > {{$course->translate('en')->description}}</textarea>
                            </div>
                        </div>


                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="description.tr">{{__('course/create.discription-tr')}} </label>
                                <textarea class="form-control" id="description.tr" name="description[tr]"  required  >{{$course->translate('tr')->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4">
                            <div class="form-group">
                                <label for="description.ar">{{__('course/create.discription-ar')}} </label>
                                <textarea class="form-control" id="description.ar" name="description[ar]" required  >{{$course->translate('ar')->description}}</textarea>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class=" d-flex justify-content-end px-4 py-3">

                            <button type="submit" class="btn btn-secondary">{{__('course/create.createcourse')}} </button>
                        </div>

                    </div>
                    @endsection


    <style>

        .material-icons {
          font-family: 'Material Icons';
          font-weight: normal;
          font-style: normal;
          font-size: 24px;
          line-height: 1;
          letter-spacing: normal;
          text-transform: none;
          display: inline-block;
          white-space: nowrap;
          word-wrap: normal;
          direction: ltr;
          -webkit-font-feature-settings: 'liga';
          -webkit-font-smoothing: antialiased;
        }



        html *{
          -webkit-font-smoothing: antialiased;
        }

        /* typography */

        h1,
        .h1 {
          font-size: 3.3125rem;
          line-height: 1.15em;
        }

        h2,
        .h2 {
          font-size: 2.25rem;
          line-height: 1.5em;
        }

        h3,
        .h3 {
          font-size: 1.5625rem;
          line-height: 1.4em;
        }

        h4 {
          font-size: 1.125rem;
          line-height: 1.5em;
        }

        h5,
        .h5 {
          font-size: 1.0625rem;
          line-height: 1.55em;
          margin-bottom: 15px;
        }

        h6,
        .h6 {
          font-size: 0.75rem;
          text-transform: uppercase;
          font-weight: 500;
        }

        p {
          font-size: 14px;
          margin: 0 0 10px;
        }



        a .material-icons {
            vertical-align: middle;
        }

        /* dropdown */

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            float: left;
            min-width: 10rem;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .25rem;
        }

        .dropdown-menu.dropdown-with-icons .dropdown-item {
            padding: .75rem 1.25rem .75rem .75rem;
        }

        .dropdown-menu .dropdown-item, .dropdown-menu li>a {
            position: relative;
            width: auto;
            display: flex;
            flex-flow: nowrap;
            align-items: center;
            color: #333;
            font-weight: 400;
            text-decoration: none;
            font-size: .8125rem;
            border-radius: .125rem;
            margin: 0 .3125rem;
            -webkit-transition: all 150ms linear;
            -moz-transition: all 150ms linear;
            -o-transition: all 150ms linear;
            -ms-transition: all 150ms linear;
            transition: all 150ms linear;
            min-width: 7rem;
            padding: .625rem 1.25rem;
            overflow: hidden;
            line-height: 1.428571;
            text-overflow: ellipsis;
            word-wrap: break-word;
        }

        .dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
            vertical-align: middle;
            font-size: 24px;
            position: relative;
            margin-top: -4px;
            top: 1px;
            margin-right: 12px;
            opacity: .5;
        }

        .dropdown-menu .dropdown-item:hover, .dropdown-menu a:active, .dropdown-menu a:focus, .dropdown-menu a:hover {
            box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);
            background-color: #9c27b0;
            color: #FFF;
        }

        .page-header {
            height: 100vh;
            background-size: cover;
            margin: 0;
            padding: 0;
            border: 0;
            align-items: center;
        }

        .header-filter::before {
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: block;
            left: 0;
            top: 0;
            content: "";
            background: rgba(0,0,0,.5);
        }

        .card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 135px;
            border-radius: 6px;
            color: rgba(0,0,0,.87);
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
            z-index: 2;
        }

        .card-login .card-header {
            padding: 20px 0;
            margin: -40px 20px 15px;
        }

        .card-login .card-body {
            padding: 0 30px 0 10px;
        }
        .card [class*=header-]{
          color: #fff;
        }

        .card h4.card-title {
            margin-top: 10px;
            font-size: 1.125rem;
            font-weight: 700;
            font-family: "Roboto Slab","Times New Roman",serif;
        }

        .card .card-header {
            border-radius: 3px;
            padding: 1rem 15px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border: 0;
            background: linear-gradient(60deg,#eee,#bdbdbd);
        }

        .card .card-header-primary{
              background: linear-gradient(60deg,#ab47bc,#7b1fa2);
              box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
        }

        .card-login .social-line {
            margin-top: 16px;
            text-align: center;
            padding: 0;
        }

        .card-login .social-line .btn {
            color: #fff;
            margin-left: 5px;
            margin-right: 5px;
        }

        .card-login .input-group {
            padding-bottom: 7px;
            margin: 27px 0 0;
        }

         .description {
            color: #999;
        }

        p {
            margin: 0 0 10px;
        }
            /* input */

            .input-group .input-group-text {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 15px;
            background-color: transparent;
            border-color: transparent;
            }
        .form-control{
          font-size: 14px;
        }


        .form-control:focus{
          box-shadow: none;
        }
        .form-control::placeholder {
          color: #6c757d;
          opacity: 1;
          font-size: 14px !important;
        }

        .form-control::-moz-placeholder {
          color: #AAAAAA;
          font-weight: 400;
          font-size: 14px;
        }

        .form-control:-ms-input-placeholder {
          color: #AAAAAA;
          font-weight: 400;
          font-size: 14px;
        }

        .form-control::-webkit-input-placeholder {
          color: #AAAAAA;
          font-weight: 400;
          font-size: 14px;
        }

        .form-control, .is-focused .form-control {
            background-image: linear-gradient(to top,#9c27b0 2px,rgba(156,39,176,0) 2px),linear-gradient(to top,#d2d2d2 1px,rgba(210,210,210,0) 1px);
        }

            /* buttons */


        .btn.btn-just-icon{
            font-size: 24px;
            height: 41px;
            min-width: 41px;
            width: 41px;
            padding: 0;
            overflow: hidden;
            position: relative;
            line-height: 41px;
            }

        .btn.btn-just-icon .fa{
              margin-top: 0;
            position: absolute;
            width: 100%;
            transform: none;
            left: 0;
            top: 0;
            height: 100%;
            line-height: 41px;
            font-size: 20px;
        }


            .btn.btn-link {
            box-shadow: none;
        }

        .btn.btn-primary.btn-link {
          background-color: transparent;
          color: #9c27b0;
          box-shadow: none;
        }

        .btn.btn-primary.btn-link:hover,
        .btn.btn-primary.btn-link:focus,
        .btn.btn-primary.btn-link:active {
          background-color: transparent;
          color: #9c27b0;
        }

        .btn.btn-lg,
        .btn-group-lg>.btn,
        .btn-group-lg .btn {
          padding: 1.125rem 2.25rem;
          font-size: 0.875rem;
          line-height: 1.333333;
          border-radius: 0.2rem;
        }

        a:hover,
        a:focus,
        .btn:hover,
        .btn:focus {
          color: #89229b;
          text-decoration: none;
        }



        </style>

        <script>
           $(document).on('click', '.navbar-toggler', function() {
            $toggle = $(this);

            if (materialKit.misc.navbar_menu_visible == 1) {
              $('body').removeClass('nav-open');
              materialKit.misc.navbar_menu_visible = 0;
              $('#bodyClick').remove();
              setTimeout(function() {
                $toggle.removeClass('toggled');
              }, 550);

              $('body').removeClass('nav-open-absolute');
            } else {
              setTimeout(function() {
                $toggle.addClass('toggled');
              }, 580);


              div = '<div id="bodyClick"></div>';
              $(div).appendTo("body").click(function() {
                $('body').removeClass('nav-open');

                if ($('nav').hasClass('navbar-absolute')) {
                  $('body').removeClass('nav-open-absolute');
                }
                materialKit.misc.navbar_menu_visible = 0;
                $('#bodyClick').remove();
                setTimeout(function() {
                  $toggle.removeClass('toggled');
                }, 550);
              });

              if ($('nav').hasClass('navbar-absolute')) {
                $('html').addClass('nav-open-absolute');
              }

              $('body').addClass('nav-open');
              materialKit.misc.navbar_menu_visible = 1;
            }
          });


           </script>

