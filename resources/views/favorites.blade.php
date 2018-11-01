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
        margin-left: -36px;
        margin-right: 22px;
        margin-top: 28px;
    }
    .our-services-text {
        padding-right: 10px;
    }
    .our-services-text {
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
          
            <h3 class="fav-title text-center">Your Favorites</h3>

           <div class="row">
            @isset($faves)
            @foreach($faves as $fave)
           
          
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="our-services-wrapper mb-60">
                                    <div class="services-inner">
                                        <div class="our-services-img">
                                    
                                        </div>
                                        <div class="our-services-text">
                                                @csrf
                                                <h3>{{ $fave ->company }}
                                            
                                                <p>{{ $fave->locations }}</p>
                                                <h4>{{ $fave ->title }}</h4></a>
                                                <a href="{{ $fave ->url }}"> Check it out!</a>
    
                                                <p>{{ $fave ->salary }}</p>
                                              
                                               
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
               
                        
            @endforeach
            @endif             
                            
            </div>
        </div>
            </body>
        </html>
