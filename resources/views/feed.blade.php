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
            <div class="title">
                <h1 class="text-center">Welcome to the Quest for you Perfect Job!</h1>
            </div>
                <hr>
            <h3 class="fav-title text-center">Your Favorites</h3>
            <div class="favorites row ">
                <div id="demo" class="card col-xl-4 col-lg-4 col-md-6 col-sm-3">
                    <div class="card-body">
                        <button class="btn btn-xs btn-danger">X</button>
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="text-centercard-link" title="link">Go somewhere</a>
                    </div>
                </div>
            </div>
        


            <div class="container">
                <h2 class="text-center">Your tailored list</h2>

        
            <div class="row">
            @foreach($jobs as $job)
           
            <a href="{{ $job ->url }}">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="our-services-wrapper mb-60">
                                    <div class="services-inner">
                                        <div class="our-services-img">
                                    
                                        </div>
                                        <div class="our-services-text">
                                            <form action="addJobs">
                                                <h3>{{ $job ->company }}
                                            <input type="hidden" name="{{ $job ->company }}"/>
                                                <p>{{ $job ->locations }}</p>
                                                <h4>{{ $job ->title }}</h4></a>
                                            <input type="hidden" name="{{ $job ->title }}"/>
                                                <p>{{ $job ->description }}</p>
                                                <p>{{ $job ->salary }}</p>
                                            <input type="hidden" name= "{{ $job->url }}"/>    
                                                <button class="btn btn-xs btn-primary">add to favorites</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </a>
                        
            @endforeach
                        
                            
            </div>
        </div>
            </body>
        </html>
