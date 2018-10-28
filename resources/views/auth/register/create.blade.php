@extends('layout')

@section('content')
<h1>Sign up</h1>
<form action="/auth/register" method="POST">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required/>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required/>
    </div>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create!</button>
    </div>
</form>
@endsection
