@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="item">
                <a href="/">
                    <i class='bx bx-home-alt'></i>
                </a>
            </li>
            <li class="item">Dashboard</li>
            <li class="item">Statistics Card</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart'></i>
                </div>
                <span class="sub-title">Conversion Rate</span>
                <h3>5.45% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 56.9%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="56.9"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart-square'></i>
                </div>
                <span class="sub-title">Conversion Value</span>
                <h3>4.75% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 32.1%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="32.1"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart-alt'></i>
                </div>
                <span class="sub-title">Conversion Order</span>
                <h3>6.47% <span class="badge badge-red"><i class='bx bx-down-arrow-alt'></i> 45.5%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="45.5"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-paper-plane'></i>
                </div>
                <span class="sub-title">Subscribers Gained</span>
                <h3>92.6% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 26.0%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="26.0"></div>
                    </div>

                    <p>Subscribe in month</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Stats Area -->
    <div class="ecommerce-stats-area">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-user-check'></i>
                    </div>
                    <span class="sub-title">Subscribe Gained</span>
                    <h3>23.7k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 26.0%</span></h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-badge-dollar'></i>
                    </div>
                    <span class="sub-title">Revenue Generated</span>
                    <h3>15.1k <span class="badge badge-red"><i class='bx bx-down-arrow-alt'></i> 45.5%</span></h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <span class="sub-title">Quarterly Sales</span>
                    <h3>30.9k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 32.1%</span></h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <span class="sub-title">Orders Received</span>
                    <h3>10.5k <span class="badge"><i class='bx bx-up-arrow-alt'></i> 56.9%</span></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats Area -->

    <!-- Start -->
    <div class="row mb-30">
        <div class="col-lg-4 col-md-6">
            <div class="new-product-box">
                <div class="icon">
                    <i class='bx bx-shopping-bag'></i>
                </div>
                New Products
                <span class="sub-text d-block font-weight-bold">1.3K</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="new-user-box">
                <div class="icon">
                    <i class='bx bx-user-pin'></i>
                </div>
                New Users
                <span class="sub-text d-block font-weight-bold">2.5K</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="upcoming-product-box">
                <div class="icon">
                    <i class='bx bx-cart-alt'></i>
                </div>
                Upcoming Products
                <span class="sub-text d-block font-weight-bold">1.1K</span>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
