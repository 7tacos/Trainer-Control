@extends('layout.authlayout')

@section('content-wrapper')
    <!-- Start Coming Soon Area -->
    <div class="coming-soon-area bg-image">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="coming-soon-content">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="image">
                    </a>

                    <h2>We are launching soon</h2>

                    <div id="timer" class="flex-wrap d-flex justify-content-center">
                        <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                    </div>

                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" name="name" placeholder="Email address">
                            <span class="label-title"><i class='bx bx-envelope'></i></span>
                        </div>

                        <button type="submit" class="default-btn">Subscribe <i class='bx bx-paper-plane'></i></button>
                        <p>If you would like to be notified when our app is live, Please subscribe to our mailing list.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Coming Soon Area -->
@endsection
