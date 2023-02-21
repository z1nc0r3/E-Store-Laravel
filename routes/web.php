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

Route::get('/', function () {
    if (!session() -> has('isLogged')) {
        return redirect('login');
    }
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/login/check', [UserAuthController::class, 'login']);