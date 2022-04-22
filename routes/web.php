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

Route::get('/index', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/', function () {
    return view('backend.index');
});
Route::get('/contact', function () {
    return view('backend.contact');
});
Route::get('/properties', function () {
    return view('backend.properties');
});
// Route::get('/detail', function () {
//     return view('property.detail');
// });

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('property', 'PropertyController')->middleware('auth');

//to view details
Route::get('/properties/{id}', 'PropertyController@view')->name('property.view');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//List Dashboard
Route::get('/index', 'PropertyController@listPropertyadmin')->middleware('auth');

//Listing user index
Route::get('/', 'PropertyController@listPropertyindex');
//Listing user properties 
Route::get('/properties', 'PropertyController@listPropertypropertise');