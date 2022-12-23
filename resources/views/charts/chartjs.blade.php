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
            <li class="item">Chartjs</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Basic Bar Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Bar Chart</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <canvas id="basic_bar_chart"></canvas>
        </div>
    </div>

    <!-- Basic Line Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Line Chart</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <canvas id="basic_line_chart"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Basic Pie Chart -->
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Basic Pie Chart</h3>

                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-show'></i> View
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-printer'></i> Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-download'></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <canvas id="basic_pie_chart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Basic Radar Chart -->
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Basic Radar Chart</h3>

                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-show'></i> View
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-printer'></i> Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-download'></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <canvas id="basic_radar_chart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Basic HorizontalBar Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic HorizontalBar Chart</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <canvas id="basic_horizontalBar_chart"></canvas>
        </div>
    </div>

    <!-- Bar Chart With Line -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Bar Chart With Line</h3>

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bx bx-dots-horizontal-rounded' ></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-show'></i> View
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-edit-alt'></i> Edit
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-trash'></i> Delete
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-printer'></i> Print
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class='bx bx-download'></i> Download
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <canvas id="bar_chart_with_line"></canvas>
        </div>
    </div>
@endsection

