<!-- Vendors Min JS -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>

<!-- ApexCharts JS -->
<script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apexcharts-stock-prices.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apexcharts-irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-line-chart.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-pie-donut-chart.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-area-charts.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-column-chart.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-bar-charts.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-mixed-charts.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-radialbar-charts.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts/apex-custom-radar-chart.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('assets/js/chartjs/chartjs.min.js') }}"></script>
<!-- When the url is charts/chartjs then load the library -->
@if(Request::is('charts/chartjs'))
    <script src="{{ asset('assets/js/chartjs/chartjs-custom.js') }}"></script>
@endif

<!-- To use template colors with Javascript -->
<div class="chartjs-colors">
    <div class="bg-primary"></div>
    <div class="bg-primary-light"></div>
    <div class="bg-secondary"></div>
    <div class="bg-info"></div>
    <div class="bg-success"></div>
    <div class="bg-success-light"></div>
    <div class="bg-danger"></div>
    <div class="bg-warning"></div>
    <div class="bg-purple"></div>
    <div class="bg-pink"></div>
</div>

<!-- jvectormap Min JS -->
<script src="{{ asset('assets/js/jvectormap-1.2.2.min.js') }}"></script>
<!-- jvectormap World Mill JS -->
<script src="{{ asset('assets/js/jvectormap-world-mill-en.js') }}"></script>

<!-- When the url is pages/maps then load the library -->
@if(Request::is('pages/maps'))
    <!-- Map API JS FILES -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>
    <!-- Fiva Map JS FILE -->
    <script src="{{ asset('assets/js/fiva-map.js') }}"></script>
@endif

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ mix('/js/app.js') }}"></script>
