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

// Route::get('/hasil-event', function () {
//     return view('umum.resultEvent');
// });

Route::get('/hasil-vote', function () {
    return view('umum.resultVote');
});

// user
Route::group(
    ['namespace' => 'user'],
    function () {
        Route::get('/', 'HomePageController@index');
        // event
        Route::get('/event', 'HomePageController@event');
        Route::get('/event/{slug}', 'HomePageController@detailEvent');
        Route::get('/daftar-kandidat/{slug}', 'HomePageController@listKandidat')->middleware('auth');
        Route::get('/detail-kandidat/{slug}', 'HomePageController@detailKandidat')->middleware('auth');
        Route::post('/kandidat/pilih/{slug}', 'VoteController@store')->middleware('auth');
        
        // history
        Route::get('/hasil-vote', 'HomePageController@hasilVote');
        Route::get('/hasil-vote/{slug}', 'HomePageController@detailHasilVote');
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
        
        // kandidat
        Route::resource('/admin/kandidat', 'KandidatController');
        Route::get('admin/kandidat/{id}/detail-kandidat', 'KandidatController@detailKandidat');
        
        // event
        Route::get('/admin/history', 'HistoryController@index');
        Route::get('admin/history/{id}/detail-history', 'HistoryController@detailHistory');
        Route::get('admin/history/{id}/hasil-voting', 'HistoryController@hasilVoting');
    }
);

