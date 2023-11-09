<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function register()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credentials = $request->only('name', 'email', 'password');

        $remember = false;

        if(Auth::attempt($credentials, $remember)) {
            return redirect()->route('user.index');
            


        } else {
            dd('false');
            return redirect()->back();
        }
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
