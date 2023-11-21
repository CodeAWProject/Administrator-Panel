<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function settings(User $user)
    {
        return view('settings.index', ['user' => auth()->user()]);
    }

    public function editChangePassword(User $user)
    {
        return view('settings.account.change_password');
    } 

    public function updatePassword(Request $request, User $user)
    {
         $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'       
        ]);

        $current_user = auth()->user();

        if(Hash::check($request->current_password, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('user.index');
        } else {
            return redirect()->back();
        }
    }

    public function editChangeEmail(User $user) {
        return view('settings.account.change_email');
    }

    public function updateEmail(Request $request, User $user)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'confirm_email' => 'required|same:email'
        ]);

        $current_user = auth()->user();

        $current_user->update($credentials);

        return redirect()->route('user.index');
    }
}
