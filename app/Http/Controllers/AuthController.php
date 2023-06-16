<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        // Validation form
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Check if user attempt
        if ( Auth::attempt( $credential ) ) {
            $request->session()->regenerate();
            if ( Auth::user()->status == '1' ) {
                return redirect()->intended( '/' )->with(['success' => 'Berhasil masuk.']);
            }
        }

        return redirect()->back()->with(['errortoast' => 'Email atau kata sandi salah!']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'born_date' => 'required',
            'address' => 'required',
            'ward' => 'required',
            'subdistrict' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => 1
        ]);

        $profile = Profiles::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'born_date' => $request->born_date,
            'address' => $request->address,
            'ward' => $request->ward,
            'subdistrict' => $request->subdistrict,
            'city' => $request->city,
            'province' => $request->province,
        ]);

        return redirect()->route('login')->with(['success' => 'Berhasil mendaftarkan akun.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with(['success' => 'Berhasil keluar.']);
    }
}
