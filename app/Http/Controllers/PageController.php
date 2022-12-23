<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showDashboard() { return view('dashboard'); }
    public function showCreateTMR() { return view('trainerPages.create-tmr-main'); }
    public function showViewTMR() { return view('trainerPages.view-tmr-main'); }
}
