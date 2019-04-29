<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $user = auth()->user();
        return view('auth.profile',compact('user'));
    }
    public function storage(Request $request){


        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);
        $user->avatar = $avatarName;
        $user->save();
        return back()
            ->with('success','You have successfully upload image.');
    }

    public function updateProfile(Request $request)
    {
        if (!$request->hasFile('avatar')) {
            return [
                'status' => 'fail'
            ];
        }
        $user = $request->user();
        $avatar = $request->file('avatar');
        $name = sprintf('%s.%s',str_random(), $avatar->getClientOriginalExtension());
        $avatar->move(public_path('media'), $name);
        $user->avatar = asset('media/' . $name);
        $user->save();
        return [
            'avatar' => $user->avatar
        ];
    }
}
