<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () { return view('welcome'); });
// Route::get('/', function () { return view('dashboard-analytics'); });
// Route::get('/dashboard-ecommerce', function () { return view('dashboard-ecommerce'); });
Auth::routes();

Route::get('/', function () { return view('welcome'); });


Route::middleware('auth')->group(function() {

  // page routes
  Route::get('/dashboard', 'PageController@showDashboard')->name('dashboard');

  Route::get('/create-tmr', 'PageController@showCreateTMR')->name('createTMR');
  Route::get('/view-tmr-list', 'PageController@showViewTMR')->name('viewTMR');

  // create TMR utility routes
  Route::get('/utility/tmr/utility/getitems', 'TMRControllers\TMRCreateController@getItems');

}); //end Auth middleware



// App
Route::get('/app/email/inbox', function () { return view('/app/email/inbox'); });
Route::get('/app/email/read', function () { return view('/app/email/read'); });
Route::get('/app/email/compose', function () { return view('/app/email/compose'); });
Route::get('/app/chat', function () { return view('/app/chat'); });
Route::get('/app/calendar', function () { return view('/app/calendar'); });
Route::get('/app/todo', function () { return view('/app/todo'); });

// UI Elements
Route::get('/ui-elements/grid', function () { return view('/ui-elements/grid'); });
Route::get('/ui-elements/colors', function () { return view('/ui-elements/colors'); });
Route::get('/ui-elements/basic-card', function () { return view('/ui-elements/basic-card'); });
Route::get('/ui-elements/colors-card', function () { return view('/ui-elements/colors-card'); });
Route::get('/ui-elements/statistics-card', function () { return view('/ui-elements/statistics-card'); });
Route::get('/ui-elements/alerts', function () { return view('/ui-elements/alerts'); });
Route::get('/ui-elements/badges', function () { return view('/ui-elements/badges'); });
Route::get('/ui-elements/borders', function () { return view('/ui-elements/borders'); });
Route::get('/ui-elements/breadcrumb', function () { return view('/ui-elements/breadcrumb'); });
Route::get('/ui-elements/buttons', function () { return view('/ui-elements/buttons'); });
Route::get('/ui-elements/button-group', function () { return view('/ui-elements/button-group'); });
Route::get('/ui-elements/carousel', function () { return view('/ui-elements/carousel'); });
Route::get('/ui-elements/collapse', function () { return view('/ui-elements/collapse'); });
Route::get('/ui-elements/display', function () { return view('/ui-elements/display'); });
Route::get('/ui-elements/dropdowns', function () { return view('/ui-elements/dropdowns'); });
Route::get('/ui-elements/embed', function () { return view('/ui-elements/embed'); });
Route::get('/ui-elements/figures', function () { return view('/ui-elements/figures'); });
Route::get('/ui-elements/images', function () { return view('/ui-elements/images'); });
Route::get('/ui-elements/jumbotron', function () { return view('/ui-elements/jumbotron'); });
Route::get('/ui-elements/list-group', function () { return view('/ui-elements/list-group'); });
Route::get('/ui-elements/media-object', function () { return view('/ui-elements/media-object'); });
Route::get('/ui-elements/modal', function () { return view('/ui-elements/modal'); });
Route::get('/ui-elements/navs', function () { return view('/ui-elements/navs'); });
Route::get('/ui-elements/navbar', function () { return view('/ui-elements/navbar'); });
Route::get('/ui-elements/pagination', function () { return view('/ui-elements/pagination'); });
Route::get('/ui-elements/progress', function () { return view('/ui-elements/progress'); });
Route::get('/ui-elements/spinners', function () { return view('/ui-elements/spinners'); });
Route::get('/ui-elements/text', function () { return view('/ui-elements/text'); });
Route::get('/ui-elements/vertical-align', function () { return view('/ui-elements/vertical-align'); });
Route::get('/ui-elements/typography', function () { return view('/ui-elements/typography'); });
Route::get('/ui-elements/tooltips', function () { return view('/ui-elements/tooltips'); });
Route::get('/ui-elements/popovers', function () { return view('/ui-elements/popovers'); });

// icons
Route::get('/icons/boxicons', function () { return view('/icons/boxicons'); });
Route::get('/icons/feathericons', function () { return view('/icons/feathericons'); });


// Forms & Table
Route::get('/ui-elements/forms', function () { return view('/ui-elements/forms'); });
Route::get('/ui-elements/input-group', function () { return view('/ui-elements/input-group'); });
Route::get('/ui-elements/tables', function () { return view('/ui-elements/tables'); });
Route::get('/ui-elements/tables-dark', function () { return view('/ui-elements/tables-dark'); });

// Pages
Route::get('/pages/profile', function () { return view('/pages/profile'); });
Route::get('/pages/faq', function () { return view('/pages/faq'); });
Route::get('/pages/invoice', function () { return view('/pages/invoice'); });
Route::get('/pages/gallery', function () { return view('/pages/gallery'); });
Route::get('/pages/timeline', function () { return view('/pages/timeline'); });
Route::get('/pages/pricing', function () { return view('/pages/pricing'); });
Route::get('/pages/blank-page', function () { return view('/pages/blank-page'); });
Route::get('/pages/maps', function () { return view('/pages/maps'); });

// Authentication
Route::get('/pages/login', function () { return view('/pages/login'); });
Route::get('/pages/login-with-image', function () { return view('/pages/login-with-image'); });
Route::get('/pages/register', function () { return view('/pages/register'); });
Route::get('/pages/register-with-image', function () { return view('/pages/register-with-image'); });
Route::get('/pages/forgot-password', function () { return view('/pages/forgot-password'); });
Route::get('/pages/forgot-password-with-image', function () { return view('/pages/forgot-password-with-image'); });
Route::get('/pages/reset-password', function () { return view('/pages/reset-password'); });
Route::get('/pages/reset-password-with-image', function () { return view('/pages/reset-password-with-image'); });
Route::get('/pages/session-lock-screen', function () { return view('/pages/session-lock-screen'); });
Route::get('/pages/session-lock-screen-with-image', function () { return view('/pages/session-lock-screen-with-image'); });

// Miscellaneous
Route::get('/miscellaneous/not-authorized', function () { return view('/miscellaneous/not-authorized'); });
Route::get('/miscellaneous/not-authorized-with-image', function () { return view('/miscellaneous/not-authorized-with-image'); });
Route::get('/miscellaneous/maintenance', function () { return view('/miscellaneous/maintenance'); });
Route::get('/miscellaneous/maintenance-with-image', function () { return view('/miscellaneous/maintenance-with-image'); });
Route::get('/miscellaneous/coming-soon', function () { return view('/miscellaneous/coming-soon'); });
Route::get('/miscellaneous/coming-soon-with-image', function () { return view('/miscellaneous/coming-soon-with-image'); });

// Error
Route::get('/error/error-404', function () { return view('/error/error-404'); });
Route::get('/error/error-404-with-image', function () { return view('/error/error-404-with-image'); });
Route::get('/error/error-500', function () { return view('/error/error-500'); });
Route::get('/error/error-500-with-image', function () { return view('/error/error-500-with-image'); });

// Charts
Route::get('/charts/apex-charts', function () { return view('/charts/apex-charts'); });
Route::get('/charts/chartjs', function () { return view('/charts/chartjs'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
