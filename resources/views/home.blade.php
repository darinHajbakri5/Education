@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Carousel Events Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 10px;
        }
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <script>
        $(function() {
            // Enable Carousel
            $('#carouselExample').carousel();
            // Enable carousel previous/next controls
            $(".carousel-control-prev").click(function() {
                $("#carouselExample").carousel('prev');
            });
            $(".carousel-control-next").click(function() {
                $("#carouselExample").carousel('next');
            });
            // Enable carousel indicators
            $("#cityslide").click(function() {
                $("#carouselExample").carousel(0);
            });
            $("#lakeslide").click(function() {
                $("#carouselExample").carousel(1);
            });
            $("#treeslide").click(function() {
                $("#carouselExample").carousel(2);
            });

        });
    </script>
</head>
<body>
    <div class="container bcontent">
        <h2>Darin Education</h2>
        <hr />
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <!--Carousel Indicators-->
            <ol class="carousel-indicators">
                <li id="cityslide" class="active"></li>
                <li id="lakeslide"></li>
                <li id="treeslide"></li>
            </ol>
            <!--Carousel Slides-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/img/bg-masthead.jpg" alt="City">
                    <div class="carousel-caption">
                        <h5>Metro City</h5>
                        <p>Metro cities are occupied with more humans.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/img/bg-signup.jpg" alt="Lake">
                    <div class="carousel-caption">
                        <h5>River Pond</h5>
                        <p>River and pond difference is water movement.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/img/demo-image-01.jpg" alt="Tree">
                    <div class="carousel-caption">
                        <h5>River Tree</h5>
                        <p>Tree in the river pond.</p>
                    </div>
                </div>
            </div>
            <!--Carousel Previous Next Controls-->
            <a class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</body>
</html>
@endsection
