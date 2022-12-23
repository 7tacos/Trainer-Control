<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // return view('home');
      $user = Auth::user();
      // if($user->role == 0) {
      //   // if manager
      //   return view('dashboard-ecommerce');
      // } elseif($user->role == 1) {
      //   // if supervisor
      //   return view('dashboard-analytics');
      // } else {
      //   // if anyone else
      //   return view('home');
      // }
      $for = [
          '0' => 'blank',
          '1' => 'supervisorViews.dashboard',
      ];
      return view($for[$user->role]);
    }
}
