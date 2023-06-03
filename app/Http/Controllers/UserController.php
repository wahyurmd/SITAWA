<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserController extends Controller
{
    public function profile()
    {
        $profile = DB::table('users')
        ->join('profiles', 'profiles.user_id', '=', 'users.id')
        ->select('users.*', 'profiles.*')
        ->where('users.id', Auth::user()->id)
        ->get();
        
        return view('profile', compact('profile'));
    }

    public function profileUpdate()
    {
        $profile = DB::table('users')
        ->join('profiles', 'profiles.user_id', '=', 'users.id')
        ->select('users.*', 'profiles.*')
        ->where('users.id', Auth::user()->id)
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

        // dd($request->all());

        $user = User::find($id);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->updated_at   = Carbon::now();
        $user->save();

        $profile = Profiles::where('user_id', $id)->first();
        $profile->gender        = $request->gender;
        $profile->born_date     = $request->born_date;
        $profile->address       = $request->address;
        $profile->ward          = $request->ward;
        $profile->subdistrict   = $request->subdistrict;
        $profile->city          = $request->city;
        $profile->province      = $request->province;
        $profile->updated_at    = Carbon::now();
        $profile->save();

        // DB::transaction(function () use ($request, $id) {
        //     DB::table('users')
        //     ->where('id', $id)
        //     ->update([
        //         'name'          => $request->name,
        //         'email'         => $request->email,
        //         'updated_at'    => Carbon::now(),
        //     ]);

        //     DB::table('profiles')
        //     ->where('id', $id)
        //     ->update([
        //         'gender'        => $request->gender,
        //         'born_date'     => $request->born_date,
        //         'address'       => $request->address,
        //         'ward'          => $request->ward,
        //         'subdistrict'   => $request->subdistrict,
        //         'city'          => $request->city,
        //         'province'      => $request->province,
        //         'updated_at'    => Carbon::now(),
        //     ]);
        // });

        return redirect('/profile')->with('success', 'Data profil berhasil di ubah.');
    }
}
