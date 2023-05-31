<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Program;
use App\Http\Controllers\Contact;
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

Route::get('/', function() {
    return view('coming');
})->name('comming');

Route::get('/home', [Home::class, 'index'])->name('home');

Route::get('/about', [About::class, 'index'])->name('about');

Route::get('/programmes',  [Program::class, 'index'])->name('programmes');

Route::get('/contact', [Contact::class, 'index'])->name('contact');

//programmes description and details

Route::get('/programmes/special', function () {
    return view('programmes/special');
})->name('special_kids_programme');


Route::get('/admin',  [Home::class, 'admin'])->name('home_settings');
Route::post('/admin', [Home::class, 'create']);

Route::get('/admin/about',  [About::class, 'admin'])->name('about_settings');
Route::post('/admin/about', [About::class, 'create']);


Route::get('/admin/program',  [Program::class, 'admin'])->name('program_settings');
Route::post('/admin/program', [Program::class, 'create']);


Route::get('/admin/contact', [Contact::class, 'admin'])->name('contact_settings');
Route::post('/admin/contact', [Contact::class, 'create']);