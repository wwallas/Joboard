    @extends('layout')
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            
    
            <style>
            .mb-60 {
        margin-bottom: 60px;
        align-content:center;
       
    }
    h4{
        font-family:bold;
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
        overflow: hidden;
        padding: 28px 0 25px;
        height:325px;
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
                <h1 class="text-center">Welcome to the Quest for you Perfect Job!</h1>
            </div>
        


            <div class="container">
                <h2 class="text-center">Your tailored list</h2>

        
            <div class="row">
            @isset($jobs)
            @foreach($jobs as $job)
           
            <a href="{{ $job ->url }}">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="our-services-wrapper mb-60">
                                    <div class="services-inner">
                                        <div class="our-services-img">
                                    
                                        </div>
                                        <div class="our-services-text">
                                            <form action="addJobs">
                                                @csrf
                                                <h3>{{ $job ->company }}</a>
                                            <input type="hidden" name="company" value="{{ $job ->company }}"/>
                                                <p>{{ $job ->locations }}</p>
                                                <h4>{{ $job ->title }}</h4>
                                            <input type="hidden" name="title" value="{{ $job ->title }}"/>
                                                <p>{{ substr(strip_tags($job ->description), 0, 250) }}</p>
                                                <p>{{ $job ->salary }}</p>
                                            <input type="hidden" name="url" value="{{ $job->url }}"/>    
                                                <button class="btn btn-xs btn-primary">add to favorites</button>
                                            </form>
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
