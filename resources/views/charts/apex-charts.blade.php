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
            <li class="item">Apex Chats</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

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
            <div id="apex-basic-line-chart"></div>
        </div>
    </div>

    <!-- Line with Data Labels Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Line with Data Labels Chart</h3>

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
            <div id="apex-line-with-data-labels"></div>
        </div>
    </div>

    <!-- Annotations Line Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Annotations Line Chart</h3>

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
            <div id="apex-annotations-chart"></div>
        </div>
    </div>

    <!-- Gradient Line Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Gradient Line Chart</h3>

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
            <div id="apex-gradient-chart"></div>
        </div>
    </div>

    <!-- Dashed Line -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dashed Line Chart</h3>

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
            <div id="apex-dashed-linechart"></div>
        </div>
    </div>

    <!-- Zoomable Timeseries Line Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Zoomable Line Timeseries</h3>

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
            <div id="zoomable-timeseries-chart"></div>
        </div>
    </div>

    <!-- Basic Area Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Area Chart</h3>

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
            <div id="apex-basic-area-chart"></div>
        </div>
    </div>

    <!-- Spline Area Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Spline Area Chart</h3>

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
            <div id="apex-spline-area-chart"></div>
        </div>
    </div>

    <!-- Negative Area Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Negative Area Chart</h3>

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
            <div id="apex-negative-area-chart"></div>
        </div>
    </div>

    <!-- Stacked Area Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Stacked Area Chart</h3>

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
            <div id="apex-stacked-area-chart"></div>
        </div>
    </div>

    <!-- Area Chart - Datetime X-Axis -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Area Chart - Datetime X-Axis</h3>

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
            <div id="apex-chart-datetime-x-axis">
                <div class="toolbar">
                    <button id="one_month">1M</button>
                    <button id="six_months">6M</button>
                    <button id="one_year" class="active">1Y</button>
                    <button id="ytd">YTD</button>
                    <button id="all">ALL</button>
                </div>
                <div id="timeline-chart"></div>
            </div>
        </div>
    </div>

    <!-- Basic Column Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Basic Column Chart</h3>

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
            <div id="apex-basic-column-chart"></div>
        </div>
    </div>

    <!-- Column with Data Labels Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Column with Data Labels</h3>

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
            <div id="apex-column-with-data-labels"></div>
        </div>
    </div>

    <!-- Stacked Columns Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Stacked Columns</h3>

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
            <div id="apex-stacked-columns"></div>
        </div>
    </div>

    <!-- Stacked Columns 100% Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Stacked Columns 100%</h3>

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
            <div id="apex-stacked-columns-100"></div>
        </div>
    </div>

    <!-- Column with Negative Values Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Column with Negative Values</h3>

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
            <div id="apex-column-with-negative-values"></div>
        </div>
    </div>

    <!-- Dynamic Loaded Column Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Dynamic Loaded Column Chart</h3>

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
            <div id="apex-year-results-charts"></div>
        </div>
    </div>

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
            <div id="apex-basic-bar-chart"></div>
        </div>
    </div>

    <!-- Grouped Bar Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Grouped Bar Chart</h3>

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
            <div id="apex-grouped-chart"></div>
        </div>
    </div>

    <!-- Stacked Bar Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Stacked Bar Chart</h3>

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
            <div id="apex-stacked-bar-chart"></div>
        </div>
    </div>

    <!-- Stacked Bars 100% Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Stacked Bars 100% Chart</h3>

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
            <div id="apex-stacked-bars-100-chart"></div>
        </div>
    </div>

    <!-- Bar with Negative Values Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Bar with Negative Values Chart</h3>

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
            <div id="apex-bar-with-negative-values"></div>
        </div>
    </div>

    <!-- Custom DataLabels Bar Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Custom DataLabels Bar Chart</h3>

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
            <div id="apex-custom-datalabels-bar"></div>
        </div>
    </div>

    <!-- Mixed Charts Line Column -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Mixed Charts Line Column</h3>

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
            <div id="apex-mixed-charts-line-column"></div>
        </div>
    </div>

    <!-- Mixed Multiple Y-Axis Charts -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Mixed Multiple Y-Axis Charts</h3>

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
            <div id="apex-mixed-multiple-y-axis-charts"></div>
        </div>
    </div>

    <!-- Mixed Line & Area Charts -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Mixed Line & Area Charts</h3>

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
            <div id="apex-mixed-line-area-charts"></div>
        </div>
    </div>

    <!-- Mixed Line Column Area Chart -->
    <div class="card mb-30">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Mixed Line Column Area Chart</h3>

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
            <div id="apex-mixed-line-column-area-chart"></div>
        </div>
    </div>

    <!-- Simple Pie & Donut Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Simple Pie Chart</h3>

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
                    <div id="apex-simple-pie-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Simple Donut Chart</h3>

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
                    <div id="apex-simple-donut-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monochrome Pie & Gradient Donut Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Monochrome Pie Chart</h3>

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
                    <div id="apex-monochrome-pie-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Gradient Donut Chart</h3>

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
                    <div id="apex-gradient-donut-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donut with Pattern & Pie with Image Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Donut with Pattern</h3>

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
                    <div id="apex-donut-with-pattern-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Pie with Image</h3>

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
                    <div id="apex-image-with-pie-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Basic Radialbar & Multiple Radialbar Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Basic Radialbar Chart</h3>

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
                    <div id="apex-basic-radialbar-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Multiple Radialbar Chart</h3>

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
                    <div id="apex-multiple-radialbar-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Radialbar Custom Angle Circle & Radialbar Gradient Circle Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radialbar Custom Angle Circle</h3>

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
                    <div id="apex-radialbar-cutom-angle-circle"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radialbar Gradient Circle Chart</h3>

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
                    <div id="apex-radialbar-gradient-circle-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Radialbar Stroked Circular Gauge & Radialbar Semi Circular Gauge Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radialbar Stroked Circular Gauge</h3>

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
                    <div id="apex-radialbar-stroked-circular-gauge"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radialbar Semi Circular Gauge</h3>

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
                    <div id="apex-radialbar-semi-circular-gauge"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Radialbars with Image & Basic Radar Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radialbars with Image</h3>

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
                    <div id="apex-radialbars-with-image"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Basic Radar Charts</h3>

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
                    <div id="apex-basic-radar-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Radar – Multiple Series & Radar with Polygon-fill Chart -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radar – Multiple Series</h3>

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
                    <div id="apex-radar-multiple-series"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Radar with Polygon-fill</h3>

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
                    <div id="apex-radar-with-polygon-fill"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
