



{{-- new rehister --}}
@extends('layouts.main')

@section('container')
  {{-- register --}}
    <section id="login">
      <div class="container">
        <div class="login  ms-5 mt-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <h1 class="fs-3">Sign Up</h1>

            <div class="user-box">
              <input type="text" class=" form-control-user @error('name') is-invalid @enderror" name="name" required autocomplete="off" autofocus required />
              <label for="">Nama User</label>
            </div>
            <div class="user-box">
              <input type="text" class=" form-control-user @error('username') is-invalid @enderror" name="username" required autocomplete="off" required/>
              <label for="">Username</label>
            </div>
            <div class="user-box">
              <input type="password" class=" form-control-user @error('password') is-invalid @enderror" name="password" required />
              <label for="">Password</label>
            </div>
            <div class="user-box">
              <input type="password" class=" form-control-user" name="password_confirmation" required " />
              <label for="">Confirm Password</label>
            </div>
            <button>Sign Up</button>
            <label style="font-size: 12px; color: white; margin-top: 3px; text-align: center">Already have an account ?<a href="{{ route('login') }}" class="link text-decoration-none"> Sign In</a></label>
          </form>
        </div>
        <div class="right2">
          <img src="{{ asset('Assets/login/reg.png') }}" alt="" />
        </div>
      </div>
    </section>
@endsection


