@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Register Area -->
    <div class="register-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="register-form">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                        </a>
                    </div>

                    <h2>Register</h2>

                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="form-group">
                        <!-- <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}"> -->
                        <input placeholder="{{ __('First Name') }}" id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>
                        <span class="label-title">
                            <i class='bx bx-user'></i>
                        </span>
                      </div>
                      <div class="form-group">
                        <!-- <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}"> -->
                        <input placeholder="{{ __('Last Name') }}" id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>
                        <span class="label-title">
                            <i class='bx bx-user'></i>
                        </span>
                      </div>
                      <div class="form-group">
                        <!-- <input type="text" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}"> -->
                        <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="label-title">
                            <i class='bx bx-envelope'></i>
                        </span>
                      </div>

                      <div class="form-group">
                        <!-- <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}"> -->
                        <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="label-title">
                            <i class='bx bx-lock'></i>
                        </span>
                      </div>

                      <div class="form-group">
                        <!-- <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}"> -->
                        <input placeholder="{{ __('Password Confirm') }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="label-title">
                            <i class='bx bx-lock'></i>
                        </span>
                      </div>

                        <button type="submit" class="register-btn">Sign Up</button>

                        <p class="mb-0">Already have account? <a href="/login">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->
@endsection
