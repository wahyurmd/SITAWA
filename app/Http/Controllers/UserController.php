<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profiles;
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

    public function profileAction(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'born_date' => 'required',
            'address' => 'required',
            'ward' => 'required',
            'subdistrict' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);

        $user = User::findOrFail($id);
        $profile = Profiles::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->updated_at = Carbon::now();

        $profile->gender = $request->gender;
        $profile->born_date = $request->born_date;
        $profile->address = $request->address;
        $profile->ward = $request->ward;
        $profile->subdistrict = $request->subdistrict;
        $profile->city = $request->city;
        $profile->province = $request->province;
        $profile->updated_at = Carbon::now();

        $user->save();
        $profile->save();

        return redirect('/profile')->with('success', 'Data profil berhasil di ubah.');
    }
}
