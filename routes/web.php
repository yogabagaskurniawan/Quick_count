<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/hasil-event', function () {
    return view('umum.resultEvent');
});

Route::get('/hasil-vote', function () {
    return view('umum.resultVote');
});


// Route::get('/user/event', function () {
//     return view('event');
// });

Route::get('/user/detailevent', function () {
    return view('detailevent');
});

Route::get('/user/detailkandidat', function () {
    return view('detailkandidat');
});

// user
Route::group(
    ['namespace' => 'user'],
    function () {
        Route::get('/', 'HomePageController@index');
        // event
        Route::get('/event/{slug}', 'HomePageController@detailEvent');
    }
);

Auth::routes();

// admin
Route::group([
    'middleware' => ['auth', 'role:admin'] 
    ],
    function() {
        Route::get('/admin', 'HomeController@indexadmin')->name('admin');

        // Mahasiswa
        Route::resource('/admin/mahasiswa', 'UserController');

        // event
        Route::resource('/admin/event', 'EventController');
        Route::get('admin/event/{id}/detail-event', 'EventController@detailEvent');
    }
);

