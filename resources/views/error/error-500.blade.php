@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Error 500 Area -->
    <div class="error-500-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="notfound">
                    <div class="notfound-bg">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <h1>Oops!</h1>
                    <h3>Error 500 : Internal Server Error!</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="/" class="default-btn">Go back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Error 500 Area -->
@endsection
