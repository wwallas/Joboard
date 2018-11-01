@extends('layout')

@section('content')

    <div class="jumbotron" style="background-color:#fff">
        <div class="row">
            <div class="align-left col-md-10 col-md-offset-1 bg-primary text-white" >


                  <h2>{{ $user->name}}'s Profile </h2>
            </div>
        </div>

    <br>
    <form class="form-horizontal">
      <div class="form-group row">
        <label  class="col-sm-2 control-label">Location</label>
        <div class="col-5">
            <p>{{ $user->profile->location }}</p>
            <ul>
                @foreach($user->technologies as $tech)
                <li>{{ $tech->description }}</li>
                @endforeach
            </ul>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
          <!-- <button type="submit" class="btn btn-default">Sign in</button> -->
          <a class="btn btn-primary" href="/profile/profileupdate" role="button"  >Edit profile</a>
        </div>

        <div class="col-sm-offset- col-sm-10">
          <!-- <button type="submit" class="btn btn-default">home</button> -->
          <a class="btn btn-primary" href="/displaymenu" role="button"  >Home</a>
        </div>
      </div>
  </form>


@endsection
