<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/fonctionnalites', function () {
    return view('main_features');
})->name('main');

Route::get('/additional', function () {
    return view('additional_features');
})->name('additional');

Route::get('/Qui_sommes_nous', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    $countries=\App\Models\Country::all();
    return view('devis',compact('countries'));
})->name('estimate');

Route::get('/tarifs', function () {
    return view('pricing');
})->name('pricing');

Route::post('/contact/' ,[ContactController::class, 'store_contact'])->name('contact.store');
Route::post('/estimate/' ,[ContactController::class, 'store_estimate'])->name('estimate.store');
