@extends('layouts.master')

@section('content')
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Login Form -->
    <form class="w-100 m-auto container mt-5" method="post" action="{{ route('auth.signup') }}">
        @csrf
        <div class="form-group">
            <input type="text" id="name" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group my-3">
            <input type="email" id="email" class="form-control " name="email" placeholder="Email Address" value="{{ old('email') }}">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <input type="password" id="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Log In">
    </form>

  </div>
</div>
@endsection