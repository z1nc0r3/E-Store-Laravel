<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            session() -> put('name', session() -> has('name') ? session() -> get('name') : Auth::user() -> name);

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
            session() -> put('loginError', 'Invalid email or password');
            
            error_log('here');
            return redirect() -> route('login');
        }
    }

    public function register(Request $request) {
        $request -> validate([
            'email' => 'required | email',
            'password' => 'required | min:6 | alpha_num',
            'mobile' => 'required | min:10 | max:10',
        ]);

        $user = new User([
            'name' => $request -> name,
            'email' => $request -> email,
            'address' => $request -> address,
            'mobile' => $request -> mobile,
            'gender' => $request -> gender,
            'password' => $request -> password,
            'role' => $request -> role
        ]);

        if ($user -> save()) {
            session() -> put('isLogged', true);
            session() -> put('role', 'customer');
            session() -> put('name', $request -> name);
            return redirect() -> route('customer.dashboard');
        } else {
            session() -> put('isLogged', false);
            session() -> put('loginError', 'Invalid email or password');
            return redirect() -> route('login');
        }
    }
}
