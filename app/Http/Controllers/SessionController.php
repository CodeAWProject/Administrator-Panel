<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class SessionController extends Controller
{
    public function deleteTokens()
    {
        Session::pull('refresh_token');
        Session::pull('access_token');
    }
}
