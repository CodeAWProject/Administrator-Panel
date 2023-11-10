<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings(User $user)
    {
        return view('settings.index', ['user' => auth()->user()]);
    }
}
