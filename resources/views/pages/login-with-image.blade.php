@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Login Area -->
    <div class="login-area bg-image">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="login-form">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                        </a>
                    </div>

                    <h2>Welcome</h2>

                    <form>
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
                                <label class="checkbox-box">Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="forgot-password" class="forgot-password">Forgot password?</a>
                            </div>
                        </div>

                        <button type="submit" class="login-btn">Login</button>

                        <p class="mb-0">Don’t have an account? <a href="/pages/register-with-image">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection
