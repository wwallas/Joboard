@extends('layout')

@section('content')

    <div class="jumbotron" style="background-color:#fff">
        <div class="row">
            <div class="align-left col-md-10 col-md-offset-1 bg-primary text-white" >


                  <h2>{{ $user->name}}'s Profile</h2>
                  <form enctype="multipart/form-data" class="" action="/profile/profiles" method="post">
                      @csrf


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
        <div class="form-group">

            <input class="form-controller" type="text" name="location" placeholder="Location" value={{ $user->profile->location }}>
        </div>

        <div class="form-group">
            @foreach ($techs as $tech)
            <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      {{ $tech->id }}

                    </div>
                    <div class="col-sm">
                      {{ $tech->description }}
                    </div>
                    <div class="col-sm">
                        <a href="/profile/{{ $tech->id }}/create" class="btn btn-sm btn-primary">
                            <i class="fa fa-pencil">Add</i>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="/profile/{{ $tech->id }}/destroy" class="btn btn-sm btn-danger">
                            <i class="fa fa-pencil">Delete</i>
                        </a>
                    </div>
              </div>
            </div>
    		<!-- <div class="container">
    			<div class="row">
    				<div class="col"></div>
    				<div class="col text-right">

    				</div>
    			</div>
                <div class="col text-right">


				</div>
                <div class="col text-right">


				</div>
    		</div> -->
    		@endforeach
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save profile</button>
        </div>
    </form>
</div>


    </div>
@endsection
