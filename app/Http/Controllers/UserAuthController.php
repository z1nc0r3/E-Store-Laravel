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

        if (Auth::attempt($credentials)) {
            $role = Auth::user() -> role;
            
            session() -> put('isLogged', true);
            session() -> put('role', $role);

            switch ($role) {
                case 'admin':
                    return redirect() -> route('admin.dashboard');
                    break;
                case 'customer':
                    return redirect() -> route('customer.dashboard');
                    break;
                case 'employee':
                    return redirect() -> route('employee.dashboard');
                default:
                    return redirect() -> route('login');
                    break;
            }
        } else {
            session() -> put('isLogged', false);
            session() -> put('error', 'Invalid email or password');
            return redirect() -> route('login');
        }
    }
}
