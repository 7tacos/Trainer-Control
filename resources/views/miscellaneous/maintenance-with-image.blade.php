@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Maintenance Area -->
    <div class="maintenance-area bg-image">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="maintenance-content">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                    </a>

                    <h2>Maintenance</h2>
                    <p>Our site is currently under maintenance. We will be back shortly. Thank You for patience!</p>

                    <a href="/" class="default-btn">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Maintenance Area -->
@endsection
