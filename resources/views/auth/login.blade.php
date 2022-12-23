@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Login Area -->
    <div class="login-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="login-form">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                        </a>
                    </div>

                    <h2>Welcome</h2>

                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            <span class="label-title">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="label-title">
                                <i class='bx bx-lock'></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <div class="remember-forgot">
                                <label class="checkbox-box">{{ __('Remember Me') }}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-password">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="login-btn">Login</button>

                        <!-- <p class="mb-0">Don’t have an account? <a href="/pages/register">Sign Up</a></p> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection
