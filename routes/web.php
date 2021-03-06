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

use App\Http\controllers\EventController;

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create']);
Route::get('/events/all/{city}',[EventController::class, 'getEvents']);
   
Route::get('/layouts', function () {
    return view('main');
                            });

Route::get('/contact', function () {
    return view('contact');
});


