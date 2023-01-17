<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function ()
{
    return view('home');
});

Route::middleware
([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])
->group(function ()
{
    Route::get('/dashboard', function ()
    {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('services', [ServicesController::class, 'services'])->name('services');
Route::get('home', [HomeController::class, 'home'])->name('home');
