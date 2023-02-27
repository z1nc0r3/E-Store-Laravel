<?php

use App\Http\Controllers\ProductsController;
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
    return redirect()->route('login');
});

Route::get('/login', function () {
    if (session()->has('isLogged') && session()->get('isLogged') == true) {
        switch (session()->get('role')) {
            case 'admin':
                return redirect()->route('admin.dashboard');
                break;
            case 'customer':
                return redirect()->route('customer.dashboard');
                break;
            case 'employee':
                return redirect()->route('employee.dashboard');
            default:
                return redirect()->route('login');
                break;
        }
    }

    return view('components.login');
})->name('login');

Route::get('/register', function () {
    return view('components.register');
})->name('register');

Route::post('/login/check', [UserAuthController::class, 'login']);
Route::post('/register/check', [UserAuthController::class, 'register']);

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Products routes
    Route::get('/products', [ProductsController::class, 'showProducts'])->name('admin.products');

    Route::get('/addproducts', function () {
        return view('admin.addproducts');
    })->name('admin.addproducts');

    Route::post('/addproducts/check', [ProductsController::class, 'addProduct']);

    // Actions for product
    Route::get('/showproduct/{id}', [ProductsController::class, 'showProduct'])->name('admin.showproduct');

    Route::get('/editproduct/{id}', [ProductsController::class, 'editProduct'])->name('admin.editproduct');

    Route::post('/updateproduct/check', [ProductsController::class, 'updateProduct']);

    Route::get('/deleteproduct/{id}', [ProductsController::class, 'deleteProduct'])->name('admin.deleteproduct');

    // Employee routes
    Route::get('/employees', function () {
        return view('admin.employees');
    });
});

Route::group(['prefix' => 'customer', 'middleware' => ['customer']], function () {
    Route::get('/', function () {
        return redirect()->route('customer.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');

    Route::get('/order', function () {
        return view('customer.order');
    });
});

Route::group(['prefix' => 'employee', 'middleware' => ['employee']], function () {
    Route::get('/', function () {
        return redirect()->route('employee.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');

    Route::get('/order', function () {
        return view('customer.order');
    });
});

Route::get('/logout', function () {
    session()->flush();
    return redirect()->route('login');
});
