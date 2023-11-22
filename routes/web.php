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
        // artikel
        Route::get('/artikel', 'HomePageController@artikel');
        Route::get('/artikel/{slug}', 'HomePageController@detailArtikel');        
        //live vote  
        Route::get('/live-vote/{slug}', 'VoteController@liveVote')->middleware('auth');
        Route::get('/update-vote-count/{eventSlug}', 'VoteController@updateVoteCount');
    }
);
// history tampilan user
Route::get('/hasil-vote', 'HistoryController@hasilVote');
Route::get('/hasil-vote/{slug}', 'HistoryController@detailHasilVote');

Auth::routes([
    'register' => false,
]);

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
        // history
        Route::get('/admin/history', 'HistoryController@index');
        Route::get('admin/history/{id}/detail-history', 'HistoryController@detailHistory');
        Route::get('admin/history/{id}/hasil-voting', 'HistoryController@hasilVoting');
        //artikel
        Route::resource('/admin/artikel', 'ArtikelController');
        Route::get('admin/artikel/{id}/detail-artikel', 'ArtikelController@detailArtikel');
        //live vote  
        Route::namespace('user')->group(function () {
            Route::get('admin/event/{id}/live-vote', 'VoteController@liveVoteInAdmin');
        });        
    }
);

