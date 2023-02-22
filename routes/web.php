<?php

use App\Http\Controllers\UserAuthController;
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

Route::get('/', function() {
    return redirect() -> route('login');
});

Route::get('/login', function() {
    return view('components.login');
}) -> name('login');

Route::post('/login/check', [UserAuthController::class, 'login']);

Route::group(['prefix' => 'admin'], function() {
    if (!session() -> has('isLogged') || !session() -> get('isLogged') || !session() -> get('role') == 'admin') {
        return redirect() -> route('login');
    }

    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    });

    Route::get('/logout', function() {
        session() -> flush();
        return redirect() -> route('login');
    });
});