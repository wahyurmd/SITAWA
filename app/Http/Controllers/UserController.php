<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $profile = DB::table('profiles')
        ->join('users', 'profiles.user_id', '=', 'users.id')
        ->select('users.*', 'profiles.*')
        ->where('profiles.user_id', Auth::user()->id)
        ->get();

        return view('profile', compact('profile'));
    }

    public function profileUpdate()
    {
        $profile = DB::table('profiles')
        ->join('users', 'profiles.user_id', '=', 'users.id')
        ->select('users.*', 'profiles.*')
        ->where('profiles.user_id', Auth::user()->id)
        ->get();

        return view('profile_update', compact('profile'));
    }
}
