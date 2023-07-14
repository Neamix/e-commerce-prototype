@extends('layouts.master')

@section('content')
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Login Form -->
    <form class="w-100 m-auto container mt-5" action="{{ route('auth.signin') }}" method="post">
        @csrf
        
        <div class="form-group">
            <input type="text" id="name" class="form-control" name="email" placeholder="email">
            @error('email')
            {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <input type="text" id="password" class="form-control" name="password" placeholder="password">
            @error('password')
            {{ $message }}
            @enderror
        </div>

        @error('login')
        <p>{{ $message }}</p>
        @enderror

        <input type="submit" class="btn btn-primary" value="Log In">
    </form>

  </div>
</div>
@endsection