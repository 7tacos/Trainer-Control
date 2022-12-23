<!doctype html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>

    <body>
        <!-- Side Menu -->
        @include('layout.partials.sidebar-manu')

        <!-- Main Content Wrapper -->
        <div class="main-content d-flex flex-column" id="app">
            <!-- Top Navbar -->
            @include('layout.partials.top-navbar')

            <!-- Main Content Layout -->
            @yield('content-wrapper')

            <!-- Footer -->
            @include('layout.partials.footer')
        </div>
        <!-- End Main Content Wrapper -->

        <!-- Footer Scripts -->
        @include('layout.partials.footer-scripts')
    </body>
</html>
