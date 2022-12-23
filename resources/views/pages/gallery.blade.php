@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="/"><i class='bx bx-home-alt'></i></a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">Gallery</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Gallery Area -->
    <div class="gallery-area">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/1.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/1.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/2.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/2.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/3.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/3.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/4.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/4.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/5.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/5.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/6.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/6.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/7.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/7.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/8.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/8.jpg') }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-gallery-image mb-30">
                    <img src="{{ asset('assets/img/slider/9.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/slider/9.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
@endsection
