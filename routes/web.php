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

Route::get('/register', function() {
    return view('components.register');
}) -> name('register');

Route::post('/login/check', [UserAuthController::class, 'login']);
Route::post('/register/check', [UserAuthController::class, 'register']);

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {
    Route::get('/', function() {
        return redirect() -> route('dashboard');
    });

    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    }) -> name('admin.dashboard');

    Route::get('/customers', function() {
        return view('admin.customers');
    });

    Route::get('/customers/create', function() {
        return view ('customer.create');
    });

    Route::get('/customers/edit', function() {
        return view('customer.edit');
    });
});

Route::get('/logout', function() {
    session() -> flush();
    return redirect() -> route('login');
});