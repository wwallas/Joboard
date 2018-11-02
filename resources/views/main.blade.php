
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/img/favicon.png" type="image/png">

    <title>Tweeter Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.2/litera/bootstrap.min.css" rel="stylesheet" integrity="sha384-EHn394B6EAtw4HZN4uqeUmZQO1bj/l7+L9ToHR0izJSXw2BNB5cuhR3weBJup/95" crossorigin="anonymous">
    <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
    <!-- Custom styles for this template -->
    <link href="/css/navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  </head>

  <body>
<div >

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">

      <a class="navbar-brand" href="/"><img class="it-image" src="/img/download.png" ></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              @if (Auth::check())
                    <a class="nav-link" href="/displaymenu">Home <span class="sr-only">(current)</span></a>
              @endif
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="ScrollMagic/index">Link</a> -->
            <a href="/auth/login" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="ScrollMagic/index">Link</a> -->
            <a href="/auth/register" class="nav-link">Sign Up</a>
          </li>


        </ul>

        <ul class="navbar-nav ml-auto">
        <!-- Right side of Navbar-->

            <li class="nav-item dropdown ">
                    @if (Auth::check())
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position:relative; padding-left:50px;">

                            {{ Auth::user()->name }}</a>
                    @endif
                  <div class="dropdown-menu" aria-labelledby="Preview">
                  <a class="dropdown-item fa fa-btn fa-sign-out" href="{{ url('auth/logout') }}">Logout<form class="" method="post">
                      @csrf
                  </form></a>

                  <a class="dropdown-item fas fa-user-check" href="{{ url('/profile/index') }}">profile</a>
                  </div>
             </li></i>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
    <header id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
            <h1>Welcome to Job Quest</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis iusto
                pariatur nisi, maiores consequatur aperiam officia at laboriosam explicabo quibusdam!
            </p>
            <div class="container">
                @yield('content')
            </div>
         </div>
    </header>

    <main role="main" class="container">
      <!-- <div class="jumbotron">

        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
        <img src="/img/Tweet.png" alt="Tweeter" width="200" height="180" />
      </div> -->
      <div class="container">
          @yield('content')
      </div>
    </main>

</div>


<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="/js/app.js"></script>
<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
$('[data-toggle="popover"]').popover()
})
</script>



  </body>


</html>
