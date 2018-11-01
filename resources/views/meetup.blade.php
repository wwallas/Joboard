@extends('layout')

<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
            <!-- Styles -->
            <style>
            .mb-60 {
        margin-bottom: 60px;
        align-content:center;
       
    }
    .services-inner {
        border: 2px solid #48c7ec;
        margin-left: 35px;
        transition: .3s;
        align-content:center;
        text-align:center;
    }
    .our-services-img {
        float: left;
        margin-left:auto;
        margin-right: auto;
        margin-top: 28px;
    }
    .our-services-text {
        height:300px;
        padding-right: 10px;
        overflow: hidden;
        padding: 28px 0 25px;
    }
    .our-services-text h4 {
        color: #222222;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 8px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
    }
    .our-services-text h4::before {
        background: #ec6d48 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        height: 1px;
        position: absolute;
        width: 35px;
    }
    .our-services-wrapper:hover .services-inner {
        background: #fff none repeat scroll 0 0;
        border: 2px solid transparent;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
        align-content:center;
    }
    .our-services-text p {
        margin-bottom: 0;
    }
    p {
        font-size: 8px;
        font-weight: 400;
        line-height: 26px;
        color: #666;
        margin-bottom: 15px;
    }
            </style>
        </head>
        <body>
            <div class="title">
                <h1 class="text-center">Check out these networking events!</h1>
            </div>
                <hr>
            <div class="container">
               

            <div class="row">
           
            @foreach($meetup as $meet)
           
            <a href="{{ $meet ->link }}">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="our-services-wrapper mb-60">
                                    <div class="services-inner">
                                        <div class="our-services-img">
                                    
                                        </div>
                                        <div class="our-services-text">
                                         
                                                <h3>{{ $meet ->name}}
                                                </a>
                                                <p>{{ $meet ->city }}</p>
                                                <!-- <h4>{{ $meet ->link}}</h4></a> -->
                                           
                                                <p>{{ substr(strip_tags($meet ->description), 0, 350) }}</p>
                                            
                                          
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
               
                        
            @endforeach
                
                            
            </div>
        </div>
            </body>
        </html>
