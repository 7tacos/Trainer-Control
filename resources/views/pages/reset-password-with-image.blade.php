@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Reset Password Area -->
    <div class="reset-password-area bg-image">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="reset-password-content">
                    <div class="row m-0">
                        <div class="col-lg-5 p-0">
                            <div class="image">
                                <img src="{{ asset('assets/img/computer.png') }}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-7 p-0">
                            <div class="reset-password-form">
                                <h2>Reset Your Password</h2>

                                <form>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="name" placeholder="Enter a new password">
                                        <span class="label-title">
                                            <i class='bx bx-lock'></i>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="email" placeholder="Confirm your new password">
                                        <span class="label-title">
                                            <i class='bx bx-lock-alt'></i>
                                        </span>
                                    </div>

                                    <button type="submit" class="reset-password-btn">Reset my Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reset Password Area -->
@endsection
