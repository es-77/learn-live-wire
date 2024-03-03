<?php

use App\Http\Livewire\Fullpage\AboutPage;
use App\Http\Livewire\Fullpage\Contactage;
use App\Http\Livewire\Fullpage\FullPageHome;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', AboutPage::class);
Route::get('/contact', Contactage::class);
Route::get('/home', FullPageHome::class);