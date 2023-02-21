<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(Request $request) {

        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only('email', 'password');

        return view('admin.dashboard');

        if (Auth::attempt($credentials)) {
            session() -> put('isLogged', true);

            $role = Auth::user() -> role;

            switch ($role) {
                case 'admin':
                    return redirect(route('admin.dashboard'));
                    break;
                case 'user':
                    return redirect() -> route('customer.dashboard');
                    break;
                case 'employee':
                    return redirect() -> route('employee.dashboard');
                default:
                    return redirect() -> route('login');
                    break;
            }
        } else {
            session() -> put('error', 'Invalid email or password');
            return view('login');
        }
    }
}
