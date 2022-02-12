<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
$data = ['comics' => config('comics'), 'nomePagina' => 'DC COMIC - Home'];
// $data = ['comics' => config('comics')];

return view('guest.comics', $data);
})->name('comics');



Route::get('/Characters', function(){

    $data = ['nomePagina' => 'DC COMIC - Characters'];
    return view('guest.Characters', $data);
})->name('Characters');


// Route::get('/home', function(){
//     $data = ['comics' => config('comics')];
//     return view('guest.home',$data);
// })->name('home');

Route::get('/movies', function(){
    $data = ['nomePagina' => 'DC COMIC - movies'];
    return view('guest.movies', $data);
})->name('movies');


Route::get('/tv', function(){
    $data = ['nomePagina' => 'DC COMIC - tv'];
    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function(){
    $data = ['nomePagina' => 'DC COMIC - games'];
    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function(){
    $data = ['nomePagina' => 'DC COMIC - collectibles'];
    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function(){
    $data = ['nomePagina' => 'DC COMIC - videos'];
    return view('guest.videos', $data);
})->name('videos');


Route::get('/fans', function(){
    $data = ['nomePagina' => 'DC COMIC - fans'];
    return view('guest.fans', $data);
})->name('fans');


Route::get('/news', function(){
    $data = ['nomePagina' => 'DC COMIC - news'];
    return view('guest.news', $data);
})->name('news');


Route::get('/shop', function(){
    $data = ['nomePagina' => 'DC COMIC - shop'];
    return view('guest.shop',$data);
})->name('shop');



