@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Not Authorized Area -->
    <div class="not-authorized-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="not-authorized-content">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                    </a>

                    <h2>You are not authorized!</h2>
                    <p>You are not authorized to access this web page as per the dot compliance.</p>

                    <a href="/" class="default-btn">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Not Authorized Area -->
@endsection
