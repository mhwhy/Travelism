



{{-- new login --}}
@extends('layouts.main')
    <!-- login -->
@section('container')
<section id="login">
   <div class="container">
      <div class="right">
        <img src="{{ asset('Assets/login/login.png') }}" alt="" />
      </div>
      <div class="login mt-5  ms-5">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
          <h1 class="fs-3">Sign In</h1>

          <div class="user-box">
            <input type="text" class=" form-control-user @error('username') is-invalid @enderror" name="username" required autocomplete="off"  />
            <label for="email">Username</label>
            @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
          <div class="user-box">
            <input type="password" class=" form-control-user @error('password') is-invalid @enderror" name="password" required />
            <label for="password">password</label>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>

          <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input bg-transparent border-white" id="remember_me" name="remember" />
              <label class="text-white" style="font-size: 12px" for="exampleCheck1">Remember me</label>
            </div>


          </div>
          <button style="width: 50%; margin-left:70px">Sign In</button>
          <label style="font-size: 12px" class="text-white text-center mt-3"> klik disini untuk membuat akun !<a href="{{ route('register') }}" class="link text-decoration-none"> Sign Up</a></label>
        </form>
      </div>
    </div>
</section>
@endsection

