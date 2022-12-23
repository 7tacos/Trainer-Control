@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Forgot Password Area -->
    <div class="forgot-password-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="forgot-password-content">
                    <div class="row m-0">
                        <div class="col-lg-5 p-0">
                            <div class="image">
                                <img src="{{ asset('assets/img/computer.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7 p-0">
                            <div class="forgot-password-form">
                                <h2>Recover your password</h2>
                                <p class="mb-0">Please provide the email address that you used when you were assigned your account.</p>

                                <form method="POST" action="{{ route('password.email') }}">
                                  @csrf
                                  @if (session('status'))
                                      <div class="alert alert-success" role="alert">
                                          {{ session('status') }}
                                      </div>
                                  @endif
                                    <div class="form-group">
                                      <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                        <span class="label-title">
                                            <i class='bx bx-envelope'></i>
                                        </span>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <button type="submit" class="forgot-password-btn">{{ __('Send Password Reset Link') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Forgot Password Area -->
@endsection
