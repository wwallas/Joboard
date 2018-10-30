@extends('layout')

@section('content')

    <div class="jumbotron" style="background-color:#fff">
        <div class="row">
            <div class="align-left col-md-10 col-md-offset-1 bg-primary text-white" >

                  <img src="/uploads/avatars/{{ $user->profile->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/>
                  <h2>{{ $user->name}}'s Profile</h2>
                  <form enctype="multipart/form-data" class="" action="/profile/profiles" method="post">
                      @csrf
                      <label for="">Update Profile Image</label>
                      <input type="file" name="avatar" value="">
                      <input type="submit" class="pull right btn btn-primary">
                  </form>
            </div>
        </div>

<div class="col-md-10 col-md-offset-1">
    <br><br>
    <form action="/profile" method="post">
        <input type="hidden" name="_method" value="PUT" />
        {{ csrf_field() }}

        <div class="form-group text-primary">
            <!-- -->

        </div>
        <div class="form-group text-primary">
            <!--  -->
        </div>

        <div id="green">

        <div class="form-group">
            <input class="form-controller" type="text" name="birthday" placeholder="Birthday" value={{ $user->profile->birthday or '' }}>
        </div>

        <div class="form-group">
            <input class="form-controller" type="text" name="location" placeholder="Location" value={{ $user->profile->location or '' }}>
        </div>
        <div class="form-group">
            <input class="form-controller" type="text" name="bio" placeholder="Bio" value={{ $user->profile->bio or '' }}>
        </div>
        <div class="form-group">
            <input class="form-controller" type="text" name="phone" placeholder="Phone" value={{ $user->profile->phone or '' }}>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save profile</button>
        </div>
    </form>
</div>


    </div>
@endsection
