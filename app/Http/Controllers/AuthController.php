<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function regisPage() {
        return view('pages.Auth.register');
    }

    public function loginPage() {
        return view('pages.Auth.login');
    }

    public function forgotPasswordPage() {
        return view('pages.Auth.forgot_password');
    }

    public function register(Request $request) {
        $validation = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            ]);
            
            $user->save();
            DB::commit();

            return view('pages.Auth.login', compact('user'));

        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->route('register')->with('error', 'Something error' . $e->getMessage());
        }
    }

    public function login(Request $request) {

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::where('email', $request->email)->first();

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            return redirect()->route('home');;
        }


        if (!Hash::check($request->password, $user->password)) {
            throw new \Exception('Invalid validation');
        }

        return redirect()->route('login')->withErrors([
            'error' => 'Data yang dinput salah Email / Password!',
        ]);

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }

}
