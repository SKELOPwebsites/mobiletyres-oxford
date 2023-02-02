<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function (Request $request) {
    return Inertia::render('Home', [
        'success' => $request->session()->get('success')
    ]);
});

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});
