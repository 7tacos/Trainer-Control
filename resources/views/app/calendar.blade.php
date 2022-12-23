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
            <li class="item">Calendar</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Calendar -->
    <div class="calendar-container mb-30">
        <div class="calendar-header">
            <h3 class="mb-0">November 2019</h3>
            <button type="button">
                New Schedule
                <i class='bx bx-plus'></i>
            </button>
        </div>

        <div class="calendar">
            <span class="day-name">Mon</span>
            <span class="day-name">Tue</span>
            <span class="day-name">Wed</span>
            <span class="day-name">Thu</span>
            <span class="day-name">Fri</span>
            <span class="day-name">Sat</span>
            <span class="day-name">Sun</span>
            <div class="day day--disabled">30</div>
            <div class="day day--disabled">31</div>
            <div class="day">1</div>
            <div class="day">2</div>
            <div class="day">3</div>
            <div class="day">4</div>
            <div class="day">5</div>
            <div class="day">6</div>
            <div class="day">7</div>
            <div class="day">8</div>
            <div class="day">9</div>
            <div class="day">10</div>
            <div class="day">11</div>
            <div class="day">12</div>
            <div class="day">13</div>
            <div class="day">14</div>
            <div class="day">15</div>
            <div class="day">16</div>
            <div class="day">17</div>
            <div class="day">18</div>
            <div class="day">19</div>
            <div class="day">20</div>
            <div class="day">21</div>
            <div class="day">22</div>
            <div class="day">23</div>
            <div class="day">24</div>
            <div class="day">25</div>
            <div class="day">26</div>
            <div class="day">27</div>
            <div class="day">28</div>
            <div class="day">29</div>
            <div class="day">30</div>
            <div class="day">31</div>
            <div class="day day--disabled">1</div>
            <div class="day day--disabled">2</div>
            <section class="task task--warning">Projects</section>
            <section class="task task--danger">Design Sprint</section>
            <section class="task task--primary">Product Checkup 1
                <div class="task__detail">
                    <h4>Product Checkup 1</h4>
                    <p>15-17th November</p>
                </div>
            </section>
            <section class="task task--info">Product Checkup 2</section>
        </div>
    </div>
    <!-- End Calendar -->
@endsection
