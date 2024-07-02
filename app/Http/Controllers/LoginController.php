<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
        if(Auth::user()->usertype == 'user') {
            return view('dashboard');
        } else {

            return view('admin.index');
        }

           
}

    }
}